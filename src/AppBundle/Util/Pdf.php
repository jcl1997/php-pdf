<?php

namespace AppBundle\Util;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\TwigBundle\TwigEngine;
use Mpdf\HTMLParserMode;
use Mpdf\Mpdf;
use Mpdf\Output\Destination;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Pdf
{
    const NAME = 'api.utils.printer.html';

    private $container;
    private $mpdf;
    private $templating = null;
    private $em = null;

    public function __construct(
        TwigEngine $templating,
        EntityManagerInterface $em,
        ContainerInterface $container
    ) {
        $this->container = $container;
        $this->templating = $templating;
        $this->em = $em;
    }

    public function print($context, $settings)
    {
        $diplomas = $context == 1 
            ? $this->getDiplomaIngressoOrgao()
            : [];
        $relacaoServidores = $context == 2
            ? $this->getRelacaoServidores()
            : [];

        $relacaoServidoresPorOrgaoLotacao = $context == 3
            ? $this->getRelacaoServidoresPorOrgaoLotacao()
            : [];

        $content = $this
            ->templating
            ->render('report.html.twig', array(
                'diplomas' => $diplomas,
                'relacaoServidores' => $relacaoServidores,
                'relacaoServidoresPorOrgaoLotacao' => $relacaoServidoresPorOrgaoLotacao,
                'context' => $context,
                'title' => $settings['title'],
            ));

        $this->mpdf = new Mpdf(array(
            'mode' => $settings['mode'],
            'format' => $settings['format'],
            'margin_top' => $settings['margin_top'],
            'margin_left' => $settings['margin_left'],
            'margin_right' => $settings['margin_right'],
            'margin_bottom' => $settings['margin_bottom'],
            'orientation' => isset($settings['orientation'])? $settings['orientation'] : 'P'
        ));

        $now = new \DateTime('now');

        $footer = array (
            'odd' => array (
                'L' => array (
                    'content' => 'Nome: Júlio César Lima',
                    'font-size' => 10,
                    'font-family' => 'arial',
                    'color'=>'#000000'
                ),
                'C' => array (
                    'content' => 'RA: 31910749',
                    'font-size' => 10,
                    'font-family' => 'serif',
                    'color'=>'#000000'
                ),
                'R' => array (
                    'content' => "{$now->format('Y-m-d H:i:s')} - {PAGENO}/{nb}",
                    'font-size' => 10,
                    'font-family' => 'arial',
                    'color'=>'#000000'
                ),
                'line' => 1,
            ),
            'even' => array ()
        );
        
        
        $this->mpdf->SetFooter($footer);
        $this->mpdf->WriteHTML($this->css(), HTMLParserMode::HEADER_CSS);
        $this->mpdf->WriteHTML($content, HTMLParserMode::HTML_BODY);
        if ($context == 4) {
            $this->mpdf->Image($this->graph(), 50, 50);
        }
        
        $this->mpdf->Output("{$settings['title']}.pdf", Destination::INLINE);
    }

    private function getDiplomaIngressoOrgao()
    {
        $qb = $this
            ->repositoryTbServidor()
            ->createQueryBuilder('tbs');

        $qb->select(array(
            'tbs.diplomaIngressoOrgao',
            'COUNT(tbs.id) AS numeroServidores',
        ));

        $qb->groupBy('tbs.diplomaIngressoOrgao');
        $qb->orderBy('tbs.diplomaIngressoOrgao', 'ASC');

        return $qb->getQuery()->getResult();
    }

    private function getRelacaoServidores()
    {
        $qb = $this
            ->repositoryTbServidor()
            ->createQueryBuilder('tbs');

        $qb->select(array(
            'tbs.nome',
            'tbs.atividade',
            'tbs.situacaoVinculo',
        ));

        $qb->orderBy('tbs.nome', 'ASC');

        return $qb->getQuery()->getResult();
    }  

    private function getRelacaoServidoresPorOrgaoLotacao()
    {
        $qb = $this
            ->repositoryTbServidor()
            ->createQueryBuilder('tbs');

        $qb->select(array(
            'tbs.nome',
            'tbs.cpf',
            'tbs.matricula',
            'tbs.orgLotacao',
            'tbs.descricaoCargo',
        ));

        $qb->orderBy('tbs.orgLotacao', 'ASC');
        $qb->addOrderBy('tbs.nome', 'ASC');

        $result = $qb->getQuery()->getResult();
        $data = array();
        foreach($result as $row) {
            $lotacao = $row['orgLotacao'];
            unset($row['orgLotacao']);
            $data[$lotacao][] = $row;
        }

        return $data;
    } 
    
    private function graph()
    {
        $path = implode(DIRECTORY_SEPARATOR, array(
            realpath($this->container->getParameter('kernel.project_dir')),
            'web',
            'Chart.png',
        ));

        return $path;
    }

    private function css()
    {
        $path = implode(DIRECTORY_SEPARATOR, array(
            realpath($this->container->getParameter('kernel.project_dir')),
            'web',
            'css',
            'print.css',
        ));

        return file_get_contents($path);
    }

    /**
     * @return \Doctrine\ORM\EntityRepository
     */
    private function repositoryTbServidor()
    {
        return $this
            ->em
            ->getRepository('AppBundle:TbServidor');
    }
}
