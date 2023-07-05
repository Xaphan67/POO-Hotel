<?php

class Reservation
{
    private DateTime $_dateDebut;
    private DateTime $_dateFin;

    public function __construct(string $dateReservation, string $dateDebut, string $dateFin)
    {
        $this->_dateDebut = new DateTime($dateDebut);
        $this->_dateFin = new DateTime($dateFin);
    }

    public function getDateDebut()
    {
        return $this->_dateDebut;
    }

    public function getDateFin()
    {
        return $this->dateFin;
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