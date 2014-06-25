<?php

namespace Umbrella\Ya\RetornoBoleto\Convenio;

use Umbrella\Ya\RetornoBoleto\Header;

class HeaderConvenio extends Header implements IHeaderConvenio
{
    protected $convenio;
    protected $sequencialRet;

    public function getConvenio()
    {
        return $this->convenio;
    }

    public function getSequencialRet()
    {
        return $this->sequencialRet;
    }

    public function setConvenio($convenio)
    {
        $this->convenio = $convenio;
        return $this;
    }

    public function setSequencialRet($sequencialRet)
    {
        $this->sequencialRet = $sequencialRet;
        return $this;
    }
}