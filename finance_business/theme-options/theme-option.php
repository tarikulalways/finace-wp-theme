<?php 
    // Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'finace_business';
  
    //
    // Create options
    CSF::createOptions( $prefix, array(
      'menu_title' => __('Theme Options', 'finace'),
      'menu_slug'  => 'finace-business',
      'framework_title' => __('Finace Business <small>by finace business</small>', 'finace'),
      'footer_text' => __('Create by Finace Business Company', 'finace')
    ) );
  
    // header top option
    CSF::createSection($prefix, array(
      'id' => 'finace_header_top',
      'title' => __('Header Top', 'finace')  
    ));
    
    // header left area
    CSF::createSection($prefix, array(
      'parent' => 'finace_header_top',
      'title' => __('Heaer top left', 'finace'),
      'fields' => array(
        array(
          'id' => 'time_icon',
          'title' => __('Icon', 'finace'),
          'type' => 'icon',
          'default' => 'fa fa-clock-o'
        ),
        array(
          'id' => 'time_text',
          'title' => __('Content', 'finace'),
          'type' => 'text',
          'default' => 'Mon-Fri 09:00-17:00'
        ),
        array(
          'id' => 'phone_icon',
          'title' => __('Phone Icon', 'finace'),
          'type' => 'icon',
          'default' => 'fa fa-phone'
        ),
        array(
          'id' => 'header_top_number',
          'type' => 'text',
          'title' => __('Number', 'finace'),
          'default' => '090-080-0760'
        )
      )
    ));

    // hader top right options

    CSF::createSection($prefix, array(
      'parent' => 'finace_header_top',
      'title' => __('Header top right', 'finace'),
      'fields' => array(
        array(
          'id' => 'header_social_grup',
          'title' => __('add new social', 'finace'),
          'type' => 'group',
          'button_title' => __('Add new socila link', 'finace'),
          'fields' => array(
            array(
              'id' => 'header_social_icon',
              'title' => __('Icon', 'finace'),
              'type' => 'icon',
              'default' => 'fa fa-facebook'
            ),
            array(
              'id' => 'header_social_link',
              'title' => __('Link', 'finace'),
              'type' => 'text',
              'default' => '#'
            )
          )
        )
      )
    ));

    // header background color

    CSF::createSection($prefix, array(
      'parent' => 'finace_header_top',
      'title' => __('header background color', 'finace'),
      'fields' => array(
        array(
          'id' => 'header_text_color',
          'title' => __('text color', 'finace'),
          'type' => 'color',
          'default' => '#fff'
        ),
        array(
          'id' => 'menu_color',
          'title' => __('Menu color', 'finace'),
          'type' => 'color',
          'default' => '#fff'
        ),
        array(
          'id' => 'menu_hover_color',
          'title' => __('Menu hover color', 'finace'),
          'type' => 'color',
          'default' => '#a4c639'
        ),
        array(
          'id' => 'stky_menu_color',
          'title' => __('Stky menu bg color', 'finace'),
          'type' => 'color',
          'default' => '#fff'
        ),
        array(
          'id' => 'stky_logo_color',
          'title' => __('Stky Logo color', 'finace'),
          'type' => 'color',
          'default' => '#a4c639'
        ),
        array(
          'id' => 'social_icon_color',
          'title' => __('Social icon color', 'finace'),
          'type' => 'color',
          'default' => '#fff'
        ),
        array(
          'id' => 'logo_color',
          'title' => __('Logo color', 'finace'),
          'type' => 'color',
          'default' => '#fff'
        ),
        array(
          'id' => 'headerbg',
          'title' => __('Set background color', 'finace'),
          'type' => 'color',
          'default' => '#a4c639'
        )
      )
    ));
    
    // add new logo

    CSF::createSection($prefix, array(
      'parent' => 'finace_header_top',
      'title' => __('Logo', 'finace'),
      'fields' => array(
        array(
          'id' => 'add_logo',
          'title' => __('add new logo', 'finace'),
          'type' => 'text',
          'default' => 'FINANCE BUSINESS'
        )
      )
    ));

    // new section
    CSF::createSection($prefix, array(
      'id' => 'home_section',
      'title' => __(' Home page', 'finace'),
      'icon' => 'fas fa-rocket'
    ));

    // slider color change

    CSF::createSection($prefix, array(
      'parent' => 'home_section',
      'title' => __('slider color tab', 'finace'),
      'icon' => 'fas fa-rocket',
      'fields' => array(
        array(
          'id' => 'slider_sub_title',
          'type' => 'color',
          'default' => '#a4c639',
          'title' => __('sub title color', 'finace')
        ),
        array(
          'id' => 'slider_title_color',
          'title' => __('Title color', 'finace'),
          'type' => 'color',
          'default' => '#FFF'
        ),
        array(
          'id' => 'slider_des_color',
          'title' => __('Description color', 'finace'),
          'type' => 'color',
          'default' => '#FFF'
        ),
        array(
          'id' => 'slider_btn_bg_color',
          'title' => __('Button bg color', 'finace'),
          'type' => 'color',
          'default' => '#a4c639'
        ),
        array(
          'id' => 'slider_btn_text_color',
          'title' => __('Button text color', 'finace'),
          'type' => 'color',
          'default' => '#FFF'
        ),
        array(
          'id' => 'slider_btn_hoverbg_color',
          'title' => __('Button hover bg color', 'finace'),
          'type' => 'color',
          'default' => '#FFF'
        ),
        array(
          'id' => 'slider_btn_hovertext_color',
          'title' => __('Button hover text color', 'finace'),
          'type' => 'color',
          'default' => '#a4c639'
        )
      )
    ));

    // cta section

    CSF::createSection($prefix, array(
      'parent' => 'home_section',
      'title' => __('Cta section', 'finace'),
      'icon' => 'fas fa-rocket',
      'fields' => array(
        array(
          'id' => 'cta_title',
          'title' => __('Title', 'finace'),
          'type' => 'text',
          'default' => 'Request a call back right now ?'
        ),
        array(
          'id' => 'cta_title_color',
          'title' => __('Title text color', 'finace'),
          'type' => 'color',
          'default' => '#fff'
        ),
        array(
          'id' => 'cta_des',
          'title' => __('Description', 'finace'),
          'type' => 'text',
          'default' => 'Mauris ut dapibus velit cras interdum nisl ac urna tempor mollis.'
        ),
        array(
          'id' => 'cta_des_color',
          'title' => __('Description text color', 'finace'),
          'type' => 'color',
          'default' => '#fff'
        ),
        array(
          'id' => 'cta_btn_text',
          'title' => __('Button text', 'finace'),
          'default' => 'CONTACT US',
          'type' => 'text'
        ),
        array(
          'id' => 'cta_btn_text_color',
          'title' => __('Button text color', 'finace'),
          'type' => 'color',
          'default' => '#fff'
        ),
        array(
          'id' => 'cta_btn_border_color',
          'title' => __('Button border color', 'finace'),
          'type' => 'color',
          'default' => '#fff'
        ),
        array(
          'id' => 'cta_btnhover_text_color',
          'title' => __('Button hover text color', 'finace'),
          'type' => 'color',
          'default' => '#A4C639'
        ),
        array(
          'id' => 'cta_btnhover_bg_color',
          'title' => __('Button hover bg color', 'finace'),
          'type' => 'color',
          'default' => '#fff'
        ),
        array(
          'id' => 'cta_btn_link',
          'title' => __('Button link', 'finace'),
          'type' => 'text',
          'default' => '#'
        ),
        array(
          'id' => 'section_bg_color',
          'title' => __('section bg color', 'finace'),
          'type' => 'color',
          'default' => '#A4C639'
        )
      )
    ));
    // service section

    CSF::createSection($prefix, array(
      'parent' => 'home_section',
      'title' => __('Service header section', 'finace'),
      'icon' => 'fas fa-rocket',
      'fields' => array(
        array(
          'id' => 'servic_title',
          'title' => __('Sample text', 'finace'),
          'type' => 'text',
          'default' => 'Financial'
        ),
        array(
          'id' => 'servic_color_text',
          'title' => __('Color text', 'finace'),
          'type' => 'text',
          'default' => 'Services'
        ),
        array(
          'id' => 'servic_des',
          'title' => __('Description', 'finace'),
          'type' => 'text',
          'default' => 'ALIQUAM ID URNA IMPERDIET LIBERO MOLLIS HENDRERIT'
        )
      )
    ));

    // content & counter 

    CSF::createSection($prefix, array(
      'parent' => 'home_section',
      'title' => __('Contetent & counter', 'finace'),
      'icon' => 'fas fa-rocket',
      'fields' => array(
        array(
          'id' => 'cont_sub_title',
          'title' => __('Sub title', 'finace'),
          'type' => 'text',
          'default' => 'LOREM IPSUM DOLOR SIT AMET'
        ),
        array(
          'id' => 'cont_title',
          'title' => __('Title', 'finace'),
          'type' => 'text',
          'default' => 'Our solutions for your'
        ),
        array(
          'id' => 'cont_color_title',
          'title' => __('Color title', 'finace'),
          'type' => 'text',
          'default' => 'business growth'
        ),
        array(
          'id' => 'cont_des',
          'title' => __('Descriptions', 'finace'),
          'type' => 'textarea',
          'default' => 'Pellentesque ultrices at turpis in vestibulum. Aenean pretium elit nec congue elementum. Nulla luctus laoreet porta. Maecenas at nisi tempus, porta metus vitae, faucibus augue.'
        ),
        array(
          'id' => 'cont_btn_text',
          'title' => __('Button Text', 'finace'),
          'type' => 'text',
          'default' => 'READ MORE'
        ),
        array(
          'id' => 'cont_btn_link',
          'title' => __('Button Link', 'finace'),
          'type' => 'text',
          'default' => '#'
        ),
        array(
          'id' => 'counter_bg',
          'title' => __('Thumbnail', 'finace'),
          'type' => 'media'
        ),
        array(
          'id' => 'counter_contetn',
          'title' => __('Counter content', 'finace'),
          'type' => 'group',
          'button_title' => 'counter items',
          'fields' => array(
            array(
              'id' => 'counter_nbr',
              'title' => __('Counter number', 'finace'),
              'type' => 'number',
              'default' => '995'
            ),
            array(
              'id' => 'counter_text',
              'title' => __('Counter text', 'finace'),
              'type' => 'text',
              'default' => 'Work Hours'
            )
          )
        )
      )
    ));

    // create section about company
    
    CSF::createSection($prefix, array(
      'parent' => 'home_section',
      'title' => __('About company', 'finace'),
      'fields' => array(
        array(
          'id' => 'company_sub_title',
          'title' => __('Sub title', 'finace'),
          'type' => 'text',
          'default' => 'WHO WE ARE'
        ),
        array(
          'id' => 'company_title',
          'title' => __('Title', 'finace'),
          'type' => 'text',
          'default' => 'Get to know about'
        ),
        array(
          'id' => 'company_color_title',
          'title' => __('Color Title text', 'finace'),
          'type' => 'text',
          'default' => 'our company'
        ),
        array(
          'id' => 'company_des',
          'title' => __('Descriptions', 'finace'),
          'type' => 'textarea',
          'default' => 'Curabitur pulvinar sem a leo tempus facilisis. Sed non sagittis neque. Nulla conse quat tellus nibh, id molestie felis sagittis ut. Nam ullamcorper tempus ipsum in cursus'
        ),
        array(
          'id' => 'company_button_text',
          'title' => __('Button Text', 'finace'),
          'type' => 'text',
          'default' => 'Read More'
        ),
        array(
          'id' => 'company_button_link',
          'title' => __('Button Link', 'finace'),
          'type' => 'text',
          'default' => '#'
        ),
        array(
          'id' => 'company_thumbnail',
          'title' => __('Thumbnail', 'finace'),
          'type' => 'media'
        )
      )
    ));

    // about section title

    CSF::createSection($prefix, array(
      'parent' => 'home_section',
      'title' => __('About section', 'finace'),
      'fields' => array(
        array(
          'id' => 'about_title',
          'title' => __('Title', 'finace'),
          'type' => 'text',
          'default' => 'What they say'
        ),
        array(
          'id' => 'about_color_title',
          'title' => __('Color Title', 'finace'),
          'type' => 'text',
          'default' => 'about us'
        ),
        array(
          'id' => 'about_des',
          'title' => __('Descriptions', 'finace'),
          'type' => 'text',
          'default' => 'TESTIMONIALS FROM OUR GREATEST CLIENTS'
        )
      )
    ));

    // call back section title

    CSF::createSection($prefix, array(
      'parent' => 'home_section',
      'title' => __('Call back section', 'finace'),
      'fields' => array(
        array(
          'id' => 'callback_title',
          'title' => __('Title', 'finace'),
          'type' => 'text',
          'default' => 'Request a'
        ),
        array(
          'id' => 'callback_color_title',
          'title' => __('Color Title', 'finace'),
          'type' => 'text',
          'default' => 'call back'
        ),
        array(
          'id' => 'callback_des',
          'title' => __('Descriptions', 'finace'),
          'type' => 'text',
          'default' => 'ETIAM SUSCIPIT ANTE A ODIO CONSEQUAT'
        )
      )
    ));

    // barnd logo add

    CSF::createSection($prefix, array(
      'parent' => 'home_section',
      'title' => __('Brand Item', 'finace'),
      'fields' => array(
        array(
          'id' => 'brand_items',
          'title' => __('Brand Items', 'finace'),
          'type' => 'group',
          'button_title' => 'Add brand items',
          'fields' => array(
            array(
              'id' => 'brand_Name',
              'title' => __('Brnad Name', 'finace'),
              'type' => 'text',
              'default' => 'vivo'
            ),
            array(
              'id' => 'barand_logo',
              'title' => __('Brand Logo', 'finace'),
              'type' => 'media'
            )
          )
        )
      )
    ));

    // about section all content

    CSF::createSection($prefix, array(
      'id' => 'about_sections',
      'title' => __('About Page', 'finace')
    ));
    CSF::createSection($prefix, array(
      'parent' => 'about_sections',
      'title' => __('Our team section', 'finace'),
      'fields' => array(
        array(
          'id' => 'team_section_title',
          'title' => __('Title', 'finace'),
          'type' => 'text',
          'default' => 'Our team'
        ),
        array(
          'id' => 'team_section_color_title',
          'title' => __('Color Title', 'finace'),
          'type' => 'text',
          'default' => 'members'
        ),
        array(
          'id' => 'team_section_des',
          'title' => __('Descriptions', 'finace'),
          'type' => 'text',
          'default' => 'SUSPENDISSE A ANTE IN NEQUE IACULIS LACINIA'
        )
      )
    ));

    // about section content
    CSF::createSection($prefix, array(
      'parent' => 'about_sections',
      'title' => __('About company', 'finace'),
      'fields' => array(
        array(
          'id' => 'aboutpage_sub_title',
          'title' => __('Sub title', 'finace'),
          'type' => 'text',
          'default' => 'WHO WE ARE'
        ),
        array(
          'id' => 'aboutpage_title',
          'title' => __('Title', 'finace'),
          'type' => 'text',
          'default' => 'Get to know about'
        ),
        array(
          'id' => 'aboutpage_color_title',
          'title' => __('Color Title text', 'finace'),
          'type' => 'text',
          'default' => 'our company'
        ),
        array(
          'id' => 'aboutpage_des',
          'title' => __('Descriptions', 'finace'),
          'type' => 'textarea',
          'default' => 'Curabitur pulvinar sem a leo tempus facilisis. Sed non sagittis neque. Nulla conse quat tellus nibh, id molestie felis sagittis ut. Nam ullamcorper tempus ipsum in cursus'
        ),
        array(
          'id' => 'aboutpage_button_text',
          'title' => __('Button Text', 'finace'),
          'type' => 'text',
          'default' => 'Read More'
        ),
        array(
          'id' => 'aboutpages_button_link',
          'title' => __('Button Link', 'finace'),
          'type' => 'text',
          'default' => '#'
        ),
        array(
          'id' => 'aboutpage_thumbnail',
          'title' => __('Thumbnail', 'finace'),
          'type' => 'media'
        )
      )
    ));

    // contact section title

    CSF::createSection($prefix, array(
      'parent' => 'about_sections',
      'title' => __('Contact section', 'finace'),
      'fields' => array(
        array(
          'id' => 'contact_section_title',
          'title' => __('Title', 'finace'),
          'type' => 'text',
          'default' => 'Send us a'
        ),
        array(
          'id' => 'contact_section_color_title',
          'title' => __('Color Title', 'finace'),
          'type' => 'text',
          'default' => 'message'
        ),
        array(
          'id' => 'contact_section_des',
          'title' => __('Descriptions', 'finace'),
          'type' => 'text',
          'default' => 'SUSPENDISSE A ANTE IN NEQUE IACULIS LACINIA'
        )
      )
    ));

    // contact map dynamic

    CSF::createSection($prefix, array(
      'parent' => 'about_sections',
      'title' => __('Contact Map', 'finace'),
      'fields' => array(
        array(
          'id' => 'contactmap',
          'title' => __('Map', 'finace'),
          'type' => 'map',
          'latitude' => '23.7751475',
          'longitude' => '88.6311437',
          'address' => 'Meherpur, Meherpur Sadar Upazila, Meherpur District, Khulna Division, 7100, Bangladesh'
        )
      )
    ));

    // copay wright sections

    CSF::createSection($prefix, array(
      'id' => 'copy_cont',
      'title' => __('Copy wright', 'finace')
    ));
    CSF::createSection($prefix, array(
      'parent' => 'copy_cont',
      'title' => __('copy wrigth content', 'finace'),
      'fields' => array(
        array(
          'id' => 'copy_title',
          'title' => __('Title', 'finace'),
          'type' => 'text',
          'default' => 'Copyright © 2020 Financial Business'
        )
      )
    ));

  }
  
?>