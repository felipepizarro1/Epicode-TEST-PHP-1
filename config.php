<?php

    $config = [
        'mysql_host' => 'localhost',
        'mysql_user' => 'root',
        'mysql_password' => ''
    ];

    $mysqli = new mysqli(
        $config['mysql_host'],
        $config['mysql_user'],
        $config['mysql_password']);
    if($mysqli->connect_error) { die($mysqli->connect_error); } 

    $sql = 'CREATE DATABASE IF NOT EXISTS gestione_libreria;';

    
    if(!$mysqli->query($sql)) { die($mysqli->connect_error); } // Creo il mio DB
 
    $mysqli->query('USE gestione_libreria;'); // Seleziono il DB

    // Creo la tabella
    $sql = 'CREATE TABLE IF NOT EXISTS libri ( 
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        titolo VARCHAR(255) NOT NULL, 
        autore VARCHAR(255) NOT NULL, 
        anno_di_pubblicazione VARCHAR(255) NOT NULL, 
        genere VARCHAR(255) NOT NULL, 
        image VARCHAR(100) NULL
    
    )';


    if(!$mysqli->query($sql)) { die($mysqli->connect_error); }

    // // Creo la tabella
    // $sql = 'CREATE TABLE IF NOT EXISTS posts ( 
    //     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    //     title VARCHAR(255) NOT NULL, 
    //     description VARCHAR(255) NOT NULL, 
    //     date_post TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    //     user_id INT NOT NULL,
    //     FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE ON UPDATE CASCADE
    // )';
    // if(!$mysqli->query($sql)) { die($mysqli->connect_error); }


?>