<?php

class Hotel
{
    public string $_nom;
    public string $_adresse;
    public string $_cp;
    public string $_ville;
    public $_chambres = array();
    public $_reservations = array();

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

    // Ajoute une chambre à cet hôtel
    public function ajouterChambre(Chambre $chambre)
    {
        $this->_chambres[] = $chambre;
    }

    // Ajoute une réservation pour une chambre de cet hôtel
    public function enregistrerReservation(Reservation $reservation)
    {
        $this->_reservations[] = $reservation;
    }

    public function __toString()
    {
        return $this->_nom;
    }

    // Affiche les informations sur cet hôtel
    public function afficherInformations()
    {
        $result = "<h1>" . $this->_nom . "</h1>" . $this->_adresse . " " . $this->_cp . " " . $this->_ville . "</br>" .
        "Nombre de Chambres : " . count($this->_chambres) . "</br>";

        return $result;
    }

    // Affiche les réservations de cet hôtel
    public function afficherReservations()
    {
        $totalReservations = count($this->_reservations);
        $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::SHORT, IntlDateFormatter::NONE);

        $result = "<h1>Réservations de l'hôtel " . $this->_nom . "</h1>";

        if ($totalReservations >= 1)
        {
            $result .= $totalReservations . " RESERVATIONS</br>";
            foreach ($this->_reservations as $reservation)
            {
                $result .= $reservation->getClient() . " - Chambre " . $reservation->getChambre()->getNumero() . " - du " . $formatter->format($reservation->getDateDebut()) . " au " . $formatter->format($reservation->getDateFin()) . "</br>";
            }    
        }
        else
        {
            $result .= "Aucune réservation !";
        }
        
        return $result;
    }
}