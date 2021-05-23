<?php

try{
    $mysqli = new mysqli("db","locahost","root","test","myDB");
    echo "Connected !!!";

}
catch(Exception $e){
    echo $e->getMessage();
    echo "Error !!!";
}
