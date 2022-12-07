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
if ($_POST){
    $email=$_POST['email'];
    global $wpdb;
    //$table_name='wp_email';
    $table_name=$wpdb->prefix.'email';
    $date=date('Y-m-d H:i:s');
    //insert in DB using wp function wpdb, preparing query in wp-myadmin db
    $wpdb->query("INSERT INTO {$table_name}( `email`, `inserito`) VALUES ('$email','$date')");
}
include_once('shortcode.php');










?>