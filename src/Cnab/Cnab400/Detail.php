<?php

namespace Umbrella\Ya\RetornoBoleto\Cnab\Cnab400;

use Easy\Collections\ArrayList;
use Easy\Collections\VectorInterface;
use Umbrella\Ya\RetornoBoleto\Model\Banco;

class Detail extends AbstractCnab400 implements DetailInterface
{
    protected $taxaDesconto;
    protected $taxaIof;
    protected $cateira;
    protected $comando;
    protected $dataOcorrencia;
    protected $numTitulo;
    protected $dataVencimento;
    protected $valor;
    protected $especie;
    protected $dataCredito;
    protected $valorTarifa;
    protected $outrasDespesas;
    protected $jurosDesconto;
    protected $iofDesconto;
    protected $valorAbatimento;
    protected $descontoConcedido;
    protected $valorRecebido;
    protected $jurosMora;
    protected $outrosRecebimentos;
    protected $abatimentoNaoAprovado;
    protected $valorLancamento;
    protected $indicativoDc;
    protected $indicadorValor;
    protected $valorAjuste;
    protected $canalPagTitulo;
    protected $sequencial;
    protected $dataEntradaLiquidacao;

    /**
     *
     * @var Banco
     */
    protected $bancoEmissor;

    /**
     *
     * @var Banco
     */
    protected $bancoRecebedor;

    /**
     *
     * @var VectorInterface
     */
    protected $zeros;

    /**
     *
     * @var VectorInterface
     */
    protected $brancos;

    public function __construct()
    {
        $this->zeros = new ArrayList();
        $this->brancos = new ArrayList();
        parent::__construct();
    }

    public function getTaxaDesconto()
    {
        return $this->taxaDesconto;
    }

    public function getTaxaIof()
    {
        return $this->taxaIof;
    }

    public function getCateira()
    {
        return $this->cateira;
    }

    public function getComando()
    {
        return $this->comando;
    }

    public function getDataOcorrencia()
    {
        return $this->dataOcorrencia;
    }

    public function getNumTitulo()
    {
        return $this->numTitulo;
    }

