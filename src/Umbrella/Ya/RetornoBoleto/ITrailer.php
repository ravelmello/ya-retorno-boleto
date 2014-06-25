<?php

namespace Umbrella\Ya\RetornoBoleto;

use Umbrella\Ya\RetornoBoleto\Model\Banco;
use Umbrella\Ya\RetornoBoleto\Model\Cobranca;

interface ITrailer
{

    public function getRegistro();

    public function getRetorno();

    public function getTipoRegistro();

    public function getSequencial();

    public function getBanco();

    public function getSimples();

    public function getVinculada();

    public function getCaucionada();

    public function getVendor();

    public function getDescontada();

    public function setRegistro($registro);

    public function setRetorno($retorno);

    public function setTipoRegistro($tipoRegistro);

    public function setSequencial($sequencial);

    public function setBanco(Banco $banco);

    public function setSimples(Cobranca $simples);

    public function setVinculada(Cobranca $vinculada);

    public function setCaucionada(Cobranca $caucionada);

    public function setVendor(Cobranca $vendor);

    public function setDescontada(Cobranca $descontada);
}