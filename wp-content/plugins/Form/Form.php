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


if ($_POST){
    session_start();
    $email=$_POST['e_mail'];
    global $wpdb;
    //$table_name='wp_email';
    $table_name=$wpdb->prefix.'email';
    $date=date('Y-m-d H:i:s');
    //insert in DB using wp function wpdb, preparing query in wp-myadmin db
    $result=$wpdb->get_results("SELECT * FROM `wp_email` WHERE `email`='$email'");
    $count=$wpdb->num_rows;
    if($count==0){
        $wpdb->query("INSERT INTO {$table_name}( `email`, `inserito`) VALUES ('$email','$date')");
        $testo='Email inserito nel DB!';
        $_SESSION['messaggio']=$testo;
        include('mailchimp.php');

/*         header("location:http://localhost:8888/TutorialWP/");
        exit();   */
    }else {
        $testo='Email gia esiste e NON inserito nel DB!';
        $_SESSION['messaggio']=$testo;

/*          header("location:http://localhost:8888/TutorialWP/");
        exit();   */  
    } 
 
   
}
include_once('shortcode.php');

// to send response email with template










?>