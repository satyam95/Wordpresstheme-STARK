<?php

// HEARER CUSTOMIZER

function sd_customize_register($wp_customize){
    // header Section
    $wp_customize->add_section('topheader', array(
      'title'   => __('Top Header Bar', 'stark'),
      'description' => sprintf(__('Options for top header bar links','stark')),
      'priority'    => 130
    ));

    // Accounts
    $wp_customize->add_setting('heading_1', array(
      'default'   => _x('Enter the Link of Accounts page', 'stark'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('heading_1', array(
      'label'   => __('Accounts', 'stark'),
      'section' => 'topheader',
      'priority'  => 1
    ));

    // chat
    $wp_customize->add_setting('heading_2', array(
        'default'   => _x('Enter the Link of chat page', 'stark'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('heading_2', array(
        'label'   => __('Chat', 'stark'),
        'section' => 'topheader',
        'priority'  => 2
      ));

    // Number
    $wp_customize->add_setting('heading_3', array(
        'default'   => _x('Enter the Contact Number', 'stark'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('heading_3', array(
        'label'   => __('Contact Number', 'stark'),
        'section' => 'topheader',
        'priority'  => 2
      ));

  }

  add_action('customize_register', 'sd_customize_register');



// FOOTER CUSTOMIZER

function sdf_customize_register($wp_customize){
    // header Section
    $wp_customize->add_section('footer', array(
      'title'   => __('Footer', 'stark'),
      'description' => sprintf(__('Options for footer','stark')),
      'priority'    => 140
    ));

    // Accounts
    $wp_customize->add_setting('heading_1f', array(
      'default'   => _x('Enter the address', 'stark'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('heading_1f', array(
      'label'   => __('Address', 'stark'),
      'section' => 'footer',
      'priority'  => 1
    ));


  }

  add_action('customize_register', 'sdf_customize_register');