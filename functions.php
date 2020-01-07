<?php 
/**
 * MJV Innovation functions and definitions
 *
 *
 * @package WordPress
 * @subpackage mjvInnovation
 * @since 1.0
 */

/**
 * MJV Innovation only works in WordPress 4.9 or later.
 */

    include_once (get_template_directory (). '/theme-support/theme-supports.php');
    include_once (get_template_directory (). '/theme-support/cdn-supports.php');
    include_once (get_template_directory (). '/theme-support/widgets.php');
    include_once (get_template_directory (). '/theme-support/wp-scripts-styles.php');

    /* Increase image size*/
	@ini_set( 'upload_max_size' , '64M' );
	@ini_set( 'post_max_size', '64M');
    @ini_set( 'max_execution_time', '300' );
    
    //Desativando o Editor de Temas
    define('DISALLOW_FILE_EDIT', true);


   