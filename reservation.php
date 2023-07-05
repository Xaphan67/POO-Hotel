<?php

class Reservation
{
    private DateTime $_dateReservation;
    private DateTime $_dateDebut;
    private DateTime $_dateFin;

    public function __construct(string $dateReservation, string $dateDebut, string $dateFin)
    {
        $this->_dateReservation = new DateTime($dateReservation);
        $this->_dateDebut = new DateTime($dateDebut);
        $this->_dateFin = new DateTime($dateFin);
    }

    public function getDateReservation()
    {
        return $this->_dateReservation;
    }

    public function getDateDebut()
    {
        return $this->_dateDebut;
    }

    public function getDateFin()
    {
        return $this->dateFin;
    }

    public function setDateReservation(string $dateReservation)
    {
        $this->_dateReservation = new DateTime($dateReservation);
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