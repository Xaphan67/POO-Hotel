<?php

class Chambre
{
    private int $_numero;
    private float $_prix;
    private bool $_wifi;
    private Hotel $_hotel;
    private bool $_disponible;

    public function __construct(Hotel $hotel, int $numero, float $prix, bool $wifi)
    {
        $this->_hotel = $hotel;
        $this->_numero = $numero;
        $this->_prix = $prix;
        $this->_wifi = $wifi;
        $this->_disponible = true;

        $hotel->ajouterChambre($this);
    }

    public function getHotel()
    {
        return $this->_hotel;
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

    public function getDisponible()
    {
        return $this->_disponible;
    }

    public function setHotel($hotel)
    {
        $this->_hotel = $hotel;
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

    public function setDisponible($disponible)
    {
        $this->_disponible = $disponible;
    }
}