<?php

namespace AppBundle\Entity;

/**
 * TbServidor
 */
class TbServidor
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $atividade;

    /**
     * @var string
     */
    private $classeCargo;

    /**
     * @var integer
     */
    private $codOrgExercicio;

    /**
     * @var integer
     */
    private $codOrgLotacao;

    /**
     * @var integer
     */
    private $codOrgsupExercicio;

    /**
     * @var integer
     */
    private $codOrgsupLotacao;

    /**
     * @var integer
     */
    private $codUorgExercicio;

    /**
     * @var integer
     */
    private $codUorgLotacao;

    /**
     * @var string
     */
    private $codigoAtividade;

    /**
     * @var string
     */
    private $cpf;

    /**
     * @var string
     */
    private $dataDiplomaIngressoServicopublico;

    /**
     * @var string
     */
    private $dataIngressoCargofuncao;

    /**
     * @var string
     */
    private $dataIngressoOrgao;

    /**
     * @var string
     */
    private $dataInicioAfastamento;

    /**
     * @var string
     */
    private $dataNomeacaoCargofuncao;

    /**
     * @var string
     */
    private $dataTerminoAfastamento;

    /**
     * @var string
     */
    private $descricaoCargo;

    /**
     * @var string
     */
    private $diplomaIngressoCargofuncao;

    /**
     * @var string
     */
    private $diplomaIngressoOrgao;

    /**
     * @var string
     */
    private $diplomaIngressoServicopublico;

    /**
     * @var string
     */
    private $documentoIngressoServicopublico;

    /**
     * @var string
     */
    private $funcao;

    /**
     * @var integer
     */
    private $idServidorPortal;

    /**
     * @var string
     */
    private $jornadaDeTrabalho;

    /**
     * @var string
     */
    private $matricula;

    /**
     * @var string
     */
    private $nivelCargo;

    /**
     * @var string
     */
    private $nivelFuncao;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $opcaoParcial;

    /**
     * @var string
     */
    private $orgExercicio;

    /**
     * @var string
     */
    private $orgLotacao;

    /**
     * @var string
     */
    private $orgsupExercicio;

    /**
     * @var string
     */
    private $orgsupLotacao;

    /**
     * @var string
     */
    private $padraoCargo;

    /**
     * @var string
     */
    private $referenciaCargo;

    /**
     * @var string
     */
    private $regimeJuridico;

    /**
     * @var string
     */
    private $siglaFuncao;

    /**
     * @var string
     */
    private $situacaoVinculo;

    /**
     * @var integer
     */
    private $tipoVinculo;

    /**
     * @var string
     */
    private $ufExercicio;

    /**
     * @var string
     */
    private $uorgExercicio;

    /**
     * @var string
     */
    private $uorgLotacao;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set atividade
     *
     * @param string $atividade
     *
     * @return TbServidor
     */
    public function setAtividade($atividade)
    {
        $this->atividade = $atividade;

        return $this;
    }

    /**
     * Get atividade
     *
     * @return string
     */
    public function getAtividade()
    {
        return $this->atividade;
    }

    /**
     * Set classeCargo
     *
     * @param string $classeCargo
     *
     * @return TbServidor
     */
    public function setClasseCargo($classeCargo)
    {
        $this->classeCargo = $classeCargo;

        return $this;
    }

    /**
     * Get classeCargo
     *
     * @return string
     */
    public function getClasseCargo()
    {
        return $this->classeCargo;
    }

    /**
     * Set codOrgExercicio
     *
     * @param integer $codOrgExercicio
     *
     * @return TbServidor
     */
    public function setCodOrgExercicio($codOrgExercicio)
    {
        $this->codOrgExercicio = $codOrgExercicio;

        return $this;
    }

    /**
     * Get codOrgExercicio
     *
     * @return integer
     */
    public function getCodOrgExercicio()
    {
        return $this->codOrgExercicio;
    }

    /**
     * Set codOrgLotacao
     *
     * @param integer $codOrgLotacao
     *
     * @return TbServidor
     */
    public function setCodOrgLotacao($codOrgLotacao)
    {
        $this->codOrgLotacao = $codOrgLotacao;

        return $this;
    }

    /**
     * Get codOrgLotacao
     *
     * @return integer
     */
    public function getCodOrgLotacao()
    {
        return $this->codOrgLotacao;
    }

    /**
     * Set codOrgsupExercicio
     *
     * @param integer $codOrgsupExercicio
     *
     * @return TbServidor
     */
    public function setCodOrgsupExercicio($codOrgsupExercicio)
    {
        $this->codOrgsupExercicio = $codOrgsupExercicio;

        return $this;
    }

    /**
     * Get codOrgsupExercicio
     *
     * @return integer
     */
    public function getCodOrgsupExercicio()
    {
        return $this->codOrgsupExercicio;
    }

    /**
     * Set codOrgsupLotacao
     *
     * @param integer $codOrgsupLotacao
     *
     * @return TbServidor
     */
    public function setCodOrgsupLotacao($codOrgsupLotacao)
    {
        $this->codOrgsupLotacao = $codOrgsupLotacao;

        return $this;
    }

    /**
     * Get codOrgsupLotacao
     *
     * @return integer
     */
    public function getCodOrgsupLotacao()
    {
        return $this->codOrgsupLotacao;
    }

    /**
     * Set codUorgExercicio
     *
     * @param integer $codUorgExercicio
     *
     * @return TbServidor
     */
    public function setCodUorgExercicio($codUorgExercicio)
    {
        $this->codUorgExercicio = $codUorgExercicio;

        return $this;
    }

    /**
     * Get codUorgExercicio
     *
     * @return integer
     */
    public function getCodUorgExercicio()
    {
        return $this->codUorgExercicio;
    }

    /**
     * Set codUorgLotacao
     *
     * @param integer $codUorgLotacao
     *
     * @return TbServidor
     */
    public function setCodUorgLotacao($codUorgLotacao)
    {
        $this->codUorgLotacao = $codUorgLotacao;

        return $this;
    }

    /**
     * Get codUorgLotacao
     *
     * @return integer
     */
    public function getCodUorgLotacao()
    {
        return $this->codUorgLotacao;
    }

    /**
     * Set codigoAtividade
     *
     * @param string $codigoAtividade
     *
     * @return TbServidor
     */
    public function setCodigoAtividade($codigoAtividade)
    {
        $this->codigoAtividade = $codigoAtividade;

        return $this;
    }

    /**
     * Get codigoAtividade
     *
     * @return string
     */
    public function getCodigoAtividade()
    {
        return $this->codigoAtividade;
    }

    /**
     * Set cpf
     *
     * @param string $cpf
     *
     * @return TbServidor
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get cpf
     *
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set dataDiplomaIngressoServicopublico
     *
     * @param string $dataDiplomaIngressoServicopublico
     *
     * @return TbServidor
     */
    public function setDataDiplomaIngressoServicopublico($dataDiplomaIngressoServicopublico)
    {
        $this->dataDiplomaIngressoServicopublico = $dataDiplomaIngressoServicopublico;

        return $this;
    }

    /**
     * Get dataDiplomaIngressoServicopublico
     *
     * @return string
     */
    public function getDataDiplomaIngressoServicopublico()
    {
        return $this->dataDiplomaIngressoServicopublico;
    }

    /**
     * Set dataIngressoCargofuncao
     *
     * @param string $dataIngressoCargofuncao
     *
     * @return TbServidor
     */
    public function setDataIngressoCargofuncao($dataIngressoCargofuncao)
    {
        $this->dataIngressoCargofuncao = $dataIngressoCargofuncao;

        return $this;
    }

    /**
     * Get dataIngressoCargofuncao
     *
     * @return string
     */
    public function getDataIngressoCargofuncao()
    {
        return $this->dataIngressoCargofuncao;
    }

    /**
     * Set dataIngressoOrgao
     *
     * @param string $dataIngressoOrgao
     *
     * @return TbServidor
     */
    public function setDataIngressoOrgao($dataIngressoOrgao)
    {
        $this->dataIngressoOrgao = $dataIngressoOrgao;

        return $this;
    }

    /**
     * Get dataIngressoOrgao
     *
     * @return string
     */
    public function getDataIngressoOrgao()
    {
        return $this->dataIngressoOrgao;
    }

    /**
     * Set dataInicioAfastamento
     *
     * @param string $dataInicioAfastamento
     *
     * @return TbServidor
     */
    public function setDataInicioAfastamento($dataInicioAfastamento)
    {
        $this->dataInicioAfastamento = $dataInicioAfastamento;

        return $this;
    }

    /**
     * Get dataInicioAfastamento
     *
     * @return string
     */
    public function getDataInicioAfastamento()
    {
        return $this->dataInicioAfastamento;
    }

    /**
     * Set dataNomeacaoCargofuncao
     *
     * @param string $dataNomeacaoCargofuncao
     *
     * @return TbServidor
     */
    public function setDataNomeacaoCargofuncao($dataNomeacaoCargofuncao)
    {
        $this->dataNomeacaoCargofuncao = $dataNomeacaoCargofuncao;

        return $this;
    }

    /**
     * Get dataNomeacaoCargofuncao
     *
     * @return string
     */
    public function getDataNomeacaoCargofuncao()
    {
        return $this->dataNomeacaoCargofuncao;
    }

    /**
     * Set dataTerminoAfastamento
     *
     * @param string $dataTerminoAfastamento
     *
     * @return TbServidor
     */
    public function setDataTerminoAfastamento($dataTerminoAfastamento)
    {
        $this->dataTerminoAfastamento = $dataTerminoAfastamento;

        return $this;
    }

    /**
     * Get dataTerminoAfastamento
     *
     * @return string
     */
    public function getDataTerminoAfastamento()
    {
        return $this->dataTerminoAfastamento;
    }

    /**
     * Set descricaoCargo
     *
     * @param string $descricaoCargo
     *
     * @return TbServidor
     */
    public function setDescricaoCargo($descricaoCargo)
    {
        $this->descricaoCargo = $descricaoCargo;

        return $this;
    }

    /**
     * Get descricaoCargo
     *
     * @return string
     */
    public function getDescricaoCargo()
    {
        return $this->descricaoCargo;
    }

    /**
     * Set diplomaIngressoCargofuncao
     *
     * @param string $diplomaIngressoCargofuncao
     *
     * @return TbServidor
     */
    public function setDiplomaIngressoCargofuncao($diplomaIngressoCargofuncao)
    {
        $this->diplomaIngressoCargofuncao = $diplomaIngressoCargofuncao;

        return $this;
    }

    /**
     * Get diplomaIngressoCargofuncao
     *
     * @return string
     */
    public function getDiplomaIngressoCargofuncao()
    {
        return $this->diplomaIngressoCargofuncao;
    }

    /**
     * Set diplomaIngressoOrgao
     *
     * @param string $diplomaIngressoOrgao
     *
     * @return TbServidor
     */
    public function setDiplomaIngressoOrgao($diplomaIngressoOrgao)
    {
        $this->diplomaIngressoOrgao = $diplomaIngressoOrgao;

        return $this;
    }

    /**
     * Get diplomaIngressoOrgao
     *
     * @return string
     */
    public function getDiplomaIngressoOrgao()
    {
        return $this->diplomaIngressoOrgao;
    }

    /**
     * Set diplomaIngressoServicopublico
     *
     * @param string $diplomaIngressoServicopublico
     *
     * @return TbServidor
     */
    public function setDiplomaIngressoServicopublico($diplomaIngressoServicopublico)
    {
        $this->diplomaIngressoServicopublico = $diplomaIngressoServicopublico;

        return $this;
    }

    /**
     * Get diplomaIngressoServicopublico
     *
     * @return string
     */
    public function getDiplomaIngressoServicopublico()
    {
        return $this->diplomaIngressoServicopublico;
    }

    /**
     * Set documentoIngressoServicopublico
     *
     * @param string $documentoIngressoServicopublico
     *
     * @return TbServidor
     */
    public function setDocumentoIngressoServicopublico($documentoIngressoServicopublico)
    {
        $this->documentoIngressoServicopublico = $documentoIngressoServicopublico;

        return $this;
    }

    /**
     * Get documentoIngressoServicopublico
     *
     * @return string
     */
    public function getDocumentoIngressoServicopublico()
    {
        return $this->documentoIngressoServicopublico;
    }

    /**
     * Set funcao
     *
     * @param string $funcao
     *
     * @return TbServidor
     */
    public function setFuncao($funcao)
    {
        $this->funcao = $funcao;

        return $this;
    }

    /**
     * Get funcao
     *
     * @return string
     */
    public function getFuncao()
    {
        return $this->funcao;
    }

    /**
     * Set idServidorPortal
     *
     * @param integer $idServidorPortal
     *
     * @return TbServidor
     */
    public function setIdServidorPortal($idServidorPortal)
    {
        $this->idServidorPortal = $idServidorPortal;

        return $this;
    }

    /**
     * Get idServidorPortal
     *
     * @return integer
     */
    public function getIdServidorPortal()
    {
        return $this->idServidorPortal;
    }

    /**
     * Set jornadaDeTrabalho
     *
     * @param string $jornadaDeTrabalho
     *
     * @return TbServidor
     */
    public function setJornadaDeTrabalho($jornadaDeTrabalho)
    {
        $this->jornadaDeTrabalho = $jornadaDeTrabalho;

        return $this;
    }

    /**
     * Get jornadaDeTrabalho
     *
     * @return string
     */
    public function getJornadaDeTrabalho()
    {
        return $this->jornadaDeTrabalho;
    }

    /**
     * Set matricula
     *
     * @param string $matricula
     *
     * @return TbServidor
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get matricula
     *
     * @return string
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set nivelCargo
     *
     * @param string $nivelCargo
     *
     * @return TbServidor
     */
    public function setNivelCargo($nivelCargo)
    {
        $this->nivelCargo = $nivelCargo;

        return $this;
    }

    /**
     * Get nivelCargo
     *
     * @return string
     */
    public function getNivelCargo()
    {
        return $this->nivelCargo;
    }

    /**
     * Set nivelFuncao
     *
     * @param string $nivelFuncao
     *
     * @return TbServidor
     */
    public function setNivelFuncao($nivelFuncao)
    {
        $this->nivelFuncao = $nivelFuncao;

        return $this;
    }

    /**
     * Get nivelFuncao
     *
     * @return string
     */
    public function getNivelFuncao()
    {
        return $this->nivelFuncao;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return TbServidor
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set opcaoParcial
     *
     * @param string $opcaoParcial
     *
     * @return TbServidor
     */
    public function setOpcaoParcial($opcaoParcial)
    {
        $this->opcaoParcial = $opcaoParcial;

        return $this;
    }

    /**
     * Get opcaoParcial
     *
     * @return string
     */
    public function getOpcaoParcial()
    {
        return $this->opcaoParcial;
    }

    /**
     * Set orgExercicio
     *
     * @param string $orgExercicio
     *
     * @return TbServidor
     */
    public function setOrgExercicio($orgExercicio)
    {
        $this->orgExercicio = $orgExercicio;

        return $this;
    }

    /**
     * Get orgExercicio
     *
     * @return string
     */
    public function getOrgExercicio()
    {
        return $this->orgExercicio;
    }

    /**
     * Set orgLotacao
     *
     * @param string $orgLotacao
     *
     * @return TbServidor
     */
    public function setOrgLotacao($orgLotacao)
    {
        $this->orgLotacao = $orgLotacao;

        return $this;
    }

    /**
     * Get orgLotacao
     *
     * @return string
     */
    public function getOrgLotacao()
    {
        return $this->orgLotacao;
    }

    /**
     * Set orgsupExercicio
     *
     * @param string $orgsupExercicio
     *
     * @return TbServidor
     */
    public function setOrgsupExercicio($orgsupExercicio)
    {
        $this->orgsupExercicio = $orgsupExercicio;

        return $this;
    }

    /**
     * Get orgsupExercicio
     *
     * @return string
     */
    public function getOrgsupExercicio()
    {
        return $this->orgsupExercicio;
    }

    /**
     * Set orgsupLotacao
     *
     * @param string $orgsupLotacao
     *
     * @return TbServidor
     */
    public function setOrgsupLotacao($orgsupLotacao)
    {
        $this->orgsupLotacao = $orgsupLotacao;

        return $this;
    }

    /**
     * Get orgsupLotacao
     *
     * @return string
     */
    public function getOrgsupLotacao()
    {
        return $this->orgsupLotacao;
    }

    /**
     * Set padraoCargo
     *
     * @param string $padraoCargo
     *
     * @return TbServidor
     */
    public function setPadraoCargo($padraoCargo)
    {
        $this->padraoCargo = $padraoCargo;

        return $this;
    }

    /**
     * Get padraoCargo
     *
     * @return string
     */
    public function getPadraoCargo()
    {
        return $this->padraoCargo;
    }

    /**
     * Set referenciaCargo
     *
     * @param string $referenciaCargo
     *
     * @return TbServidor
     */
    public function setReferenciaCargo($referenciaCargo)
    {
        $this->referenciaCargo = $referenciaCargo;

        return $this;
    }

    /**
     * Get referenciaCargo
     *
     * @return string
     */
    public function getReferenciaCargo()
    {
        return $this->referenciaCargo;
    }

    /**
     * Set regimeJuridico
     *
     * @param string $regimeJuridico
     *
     * @return TbServidor
     */
    public function setRegimeJuridico($regimeJuridico)
    {
        $this->regimeJuridico = $regimeJuridico;

        return $this;
    }

    /**
     * Get regimeJuridico
     *
     * @return string
     */
    public function getRegimeJuridico()
    {
        return $this->regimeJuridico;
    }

    /**
     * Set siglaFuncao
     *
     * @param string $siglaFuncao
     *
     * @return TbServidor
     */
    public function setSiglaFuncao($siglaFuncao)
    {
        $this->siglaFuncao = $siglaFuncao;

        return $this;
    }

    /**
     * Get siglaFuncao
     *
     * @return string
     */
    public function getSiglaFuncao()
    {
        return $this->siglaFuncao;
    }

    /**
     * Set situacaoVinculo
     *
     * @param string $situacaoVinculo
     *
     * @return TbServidor
     */
    public function setSituacaoVinculo($situacaoVinculo)
    {
        $this->situacaoVinculo = $situacaoVinculo;

        return $this;
    }

    /**
     * Get situacaoVinculo
     *
     * @return string
     */
    public function getSituacaoVinculo()
    {
        return $this->situacaoVinculo;
    }

    /**
     * Set tipoVinculo
     *
     * @param integer $tipoVinculo
     *
     * @return TbServidor
     */
    public function setTipoVinculo($tipoVinculo)
    {
        $this->tipoVinculo = $tipoVinculo;

        return $this;
    }

    /**
     * Get tipoVinculo
     *
     * @return integer
     */
    public function getTipoVinculo()
    {
        return $this->tipoVinculo;
    }

    /**
     * Set ufExercicio
     *
     * @param string $ufExercicio
     *
     * @return TbServidor
     */
    public function setUfExercicio($ufExercicio)
    {
        $this->ufExercicio = $ufExercicio;

        return $this;
    }

    /**
     * Get ufExercicio
     *
     * @return string
     */
    public function getUfExercicio()
    {
        return $this->ufExercicio;
    }

    /**
     * Set uorgExercicio
     *
     * @param string $uorgExercicio
     *
     * @return TbServidor
     */
    public function setUorgExercicio($uorgExercicio)
    {
        $this->uorgExercicio = $uorgExercicio;

        return $this;
    }

    /**
     * Get uorgExercicio
     *
     * @return string
     */
    public function getUorgExercicio()
    {
        return $this->uorgExercicio;
    }

    /**
     * Set uorgLotacao
     *
     * @param string $uorgLotacao
     *
     * @return TbServidor
     */
    public function setUorgLotacao($uorgLotacao)
    {
        $this->uorgLotacao = $uorgLotacao;

        return $this;
    }

    /**
     * Get uorgLotacao
     *
     * @return string
     */
    public function getUorgLotacao()
    {
        return $this->uorgLotacao;
    }
}

