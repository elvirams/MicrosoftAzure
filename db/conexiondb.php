<?php
    # Método para realizar la conexión a la BBDD. Obtiene los datos de conexión de variables de entorno existentes en el fichero .env.
    class Database {
        public static function connect () 
        {
            #$host='mariadb';
            #$dbname=getenv('MARIADB_DATABASE');
            $servername = "servidormariadbtfg.mariadb.database.azure.com";
            $username = "adminazure@servidormariadbtfg";
            $password = "emorcillos06@iesalbarregas.es";
            $database = "moviles";

            try {
                #$dsn = 'mysql:host='.$host.";dbname=".$dbname.";charset=UTF8";
                #$dbh = new PDO($dsn, getenv('MARIADB_USER'), getenv('MARIADB_PASSWORD'));
                #return $dbh;
                // Crear una conexión
                $conn = new mysqli($servername, $username, $password, $database);
                return $conn
                    
                // Verificar la conexión
                if ($conn->connect_error) {
                    die("Error de conexión: " . $conn->connect_error);
                }
                
            } catch (PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>
