function Customizza_logo($wp_customize)
{
  // create a new section im menu Personalize
  // take object that we passed with function and apply method
  $wp_customize->add_section(
    'brand', array(
      'title'=>__('Immagine e titolo del sito', 'brand'),
      'priority'=>100
    )
  );
  //create image
  $wp_customize->add_setting(
    'logo_brand_settaggio', array(
      'default'=>'',
      'transport'=>'refresh',
    )
  );
  //create controls
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize, 'logo_brand_label',
    array(
      'label'=>__('carica il tuo logo', 'logo_brand_control'),
      'section'=>'brand',
      'setting'=>'logo_brand_settaggio',
    )
  )
  );
//text.............
$wp_customize->add_setting(
  'nome_brand_settaggio', array(
    'default'=>'Elearning',
    'transport'=>'refresh',
)
);


$wp_customize->add_control(new WP_Customize_Control(
  $wp_customize, 'nome_brand_label',
  array(
    'label'=>__('Il titolo del sito', 'nome_brand_control'),
    'section'=>'brand',
    'setting'=>'nome_brand_settaggio',
    'type'=>'text',
  )
  )
);

}
add_action('customize_register', 'Customizza_logo');