    public function getDataVencimento()
    {
        return $this->dataVencimento;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getEspecie()
    {
        return $this->especie;
    }

    public function getDataCredito()
    {
        return $this->dataCredito;
    }

    public function getValorTarifa()
    {
        return $this->valorTarifa;
    }

    public function getOutrasDespesas()
    {
        return $this->outrasDespesas;
    }

    public function getJurosDesconto()
    {
        return $this->jurosDesconto;
    }

    public function getIofDesconto()
    {
        return $this->iofDesconto;
    }

    public function getValorAbatimento()
    {
        return $this->valorAbatimento;
    }

    public function getDescontoConcedido()
    {
        return $this->descontoConcedido;
    }

    public function getValorRecebido()
    {
        return $this->valorRecebido;
    }

    public function getJurosMora()
    {
        return $this->jurosMora;
    }

    public function getOutrosRecebimentos()
    {
        return $this->outrosRecebimentos;
    }

    public function getAbatimentoNaoAprovado()
    {
        return $this->abatimentoNaoAprovado;
    }

    public function getValorLancamento()
    {
        return $this->valorLancamento;
    }

    public function getIndicativoDc()
    {
        return $this->indicativoDc;
    }

    public function getValorAjuste()
    {
        return $this->valorAjuste;
    }

    public function getCanalPagTitulo()
    {
        return $this->canalPagTitulo;
    }

    public function getSequencial()
    {
        return $this->sequencial;
    }

    public function getBancoEmissor()
    {
        return $this->bancoEmissor;
    }

    public function setTaxaDesconto($taxaDesconto)
    {
        $this->taxaDesconto = $taxaDesconto;
        return $this;
    }

    public function setTaxaIof($taxaIof)
    {
        $this->taxaIof = $taxaIof;
        return $this;
    }

    public function setCateira($cateira)
    {
        $this->cateira = $cateira;
        return $this;
    }

    public function setComando($comando)
    {
        $this->comando = $comando;
        return $this;
    }

    public function setDataOcorrencia($dataOcorrencia)
    {
        $this->dataOcorrencia = $dataOcorrencia;
        return $this;
    }

    public function setNumTitulo($numTitulo)
    {
        $this->numTitulo = $numTitulo;
        return $this;
    }

    public function setDataVencimento($dataVencimento)
    {
        $this->dataVencimento = $dataVencimento;
        return $this;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
        return $this;
    }

    public function setEspecie($especie)
    {
        $this->especie = $especie;
        return $this;
    }

    public function setDataCredito($dataCredito)
    {
        $this->dataCredito = $dataCredito;
        return $this;
    }

    public function setValorTarifa($valorTarifa)
    {
        $this->valorTarifa = $valorTarifa;
        return $this;
    }

    public function setOutrasDespesas($outrasDespesas)
    {
        $this->outrasDespesas = $outrasDespesas;
        return $this;
    }

    public function setJurosDesconto($jurosDesconto)
    {
        $this->jurosDesconto = $jurosDesconto;
        return $this;
    }

    public function setIofDesconto($iofDesconto)
    {
        $this->iofDesconto = $iofDesconto;
        return $this;
    }

    public function setValorAbatimento($valorAbatimento)
    {
        $this->valorAbatimento = $valorAbatimento;
        return $this;
    }

    public function setDescontoConcedido($descontoConcedido)
    {
        $this->descontoConcedido = $descontoConcedido;
        return $this;
    }

    public function setValorRecebido($valorRecebido)
    {
        $this->valorRecebido = $valorRecebido;
        return $this;
    }

    public function setJurosMora($jurosMora)
    {
        $this->jurosMora = $jurosMora;
        return $this;
    }

    public function setOutrosRecebimentos($outrosRecebimentos)
    {
        $this->outrosRecebimentos = $outrosRecebimentos;
        return $this;
    }

    public function setAbatimentoNaoAprovado($abatimentoNaoAprovado)
    {
        $this->abatimentoNaoAprovado = $abatimentoNaoAprovado;
        return $this;
    }

    public function setValorLancamento($valorLancamento)
    {
        $this->valorLancamento = $valorLancamento;
        return $this;
    }

    public function setIndicativoDc($indicativoDc)
    {
        $this->indicativoDc = $indicativoDc;
        return $this;
    }

    public function setValorAjuste($valorAjuste)
    {
        $this->valorAjuste = $valorAjuste;
        return $this;
    }

    public function setCanalPagTitulo($canalPagTitulo)
    {
        $this->canalPagTitulo = $canalPagTitulo;
        return $this;
    }

    public function setSequencial($sequencial)
    {
        $this->sequencial = $sequencial;
        return $this;
    }

    public function setBancoEmissor(Banco $bancoEmissor)
    {
        $this->bancoEmissor = $bancoEmissor;
        return $this;
    }

    public function getBancoRecebedor()
    {
        return $this->bancoRecebedor;
    }

    public function setBancoRecebedor(Banco $bancoRecebedor)
    {
        $this->bancoRecebedor = $bancoRecebedor;
        return $this;
    }

    public function getIndicadorValor()
    {
        return $this->indicadorValor;
    }

    public function setIndicadorValor($indicadorValor)
    {
        $this->indicadorValor = $indicadorValor;
        return $this;
    }

    public function getZeros()
    {
        return $this->zeros;
    }

    public function setZeros(VectorInterface $zeros)
    {
        $this->zeros = $zeros;
        return $this;
    }

    /**
     * @param string $zeros
     */
    public function addZeros($zeros)
    {
        $this->zeros->add($zeros);
        return $this;
    }

    public function removeZeros($zeros)
    {
        $this->zeros->remove($zeros);
        return $this;
    }

    public function getBrancos()
    {
        return $this->brancos;
    }

    public function setBrancos($brancos)
    {
        $this->brancos = $brancos;
        return $this;
    }

    public function addBranco($zeros)
    {
        $this->brancos->add($zeros);
        return $this;
    }

    public function removeBranco($zeros)
    {
        $this->brancos->remove($zeros);
        return $this;
    }

    public function getDataEntradaLiquidacao()
    {
        return $this->dataEntradaLiquidacao;
    }

    public function setDataEntradaLiquidacao($dataEntradaLiquidacao)
    {
        $this->dataEntradaLiquidacao = $dataEntradaLiquidacao;
        return $this;
    }
}
