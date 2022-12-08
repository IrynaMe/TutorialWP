<?php
/**
 * @package Form
 * @version 1.0
 */
/*
Plugin Name: Form
Plugin URI: http://cfta.it
Description: Plugin to subscribe to a Newsletter, inserting data in DB, mailchimp
Author: Matt Mullenweg
Version: 1.0
Author URI: http://cfta.it
*/

/* if (isset($_SESSION['messaggio'])) {
    unset($_SESSION['messaggio']);
} */


if ($_POST) {
    session_start();
    $email=$_POST['e_mail'];
    $date=date('Y-m-d H:i:s');

    $host = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET;
    $connection = new PDO($host, DB_USER, DB_PASSWORD);
   
    $query = "SELECT * FROM `wp_email` WHERE `email`='$email'";
    $statement=$connection->prepare($query);
    $statement->execute();
    $count=$statement->rowCount();
    //print ($count);
    if($count==0){
        $sql= "INSERT INTO `wp_email` ( `email`, `inserito`) VALUES (:customerEmail, :created)";
        $args=[
            'customerEmail'=>$email, 
            'created'=>$date
        ]; 
        $qu=$connection->prepare($sql);
        $qu->execute($args);
        $testo='Email inserito nel DB!';
        $_SESSION['messaggio']=$testo;
        include('mailchimp.php');
        header("location:http://localhost:8888/TutorialWP/");
        exit();  
    } else {
    $testo='Email gia esiste e NON inserito nel DB!';
    $_SESSION['messaggio']=$testo;
    header("location:http://localhost:8888/TutorialWP/");
    exit();
} 
}

include_once('shortcode.php');