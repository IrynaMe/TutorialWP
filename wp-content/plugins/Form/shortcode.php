<?php
//creade shortcode with name 'email'
//to visualize : echo do_shortcode()
//  https://www.hostinger.com/tutorials/wordpress-do_shortcode
// echo do_shortcode( '[email]' );  --put it in footer.php

function form(){
//form content see in themes/Tutorial/creaForm.php
$form="<div class='position-relative mx-auto' style='max-width: 400px;'>";
$form.="<form action='#' method='post'>";
$form.="<input class='form-control border-0 w-100 py-3 ps-4 pe-5' type='text' placeholder='Your email' name='email'>";
$form.= "<button type='submit' class='btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2' name='invio'>SignUp</button>";
$form.="</form>";
$form.="</div>";

return $form;

}
// add_shortcode -to add
//  https://developer.wordpress.org/reference/functions/add_shortcode/
add_shortcode('email', 'form');
?>
