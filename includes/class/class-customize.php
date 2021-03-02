<?php

function visio_customize_register( $wp_customize ) {
    
    //creating front_page panel
    $wp_customize->add_panel( 'fire_front' , array(
        'title'      => 'Front Page',
        'priority'   => 20,
    ) );


    $wp_customize->add_section( 'fire_front_s2' , array(
        'title'      => 'Section 2',
        'priority'   => 20,
        'panel'      => 'fire_front'
    ) );
  
    $wp_customize->add_setting( 'fire_front_s2_button' , array(
        'default'     => "Edit Show",
        'transport'   => 'refresh',
    ) );
  
    $wp_customize->add_control( 'fire_front_s2_button', array(
    'label' => 'Add new Show to display',
    'description' => 'dashboard -> show -> add new show',
    'section' => 'fire_front_s2',
    'type' => 'button'
  ) );
    //front page section 3 
    $wp_customize->add_section( 'fire_front_s3' , array(
        'title'      => 'Section 3',
        'priority'   => 20,
        'panel'      => 'fire_front'
    ) );
  

    $wp_customize->add_setting( 'fire_front_s3_title' , array(
        'default'     => "Let's work together",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'fire_front_s3_title', array(
        'label' => __( 'Title' ),
        'type' => 'text',
        'section' => 'fire_front_s3',
      ) );

      $wp_customize->add_setting( 'fire_front_s3_content' , array(
        'default'     => "Let's work together",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'fire_front_s3_content', array(
        'label' => __( 'Content' ),
        'type' => 'textarea',
        'section' => 'fire_front_s3',
      ) );

      $wp_customize->add_setting( 'fire_front_s3_dropdown',
        array(
            'default' => '1548',
            'transport' => 'refresh',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( 'fire_front_s3_dropdown',
        array(
            'label' => __( 'Link' ),
            'description' => esc_html__( 'Select a a page that link anchors to' ),
            'section' => 'fire_front_s3',
            'priority' => 10, // Optional. Order priority to load the control. Default: 10
            'type' => 'dropdown-pages',
            'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
        )
    );

    //front page section 4
    $wp_customize->add_section( 'fire_front_s4' , array(
        'title'      => 'Section 4',
        'priority'   => 20,
        'panel'      => 'fire_front'
    ) );
  

    $wp_customize->add_setting( 'fire_front_s4_title' , array(
        'default'     => "Let's work together",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'fire_front_s4_title', array(
        'label' => __( 'Title' ),
        'type' => 'text',
        'section' => 'fire_front_s4',
      ) );

      $wp_customize->add_setting( 'fire_front_s4_content' , array(
        'default'     => "Let's work together",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'fire_front_s4_content', array(
        'label' => __( 'Content' ),
        'type' => 'textarea',
        'section' => 'fire_front_s4',
      ) );

      $wp_customize->add_setting( 'fire_front_s4_dropdown',
        array(
            'default' => '1548',
            'transport' => 'refresh',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( 'fire_front_s4_dropdown',
        array(
            'label' => __( 'Link' ),
            'description' => esc_html__( 'Select a a page that link anchors to' ),
            'section' => 'fire_front_s4',
            'priority' => 10, // Optional. Order priority to load the control. Default: 10
            'type' => 'dropdown-pages',
            'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
        )
    );


        //front page section 5
        $wp_customize->add_section( 'fire_front_s5' , array(
            'title'      => 'Section 5',
            'priority'   => 20,
            'panel'      => 'fire_front'
        ) );
      
    
        $wp_customize->add_setting( 'fire_front_s5_title' , array(
            'default'     => "Let's work together",
            'transport'   => 'refresh',
        ) );
    
        $wp_customize->add_control( 'fire_front_s5_title', array(
            'label' => __( 'Title' ),
            'type' => 'text',
            'section' => 'fire_front_s5',
          ) );
    
          $wp_customize->add_setting( 'fire_front_s5_content' , array(
            'default'     => "Let's work together",
            'transport'   => 'refresh',
        ) );
    
        $wp_customize->add_control( 'fire_front_s5_content', array(
            'label' => __( 'Content' ),
            'type' => 'textarea',
            'section' => 'fire_front_s5',
          ) );
    
          $wp_customize->add_setting( 'fire_front_s5_dropdown',
            array(
                'default' => '1548',
                'transport' => 'refresh',
                'sanitize_callback' => 'absint'
            )
        );
    
        $wp_customize->add_control( 'fire_front_s5_dropdown',
            array(
                'label' => __( 'Link' ),
                'description' => esc_html__( 'Select a a page that link anchors to' ),
                'section' => 'fire_front_s5',
                'priority' => 10, // Optional. Order priority to load the control. Default: 10
                'type' => 'dropdown-pages',
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
            )
        );

                //front page section 6
                $wp_customize->add_section( 'fire_front_s6' , array(
                    'title'      => 'Section 6',
                    'priority'   => 20,
                    'panel'      => 'fire_front'
                ) );
              
            
                $wp_customize->add_setting( 'fire_front_s6_cat' , array(
                    'transport'   => 'refresh',
                ) );
            
                $wp_customize->add_control(
                    new WP_Customize_Testimonial_Category_Control(
                        $wp_customize,
                        'fire_front_s6_cat',
                        array(
                            'label'    => 'Select Testimonial Category',
                            'description' => esc_html__( 'dashboard -> testimonial -> add new testimonial'),
                            'section'  => 'fire_front_s6'
                        )
                    )
                );

                //front page section 7
                $wp_customize->add_section( 'fire_front_s7' , array(
                    'title'      => 'Section 7',
                    'priority'   => 20,
                    'panel'      => 'fire_front'
                ) );
                $wp_customize->add_setting( 'fire_front_s7_title' , array(
                    'default'     => "Let's work together",
                    'transport'   => 'refresh',
                ) );
            
                $wp_customize->add_control( 'fire_front_s7_title', array(
                    'label' => __( 'Title' ),
                    'type' => 'text',
                    'section' => 'fire_front_s7',
                  ) );
            
                $wp_customize->add_setting( 'fire_front_s7_cat' , array(
                    'transport'   => 'refresh',
                ) );
            
                $wp_customize->add_control(
                    new WP_Customize_News_Category_Control(
                        $wp_customize,
                        'fire_front_s7_cat',
                        array(
                            'label'    => 'Select News Category',
                            'description' => esc_html__( 'dashboard -> testimonial -> add new testimonial'),
                            'section'  => 'fire_front_s7'
                        )
                    )
                );

                //front page section 8
                $wp_customize->add_section( 'fire_front_s8' , array(
                    'title'      => 'Section 8',
                    'priority'   => 20,
                    'panel'      => 'fire_front'
                ) );
                $wp_customize->add_setting( 'fire_front_s8_title' , array(
                    'default'     => "Let's work together",
                    'transport'   => 'refresh',
                ) );
            
                $wp_customize->add_control( 'fire_front_s8_title', array(
                    'label' => __( 'Title' ),
                    'type' => 'text',
                    'section' => 'fire_front_s8',
                  ) );
            
                $wp_customize->add_setting( 'fire_front_s8_cat' , array(
                    'transport'   => 'refresh',
                ) );
            
                $wp_customize->add_control(
                    new WP_Customize_News_Category_Control(
                        $wp_customize,
                        'fire_front_s8_cat',
                        array(
                            'label'    => 'Select News Category',
                            'description' => esc_html__( 'dashboard -> testimonial -> add new testimonial'),
                            'section'  => 'fire_front_s8'
                        )
                    )
                );
        //front page section 9
        $wp_customize->add_section( 'fire_front_s9' , array(
            'title'      => 'Section 9',
            'priority'   => 20,
            'panel'      => 'fire_front'
        ) );
      
    
        $wp_customize->add_setting( 'fire_front_s9_title' , array(
            'default'     => "Let's work together",
            'transport'   => 'refresh',
        ) );
    
        $wp_customize->add_control( 'fire_front_s9_title', array(
            'label' => __( 'Title' ),
            'type' => 'text',
            'section' => 'fire_front_s9',
          ) );

                //front page section 10
                $wp_customize->add_section( 'fire_front_s10' , array(
                    'title'      => 'Section 10',
                    'priority'   => 20,
                    'panel'      => 'fire_front'
                ) );
                $wp_customize->add_setting( 'fire_front_s10_title' , array(
                    'default'     => "Let's work together",
                    'transport'   => 'refresh',
                ) );
            
                $wp_customize->add_control( 'fire_front_s10_title', array(
                    'label' => __( 'Title' ),
                    'type' => 'text',
                    'section' => 'fire_front_s10',
                  ) );
            
                $wp_customize->add_setting( 'fire_front_s10_cat' , array(
                    'transport'   => 'refresh',
                ) );
            
                $wp_customize->add_control(
                    new WP_Customize_Cases_Category_Control(
                        $wp_customize,
                        'fire_front_s10_cat',
                        array(
                            'label'    => 'Select News Category',
                            'description' => esc_html__( 'dashboard -> testimonial -> add new testimonial'),
                            'section'  => 'fire_front_s10'
                        )
                    )
                );

                //front page section 11
                $wp_customize->add_section( 'fire_front_s11' , array(
                    'title'      => 'Section 11',
                    'priority'   => 20,
                    'panel'      => 'fire_front'
                ) );
              
            
                $wp_customize->add_setting( 'fire_front_s11_cat' , array(
                    'transport'   => 'refresh',
                ) );
            
                $wp_customize->add_control(
                    new WP_Customize_Testimonial_Category_Control(
                        $wp_customize,
                        'fire_front_s11_cat',
                        array(
                            'label'    => 'Select Testimonial Category',
                            'description' => esc_html__( 'dashboard -> testimonial -> add new testimonial'),
                            'section'  => 'fire_front_s11'
                        )
                    )
                );
    
  }
add_action( 'customize_register', 'visio_customize_register' );


?>