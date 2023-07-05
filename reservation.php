<?php

class Reservation
{
    private Client $_client;
    private Chambre $_chambre;
    private DateTime $_dateDebut;
    private DateTime $_dateFin;

    public function __construct(Client $client, Chambre $chambre, string $dateDebut, string $dateFin)
    {
        $this->_client = $client;
        $this->_chambre = $chambre;
        $this->_dateDebut = new DateTime($dateDebut);
        $this->_dateFin = new DateTime($dateFin);

        $chambre->getHotel()->enregistrerReservation($this);
    }

    public function getClient()
    {
        return $this->_client;
    }

    public function getChambre()
    {
        return $this->_chambre;
    }

    public function getDateDebut()
    {
        return $this->_dateDebut;
    }

    public function getDateFin()
    {
        return $this->_dateFin;
    }

    public function setClient($client)
    {
        $this->_client = $client;
    }

    public function setChambre($chambre)
    {
        $this->_chambre = $chambre;
    }

    public function setDateDebut(string $dateDebut)
    {
        $this->_dateDebut = new DateTime($dateDebut);
    }

    public function setDateFin(string $dateFin)
    {
        $this->_dateFin = new DateTime($dateFin);
    }
}