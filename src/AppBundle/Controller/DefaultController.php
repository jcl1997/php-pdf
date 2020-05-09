<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $this
            ->print()
            ->print(1, array(
                'mode' => 'utf-8',
                'format' => 'A4-P',
                'margin_top' => 25,
                'margin_left' => 25,
                'margin_right' => 10,
                'margin_bottom' => 25,
                'title' => 'Quantidade de servidores por diploma de ingresso',
            ));
        die();
    }

    /**
     * @Route("/page", name="page")
     */
    public function pageAction()
    {
        $this
            ->print()
            ->print(2, array(
                'mode' => 'utf-8',
                'format' => 'A4-P',
                'margin_top' => 25,
                'margin_left' => 25,
                'margin_right' => 10,
                'margin_bottom' => 25,
                'title' => 'Relação de Servidores',
            ));
        die();
    }

    /**
     * @Route("/api", name="api")
     */
    public function apiAction()
    {
        $this
            ->print()
            ->print(3, array(
                'mode' => 'utf-8',
                'format' => 'A4-P',
                'margin_top' => 25,
                'margin_left' => 25,
                'margin_right' => 10,
                'margin_bottom' => 25,
                'title' => 'Relação de Servidores por Órgão de Lotação',
            ));
        die();
    }

    /**
     * @Route("/graph", name="graph")
     */
    public function graphAction()
    {
        $this
            ->print()
            ->print(4, array(
                'mode' => 'utf-8',
                'format' => 'A4-L',
                'margin_top' => 25,
                'margin_left' => 25,
                'margin_right' => 10,
                'margin_bottom' => 25,
                'orientation' => 'L',
                'title' => 'Quantidade de servidores por UF de exercício',
            ));
        die();
    }

    /**
     * @return \AppBundle\Util\Pdf
     */
    private function print()
    {
        return $this->get('api.utils.form.printer');
    }
}
