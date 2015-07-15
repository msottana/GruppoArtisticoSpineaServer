<?php

/**
 * Description of EstraiDatiAmmin
 * Classe php che permette l'estrazione di dati dal database
 * 
 * @author ZuccTeam
 */
include_once "contenitoreColonne.php";
require_once("ClassiPHP/Connection.php");

class EstraiDati {

    private $dbPDO;

    /*
     * Costruttore dell'oggetto EstraiDatiAmmin
     */

    function __construct() {
        $this->dbPDO = Connection::getConnection();
    }

    /*
     * Metodo che estrae i nomi delle tabelle del database
     */

    function estraiTabelle() {
        $queryTabelle = 'show tables';
        $ret = array(); //<<---MOD. CARLO;
        $i = 0;
        $stmt = $this->dbPDO->query($queryTabelle);
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $ret[$i] = $row[0];
            $i++;
        }
        return $ret;
    }

    /*
     * Metodo che estrae i nomi degli attributi di una tabella differenziando tra attributi chiave e non
     */

    function estraiAttributi($tabella) {
        $query = "show columns from " . $tabella;
        $vet = array(); //<<---MOD. CARLO;
        $i = 0;
        $stmt = $this->dbPDO->query($query);
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $vet[] = $row[0];
        }
        $query = "show keys from " . $tabella;
        $key;
        $stmt = $this->dbPDO->query($query);
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key[] = $row[4];
        }
        return new contenitoreColonne($vet, $key);
    }

    /*
     * Metodo che estrae dal database il contenuto di una tabella
     */

    function estraiContenuto($tabella) {
        $query = 'SELECT * FROM ' . $tabella;
        $ret = array(); //<<---MOD. CARLO istruzione era $ret;
        $i = 0;
        $stmt = $this->dbPDO->query($query);
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $ret[$i] = $row;
            $i++;
        }
        return $ret;
    }

    /*
     * Metodo che estrae dal database il contenuto di una tabella applicando la clausola ORDER BY DESC
     */

    function estraiContenutoOrderBy($tabella, $campoOrder) {
        $query = 'SELECT * FROM ' . $tabella . ' ORDER BY ' . $campoOrder . ' DESC';
        $ret = array(); //<<---MOD. CARLO istruzione era $ret;
        $i = 0;
        $stmt = $this->dbPDO->query($query);
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $ret[$i] = $row;
            $i++;
        }
        return $ret;
    }

    /*
     *  Metodo che estrae dal database il contenuto di una tabella applicandoci una calusola WHERE
     */

    function estraiContenutoCondizione($campi, $tabella, $campoFiltro, $valore, $fetch) {
        $query = 'SELECT ' . $campi . ' FROM ' . $tabella . ' WHERE ' . $campoFiltro . ' = :valore';
        $ret = array();
        $i = 0;
        $stmt = $this->dbPDO->prepare($query);
        $stmt->bindValue(':valore', $valore);
        $stmt->execute();
        while ($row = $stmt->fetch($fetch)) {
            $ret[$i] = $row;
            $i++;
        }
        return $ret;
    }

    /*
     *  Metodo che estrae dal database il contenuto di una tabella applicandoci una calusola WHERE e una clausola ORDER BY
     */

    function estraiContenutoCondizioneOrderBy($campi, $tabella, $campoFiltro, $valore, $campoOrder, $fetch) {
        $query = 'SELECT ' . $campi . ' FROM ' . $tabella . ' WHERE ' . $campoFiltro . ' = :valore' . ' ORDER BY ' . $campoOrder . ' DESC';
        $ret = array();
        $i = 0;
        $stmt = $this->dbPDO->prepare($query);
        $stmt->bindValue(':valore', $valore);
        $stmt->execute();
        while ($row = $stmt->fetch($fetch)) {
            $ret[$i] = $row;
            $i++;
        }
        return $ret;
    }

}

?>
