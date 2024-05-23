<?php

const DB_HOST = "localhost";
const DB_USER = "tuemori";
const DB_PASS = "eccMyAdmin";
const DB_NAME = "tuemori";


try {

    $zipFilePath = './zip.csv';

    if( !$handle = fopen( $zipFilePath, 'r' ) ) {
        throw new Exception( "File Open Error >> {$zipFilePath}" );
    }

    $db = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME );

    if( $db -> connect_error ) {
        throw new Exception( "DB Connect Error >> {$db -> connect_error}" );
    }

    $db -> set_charset( "utf8mb4" );

    $table = "php1_zip";
    while( $row = fgets( $handle ) ) {
        $row = preg_replace( "/\r|\n|\r\n/", "", $row );
        $row = explode( ",", $row );
        switch( count( $row ) ) {
            case 2:
                list( $zip, $pref ) = $row;
                $city = "";
                $town = "";
                break;
            case 3:
                list( $zip, $pref, $city ) = $row;
                $town = "";
                break;
            case 4:
                list( $zip, $pref, $city, $town ) = $row;
                break;
        }
        
        $values = "VALUES ( '{$zip}', '{$pref}', '{$city}', '{$town}' )";
        $sql    = "INSERT INTO {$table}( `zip`, `pref`, `city`, `town` ) {$values}";

        if( !$result = $db -> query( $sql ) ) {
            throw new Exception( "SQL Query Error >> {$sql}" );
        }
        
    } // endwhile
    
    $db -> close();

    print "さくせっす〜〜〜〜( ﾟ∀ﾟ)o彡°";

}
catch( Exception $e ) {
    print $e -> getMessage();
}
