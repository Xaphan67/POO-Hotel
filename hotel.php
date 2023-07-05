<?php

class Hotel
{
    public string $_nom;
    public string $_adresse;
    public string $_cp;
    public string $_ville;

    public function __construct(string $nom, string $adresse, string $cp, string $ville)
    {
        $this->_nom = $nom;
        $this->_adresse = $adresse;
        $this->_cp = $cp;
        $this->_ville = $ville;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function getAdresse()
    {
        return $this->_adresse;
    }

    public function getCp()
    {
        return $this->_cp;
    }

    public function getVille()
    {
        return $this->_ville;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function setAdresse($adresse)
    {
        $this->_adresse = $adresse;
    }

    public function setCp($cp)
    {
        $this->_cp = $cp;
    }

    public function setVille($ville)
    {
        $this->_ville = $ville;
    }
}