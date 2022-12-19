<?php 
    get_template_part('/lib/class-tgm-plugin-activation');

    // install plugins

    if(!function_exists('finace_plugins_install')){
        function finace_plugins_install(){
            $plugins = array(
                array(
                    'name' => 'Classic Editor',
                    'slug' => 'classic-editor',
                    'required' => true,
                    'force_deactivation' => true
                ),
                array(
                    'name' => 'Advanced Custom Fields',
                    'slug' => 'advanced-custom-fields',
                    'required' => true,
                    'force_deactivation' => true
                ),
                array(
                    'name' => 'Codestar Framework',
                    'slug' => 'codestar-framework',
                    'source' => 'https://github.com/Codestar/codestar-framework/archive/refs/heads/master.zip',
                    'required' => true,
                    'force_deactivation' => true
                ),
                array(
                    'name' => 'Contact Form 7',
                    'slug' => 'contact-form-7',
                    'required' => true,
                    'force_deactivation' => true
                ),
                array(
                    'name' => 'Advanced Custom Fields: Font Awesome Field',
                    'slug' => 'advanced-custom-fields-font-awesome',
                    'required' => true,
                    'force_deactivation' => true
                ),
                array(
                    'name' => 'Custom Post Type',
                    'slug' => 'finace-business-custom-post-type',
                    'source' => 'https://github.com/tarikulalways/finace-business-custom-post-type/archive/refs/heads/main.zip',
                    'required' => true,
                    'force_deactivation' => true
                ),
                array(
                    'name' => 'One Click Demo Import',
                    'slug' => 'one-click-demo-import',
                    'required' => true,
                    'force_deactivation' => true
                )
            );

            $config = array(
                'id' => 'tgmpa',
                'has_notices' => true
            );

            tgmpa( $plugins, $config );
        }
    }
    add_action('tgmpa_register', 'finace_plugins_install');


?>