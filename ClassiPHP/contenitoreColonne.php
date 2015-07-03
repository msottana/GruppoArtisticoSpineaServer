<?php

/**
 * Description of contenitoreColonne 
 * Contenitore che contiene tutte le colonne e il relativo attributo chiave o non chiave
 *
 * @author ZuccTeam
 */
class contenitoreColonne {

    private $colonne;
    private $isChiave; //contiene l'elenco degli attibuti chiave
    private $length;

    /*
     * Costruttore dell'oggetto contenitoreColonne
     */

    function __construct($vett, $chiavi) {
        $this->colonne = $vett;
        $this->length = count($vett);
        for ($i = 0; $i < count($vett); $i++) {
            $flag = false;
            for ($j = 0; $j < count($chiavi); $j++) {
                if ($chiavi[$j] == $vett[$i]) {
                    $flag = true;
                    $this->isChiave[] = true;
                    break;
                }
            }
            if (!$flag) {
                $this->isChiave[] = false;
            }
        }
    }

    /*
     * Restituisce le colonne 
     */

    function getColonne($i) {
        return $this->colonne[$i];
    }

    /*
     * Restituisce true se l'attriuto è chiave 
     */

    function getIsChiave($i) {
        return $this->isChiave[$i];
    }

    /*
     * Restuisce la lunghezza dell'oggetto
     */

    function getLength() {
        return $this->length;
    }

}

?>
