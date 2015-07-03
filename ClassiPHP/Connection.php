<?php
/**
 * Gestione delle connessioni
 */
class Connection {

    protected static $dbPDO = NULL;

    public static function getConnection() {
        if (!isset(Connection::$dbPDO)) {
            Connection::$dbPDO = new PDO("mysql:host=localhost;dbname=gas_database", 'root', '');
           Connection::$dbPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return Connection::$dbPDO;
    }
    
    public static function closeConnection() {
        Connection::$dbPDO = NULL;
    }

}

?>
