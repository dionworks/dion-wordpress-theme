<?php
/**
* theme constants
*/

define('DION_THEME_SLUG','wpdion');
define('DION_THEME_URL',get_stylesheet_directory_uri());
define('DION_THEME_DIR',get_stylesheet_directory());
define('DION_COMPONENTS_URL',get_stylesheet_directory_uri().'/components');

global $options;
$options = get_option('dionOpt');

if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

require DION_THEME_DIR.'/inc/vendor/autoload.php';

//setting up the theme
Dion\ThemeSetup::getInstance();

//add_filter('redux/options/dionOpt/sections', 'dynamic_section');

global $reduxConfig;
$reduxConfig = new Dion\Admin\ReduxConfig();

//start ajax
Dion\Ajax::hooks();

//example usage of ajax class
Dion\Ajax::register('tester-event',function(){

	$success = 'successful request';
	$fail = 'failed request';

	update_option( 'dion-ajax-test', date('H:i:s') );

	if($_POST['success'] == 'yes') {

		wp_send_json_error($fail);
	} else {
		wp_send_json_success($fail);

	}
	
});

add_action('admin_init',function(){
    return;

    $content = file_get_contents(DION_THEME_DIR.'/pods.json');

    //$content =   json_decode($content);

    echo class_exists( 'Pods_Migrate_Packages' );
    if ( class_exists( 'Pods_Migrate_Packages' ) ) {

        $import = Pods_Migrate_Packages::import( $content ,false);

    } else {


        $classpath = WP_PLUGIN_DIR.'/pods/components/Migrate-Packages/Migrate-Packages.php';


        include_once($classpath);

        $import = Pods_Migrate_Packages::import( $content ,false);
    }


});


function dynamic_section($sections)
{
    //$sections = array();
    $sections[] = array(
        'title'  => __('Section via hook', 'redux-framework-demo'),
        'desc'   => __('<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo'),
        'icon'   => 'el-icon-paper-clip',
        // Leave this as a blank section, no options just some intro text set above.
        'fields' => array()
    );

    return $sections;
}


add_action( 'tgmpa_register', function(){

    $plugins = array(


        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'Migrate DB',
            'slug'      => 'wp-migrate-db',
            'required'  => false,
        ),
        array(
            'name'      => 'Pods Framework',
            'slug'      => 'pods',
            'required'  => true,
        )

    );
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => false,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => true,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'tgmpa' ),
            'menu_title'                      => __( 'Install Plugins', 'tgmpa' ),
            'installing'                      => __( 'Installing Plugin: %s', 'tgmpa' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'tgmpa' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'tgmpa' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'tgmpa' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'tgmpa' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'tgmpa' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'tgmpa' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'tgmpa' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'tgmpa' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'tgmpa' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'tgmpa' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'tgmpa' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'tgmpa' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'tgmpa' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'tgmpa' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );

    tgmpa( $plugins, $config );

});

/**
 * Create a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 */
function site_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() ) {
        return $title;
    }

    // Add the site name.
    $title .= get_bloginfo( 'name', 'display' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        $title = "$title $sep $site_description";
    }

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 ) {
        $title = "$title $sep " . sprintf( __( 'Page %s', 'dion' ), max( $paged, $page ) );
    }

    return $title;
}
add_filter( 'wp_title', 'site_wp_title', 10, 2 );


// Theme options added theme

add_action('wp_head', 'blogFavicon');
add_action('wp_head', 'userCustomCss');
add_action('wp_footer', 'userCustomJs');
add_action('wp_footer', 'googleAnalytics');

add_action( 'login_enqueue_scripts', 'dionLoginLogo' );
add_filter( 'login_headerurl',       'dionLoginLogoUrl' );
add_filter( 'login_headertitle',     'dionLoginLogoUrlTitle' );

// WordPress login page custom logo, description and url
function dionLoginLogo() { 
    global $options;
    ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo $options['logo']['url']; ?>);            
            background-size: 100% 100%;
            height: 80px;
            padding-bottom: 30px;
            width: 100% !important;
        }
    </style>
<?php }

function dionLoginLogoUrl() {
    return 'http://dionworks.com';
}
function dionLoginLogoUrlTitle() {
    return 'Dion Works - Works on Digital';
}

function blogFavicon(){
    global $options;

    $favicon     = $options['favicon']['url'];
    $favicon_57  = $options['favicon57']['url'];
    $favicon_72  = $options['favicon72']['url'];
    $favicon_114 = $options['favicon114']['url'];
    $favicon_144 = $options['favicon144']['url']; ?>

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo $favicon; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $favicon_144; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $favicon_114; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $favicon_72; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo $favicon_57; ?>">
<?php
}

function userCustomCss(){
    // Prepare options
    global $options;

    // Custom CSS
    if (isset($options['customCSS'])):?>
        <style type="text/css">
            <?php echo $options['customCSS']; ?>
        </style>
    <?php endif;
}

function userCustomJs(){
    // Prepare options
    global $options;

    // Custom JS
    if (isset($options['customJS'])):
        ?>
        <script type="text/javascript">
            <?php echo $options['customJS']; ?>
        </script>
    <?php endif;
}

function googleAnalytics(){
    global $options;

    if ($options["googleAnalytics"]) {
        ?>
        <script type="text/javascript">
            // Google Analytics
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', '<?php echo $options["googleAnalytics"]; ?>']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google_analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>
    <?php
    }
}



