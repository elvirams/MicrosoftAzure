<?php
class Database {
    public static function connect() {
        $host = 'servidormariadbtfg.mariadb.database.azure.com';
        $dbname = 'moviles';

        try {
            $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=UTF8';
            $dbh = new PDO($dsn, 'adminazure@servidormariadbtfg', 'emorcillos06@iesalbarregas.es');
            return $dbh;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>
