<?php

class Chambre
{
    private int $_numero;
    private float $_prix;
    private bool $_wifi;

    public function __construct(int $numero, float $prix, bool $wifi)
    {
        $this->_numero = $numero;
        $this->_prix = $prix;
        $this->_wifi = $wifi;
    }

    public function getNumero()
    {
        return $this->_numero;
    }

    public function getPrix()
    {
        return $this->_prix;
    }

    public function getWifi()
    {
        return $this->_wifi;
    }

    public function setNumero($numero)
    {
        $this->_numero = $numero;
    }

    public function setPrix($prix)
    {
        $this->_prix = $prix;
    }

    public function setWifi($wifi)
    {
        $this->_wifi = $wifi;
    }
}