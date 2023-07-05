<?php

class Client
{
    private string $_nom;
    private string $_prenom;
    public $_reservations = array();

    public function __construct(string $nom, string $prenom)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function __toString()
    {
        return $this->_prenom . " " . $this->_nom;
    }

    // Ajoute les informations de reservation du client
    public function ajouterReservation($reservation)
    {
        $this->_reservations[] = $reservation;
    }

    // Affiche les réservations du client
    public function afficherReservations()
    {
        $totalReservations = count($this->_reservations);
        $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::SHORT, IntlDateFormatter::NONE);

        $result = "<h1>Réservations de $this</h1>";

        if ($totalReservations >= 1)
        {
            $result .= $totalReservations . " RESERVATIONS</br>";
            $totalPrix = 0;

            foreach ($this->_reservations as $reservation)
            {
                $chambre = $reservation->getChambre();
                $wifi = $chambre->getWifi() ? "Oui" : "Non";
                $totalPrix += $chambre->getPrix();
                $result .= "Hôtel : " . $reservation->getChambre()->getHotel() . " - Chambre " . $chambre->getNumero() . " ( " . $chambre->getPrix() . "€ - Wifi : " . $wifi . " - du " . $formatter->format($reservation->getDateDebut()) . " au " . $formatter->format($reservation->getDateFin()) . "</br>";
            }

            $result .= "Total : $totalPrix €</br>";
        }
        else
        {
            $result .= "Aucune réservation !";
        }

        return $result;
    }
}