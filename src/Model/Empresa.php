<?php

namespace Umbrella\Ya\RetornoBoleto\Model;

use Easy\Collections\ArrayList;
use Easy\Collections\VectorInterface;
use Stringy\Stringy;

class Empresa
{
    protected $cod;
    protected $tipoInscricao;
    protected $numInscricao;
    protected $nome;

    /**
     *
     * @var Endereco
     */
    protected $endereco;

    /**
     *
     * @var VectorInterface
     */
    protected $usos;

    /**
     *
     * @var VectorInterface
     */
    protected $reservados;

    /**
     * @var Banco
     */
    protected $banco;

    public function __construct()
    {
        $this->reservados = new ArrayList();
        $this->usos = new ArrayList();
    }

    public function getCod()
    {
        return $this->cod;
    }

    public function setCod($cod)
    {
        $this->cod = $cod;
        return $this;
    }

    public function getTipoInscricao()
    {
        return $this->tipoInscricao;
    }

    public function getNumInscricao()
    {
        return $this->numInscricao;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function getUsos()
    {
        return $this->usos;
    }

    /**
     * @param string $tipoInscricao
     */
    public function setTipoInscricao($tipoInscricao)
    {
        $this->tipoInscricao = $tipoInscricao;
        return $this;
    }

    /**
     * @param string $numInscricao
     */
    public function setNumInscricao($numInscricao)
    {
        $this->numInscricao = $numInscricao;
        return $this;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function setEndereco(Endereco $endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function setUsos(VectorInterface $usos)
    {
        $this->usos = $usos;
        return $this;
    }

    /**
     * @param Stringy $uso
     * @return $this
     */
    public function addUso(Stringy $uso)
    {
        $uso = $uso->trim();
        if (!$uso->isBlank()) {
            $this->usos->add($uso);
        }
        return $this;
    }

    public function removeUso($uso)
    {
        $this->usos->remove($uso);
        return $this;
    }

    /**
     * @param Stringy $cnab
     * @return $this
     */
    public function addReservado(Stringy $cnab)
    {
        $cnab = $cnab->trim();
        if (!$cnab->isBlank()) {
            $this->reservados->add($cnab);
        }
        return $this;
    }

    public function removeReservado($cnab)
    {
        $this->reservados->remove($cnab);
        return $this;
    }

    public function getReservados()
    {
        return $this->reservados;
    }

    public function setReservados(VectorInterface $reservados)
    {
        $this->reservados = $reservados;
        return $this;
    }

    public function getBanco()
    {
        return $this->banco;
    }

    public function setBanco(Banco $banco)
    {
        $this->banco = $banco;
        return $this;
    }
}
