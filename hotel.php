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
        $reservation->getChambre()->setDisponible(false);
    }

    public function __toString()
    {
        return $this->_nom;
    }

    // Affiche les informations sur cet hôtel
    public function afficherInformations()
    {
        $nbChambres = count($this->_chambres);
        $nbChambresReservees = count($this->_reservations);

        $result = "<h1>$this</h1><p>" . $this->_adresse . " " . $this->_cp . " " . $this->_ville . "</br>" .
        "Nombre de Chambres : $nbChambres</br>" .
        "Nombre de Chambres réservées : $nbChambresReservees</br>" .
        "Nombre de Chambres disponibles : " . ($nbChambres - $nbChambresReservees) . "</p>";

        return $result;
    }

    // Affiche les réservations de cet hôtel
    public function afficherReservations()
    {
        $totalReservations = count($this->_reservations);
        $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::SHORT, IntlDateFormatter::NONE);

        $result = "<h2>Réservations de l'hôtel $this</h2>";

        if ($totalReservations >= 1)
        {
            $result .= '<div class="bg-green">' . $totalReservations . " RESERVATIONS</div><p>";
            foreach ($this->_reservations as $reservation)
            {
                $result .= $reservation->getClient() . " - Chambre " . $reservation->getChambre()->getNumero() . " - du " . $formatter->format($reservation->getDateDebut()) . " au " . $formatter->format($reservation->getDateFin()) . "</br>";
            }    

            $result .= "</p>";
        }
        else
        {
            $result .= "<p>Aucune réservation !</p>";
        }
        
        return $result;
    }

    // Affiche le statut des chambres de l'hôtel
    public function afficherStatut()
    {
        usort($this->_chambres, array($this, "TriParChambre"));

        $result = "<h2>Statut des chambres de $this</h2>
        <table>
            <thead>
                <tr>
                    <th >CHAMBRE</th>
                    <th >PRIX</th>
                    <th >WIFI</th>
                    <th >ETAT</th>
                </tr>
            </thead>
        <tbody>";

        foreach ($this->_chambres as $chambre)
        {
            $wifi = $chambre->getWifi() ? '<img src="wifi-solid.svg" alt="A Wifi icon" height="20px">' : "";
            $disponible = $chambre->getDisponible() ? '<div class="bg-green-small">Disponible' : '<div class="bg-red-small">Reservée';

            $result .= "
            <tr>
                <td><b>Chambre " . $chambre->getNumero() . "</b></td>
                <td>" . $chambre->getPrix() . "€</td>
                <td>$wifi</td>
                <td>$disponible</td>
            </tr>";
        }

        $result .= "
            </tbody>
        </table>";

        return $result;
    }

    // Trie les réservations par numéro de chambre
    private function TriParChambre($a, $b)
    {
        if ($a->getNumero() == $b->getNumero()) // Les numéros de chambres sont identiques
        {
            return 0;
        }
        else if ($a->getNumero() < $b->getNumero())  // Le numéro de chambre a est inférieur à b
        {
            return -1;
        }
        else // Le numéro de chambre est supérieur
        {
            return 1;
        }
    }
}