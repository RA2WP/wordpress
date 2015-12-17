<?php
/**
 * HappenStance Theme Customizer.
 * @package HappenStance
 * @since HappenStance 2.0.0
*/

/**
 * Default values - backwards compatibility for older HappenStance versions.
 *  
*/ 
$happenstance_theme_options = get_option('happenstance_options');

if ($happenstance_theme_options != false) {
$happenstance_defaults = array(
			'happenstance_css' => $happenstance_theme_options['happenstance_css'],
			'happenstance_layout' => $happenstance_theme_options['happenstance_layout'],
			'happenstance_display_breadcrumb' => $happenstance_theme_options['happenstance_display_breadcrumb'],
      'happenstance_display_scroll_top' => $happenstance_theme_options['happenstance_display_scroll_top'],
			'happenstance_display_background_pattern' => $happenstance_theme_options['happenstance_display_background_pattern'],
			'happenstance_background_pattern_opacity' => $happenstance_theme_options['happenstance_background_pattern_opacity'],
      'happenstance_display_main_shadow' => $happenstance_theme_options['happenstance_display_main_shadow'],
			'happenstance_display_sidebar' => $happenstance_theme_options['happenstance_display_sidebar'],
			'happenstance_display_sidebar_archives' => $happenstance_theme_options['happenstance_display_sidebar_archives'],
			'happenstance_display_header_image' => $happenstance_theme_options['happenstance_display_header_image'],
			'happenstance_logo_url' => $happenstance_theme_options['happenstance_logo_url'],
      'happenstance_display_site_description' => $happenstance_theme_options['happenstance_display_site_description'],
      'happenstance_display_search_form' => $happenstance_theme_options['happenstance_display_search_form'],
			'happenstance_header_address' => $happenstance_theme_options['happenstance_header_address'],
			'happenstance_header_email' => $happenstance_theme_options['happenstance_header_email'],
			'happenstance_header_phone' => $happenstance_theme_options['happenstance_header_phone'],
			'happenstance_header_skype' => $happenstance_theme_options['happenstance_header_skype'],
			'happenstance_display_image_post' => $happenstance_theme_options['happenstance_display_image_post'],
			'happenstance_display_meta_post' => $happenstance_theme_options['happenstance_display_meta_post'],
			'happenstance_next_preview_post' => $happenstance_theme_options['happenstance_next_preview_post'],
			'happenstance_display_image_page' => $happenstance_theme_options['happenstance_display_image_page'],
			'happenstance_post_entry_format' => $happenstance_theme_options['happenstance_post_entry_format'],
			'happenstance_display_meta_post_entry' => $happenstance_theme_options['happenstance_display_meta_post_entry'],
			'happenstance_content_archives' => $happenstance_theme_options['happenstance_content_archives'],
      'happenstance_excerpt_length' => $happenstance_theme_options['happenstance_excerpt_length'],
      'happenstance_latest_posts_headline' => $happenstance_theme_options['happenstance_latest_posts_headline'],
			'happenstance_body_google_fonts' => $happenstance_theme_options['happenstance_body_google_fonts'],
			'happenstance_headings_google_fonts' => $happenstance_theme_options['happenstance_headings_google_fonts'],
      'happenstance_description_google_fonts' => $happenstance_theme_options['happenstance_description_google_fonts'],
			'happenstance_headline_google_fonts' => $happenstance_theme_options['happenstance_headline_google_fonts'],
			'happenstance_postentry_google_fonts' => $happenstance_theme_options['happenstance_postentry_google_fonts'],
			'happenstance_sidebar_google_fonts' => $happenstance_theme_options['happenstance_sidebar_google_fonts'],
			'happenstance_menu_google_fonts' => $happenstance_theme_options['happenstance_menu_google_fonts'],
			'happenstance_own_css' => $happenstance_theme_options['happenstance_own_css'] );
} else {
$happenstance_defaults = array(
			'happenstance_css' => 'Blue (default)',
			'happenstance_layout' => 'Boxed',
			'happenstance_display_breadcrumb' => 'Display',
      'happenstance_display_scroll_top' => 'Display',
			'happenstance_display_background_pattern' => 'Display',
			'happenstance_background_pattern_opacity' => 'Default',
      'happenstance_display_main_shadow' => 'Display',
			'happenstance_display_sidebar' => 'Display',
			'happenstance_display_sidebar_archives' => 'Display',
			'happenstance_display_header_image' => 'Everywhere',
			'happenstance_logo_url' => '',
      'happenstance_display_site_description' => 'Display',
      'happenstance_display_search_form' => 'Display',
			'happenstance_header_address' => '',
			'happenstance_header_email' => '',
			'happenstance_header_phone' => '',
			'happenstance_header_skype' => '',
			'happenstance_display_image_post' => 'Display',
			'happenstance_display_meta_post' => 'Display',
			'happenstance_next_preview_post' => 'Display',
			'happenstance_display_image_page' => 'Display',
			'happenstance_post_entry_format' => 'One Column',
			'happenstance_display_meta_post_entry' => 'Display',
			'happenstance_content_archives' => 'Excerpt',
      'happenstance_excerpt_length' => '40',
      'happenstance_latest_posts_headline' => 'Latest Posts',
			'happenstance_body_google_fonts' => 'default',
			'happenstance_headings_google_fonts' => 'default',
      'happenstance_description_google_fonts' => 'default',
			'happenstance_headline_google_fonts' => 'default',
			'happenstance_postentry_google_fonts' => 'default',
			'happenstance_sidebar_google_fonts' => 'default',
			'happenstance_menu_google_fonts' => 'default',
			'happenstance_own_css' => '' );
}

function happenstance_customize_register($wp_customize){

global $happenstance_defaults;

$happenstance_fonts = array(
			'default' => 'default',	
			'Abel' => 'Abel',			
			'Aclonica' => 'Aclonica',
			'Actor' => 'Actor',
			'Adamina' => 'Adamina',
			'Aldrich' => 'Aldrich',
			'Alice' => 'Alice',
			'Alike' => 'Alike',
			'Allan' => 'Allan',
			'Allerta' => 'Allerta',
      'Amarante' => 'Amarante',
			'Amaranth' => 'Amaranth',
      'Andika' => 'Andika',
			'Antic' => 'Antic',
			'Arimo' => 'Arimo',	
			'Artifika' => 'Artifika',
			'Arvo' => 'Arvo',
			'Brawler' => 'Brawler',
			'Buda' => 'Buda',	
      'Butcherman' => 'Butcherman',	
			'Cantarell' => 'Cantarell',	
      'Cherry Swash' => 'Cherry Swash',				
			'Chivo' => 'Chivo',			
			'Coda' => 'Coda',	
      'Concert One' => 'Concert One',		
			'Copse' => 'Copse',
			'Corben' => 'Corben',
			'Cousine' => 'Cousine',			
			'Coustard' => 'Coustard',
			'Covered By Your Grace' => 'Covered By Your Grace',
			'Crafty Girls' => 'Crafty Girls',
			'Crimson Text' => 'Crimson Text',
			'Crushed' => 'Crushed',
			'Cuprum' => 'Cuprum',
			'Damion' => 'Damion',
			'Dancing Script' => 'Dancing Script',
			'Dawning of a New Day' => 'Dawning of a New Day',
			'Days One' => 'Days One',
			'Delius' => 'Delius',
			'Delius Swash Caps' => 'Delius Swash Caps',
			'Delius Unicase' => 'Delius Unicase',
			'Didact Gothic' => 'Didact Gothic',
			'Dorsa' => 'Dorsa',
			'Droid Sans' => 'Droid Sans',
			'Droid Sans Mono' => 'Droid Sans Mono',
      'Droid Serif' => 'Droid Serif',
			'EB Garamond' => 'EB Garamond',
			'Expletus Sans' => 'Expletus Sans',
			'Fanwood Text' => 'Fanwood Text',
			'Federo' => 'Federo',
			'Fontdiner Swanky' => 'Fontdiner Swanky',
			'Forum' => 'Forum',
			'Francois One' => 'Francois One',
			'Gentium Basic' => 'Gentium Basic',
			'Gentium Book Basic' => 'Gentium Book Basic',
			'Geo' => 'Geo',
			'Geostar' => 'Geostar',
			'Geostar Fill' => 'Geostar Fill',
      'Gilda Display' => 'Gilda Display',
			'Give You Glory' => 'Give You Glory',
			'Gloria Hallelujah' => 'Gloria Hallelujah',
			'Goblin One' => 'Goblin One',
			'Goudy Bookletter 1911' => 'Goudy Bookletter 1911',
			'Gravitas One' => 'Gravitas One',
			'Gruppo' => 'Gruppo',
			'Hammersmith One' => 'Hammersmith One',
			'Holtwood One SC' => 'Holtwood One SC',
			'Homemade Apple' => 'Homemade Apple',
			'Inconsolata' => 'Inconsolata',
			'Indie Flower' => 'Indie Flower',
      'IM Fell English' => 'IM Fell English',
			'Irish Grover' => 'Irish Grover',
			'Irish Growler' => 'Irish Growler',
			'Istok Web' => 'Istok Web',
			'Judson' => 'Judson',
			'Julee' => 'Julee',
			'Just Another Hand' => 'Just Another Hand',
			'Just Me Again Down Here' => 'Just Me Again Down Here',
			'Kameron' => 'Kameron',
			'Kelly Slab' => 'Kelly Slab',
			'Kenia' => 'Kenia',
			'Kranky' => 'Kranky',
			'Kreon' => 'Kreon',
			'Kristi' => 'Kristi',
			'La Belle Aurore' => 'La Belle Aurore',
      'Lato' => 'Lato',
			'League Script' => 'League Script',
			'Leckerli One' => 'Leckerli One',
			'Lekton' => 'Lekton',
      'Lily Script One' => 'Lily Script One',
			'Limelight' => 'Limelight',
			'Lobster' => 'Lobster',
			'Lobster Two' => 'Lobster Two',
			'Lora' => 'Lora',
			'Love Ya Like A Sister' => 'Love Ya Like A Sister',
			'Loved by the King' => 'Loved by the King',
      'Lovers Quarrel' => 'Lovers Quarrel',
			'Luckiest Guy' => 'Luckiest Guy',
			'Maiden Orange' => 'Maiden Orange',
			'Mako' => 'Mako',
			'Marvel' => 'Marvel',
			'Maven Pro' => 'Maven Pro',
			'Meddon' => 'Meddon',
			'MedievalSharp' => 'MedievalSharp',
      'Medula One' => 'Medula One',
			'Megrim' => 'Megrim',
			'Merienda One' => 'Merienda One',
			'Merriweather' => 'Merriweather',
			'Metrophobic' => 'Metrophobic',
			'Michroma' => 'Michroma',
			'Miltonian Tattoo' => 'Miltonian Tattoo',
			'Miltonian' => 'Miltonian',
			'Modern Antiqua' => 'Modern Antiqua',
			'Molengo' => 'Molengo',
      'Monofett' => 'Monofett',
			'Monoton' => 'Monoton',
      'Montaga' => 'Montaga',
			'Montez' => 'Montez',
      'Montserrat' => 'Montserrat',
			'Mountains of Christmas' => 'Mountains of Christmas',
			'Muli' => 'Muli',
			'Neucha' => 'Neucha',
			'Neuton' => 'Neuton',
			'News Cycle' => 'News Cycle',
			'Nixie One' => 'Nixie One',
			'Nobile' => 'Nobile',
			'Nova Cut' => 'Nova Cut',
			'Nova Flat' => 'Nova Flat',
			'Nova Mono' => 'Nova Mono',
			'Nova Oval' => 'Nova Oval',
			'Nova Round' => 'Nova Round',
			'Nova Script' => 'Nova Script',
			'Nova Slim' => 'Nova Slim',
			'Nova Square' => 'Nova Square',
			'Numans' => 'Numans',
			'Nunito' => 'Nunito',
      'Open Sans' => 'Open Sans',
			'Oswald' => 'Oswald',
			'Over the Rainbow' => 'Over the Rainbow',
			'Ovo' => 'Ovo',
			'Pacifico' => 'Pacifico',
			'Passero One' => 'Passero One',
			'Patrick Hand' => 'Patrick Hand',
			'Paytone One' => 'Paytone One',
			'Permanent Marker' => 'Permanent Marker',
			'Philosopher' => 'Philosopher',
			'Play' => 'Play',
			'Playfair Display' => 'Playfair Display',
			'Podkova' => 'Podkova',
			'Poller One' => 'Poller One',
			'Pompiere' => 'Pompiere',
			'Prata' => 'Prata',
			'Prociono' => 'Prociono',
			'PT Sans' => 'PT Sans',
			'PT Sans Caption' => 'PT Sans Caption',
			'PT Sans Narrow' => 'PT Sans Narrow',
			'PT Serif' => 'PT Serif',
			'PT Serif Caption' => 'PT Serif Caption',
			'Puritan' => 'Puritan',
			'Quattrocento' => 'Quattrocento',
			'Quattrocento Sans' => 'Quattrocento Sans',
			'Questrial' => 'Questrial',
			'Radley' => 'Radley',
			'Raleway' => 'Raleway', 
      'Rationale' => 'Rationale',
			'Redressed' => 'Redressed',
      'Reenie Beanie' => 'Reenie Beanie', 
      'Roboto' => 'Roboto',
      'Roboto Condensed' => 'Roboto Condensed',
			'Rock Salt' => 'Rock Salt',
			'Rochester' => 'Rochester',
			'Rokkitt' => 'Rokkitt',
			'Rosario' => 'Rosario',
			'Ruslan Display' => 'Ruslan Display',
      'Sancreek' => 'Sancreek',
			'Sansita One' => 'Sansita One',
			'Schoolbell' => 'Schoolbell',
			'Shadows Into Light' => 'Shadows Into Light',
			'Shanti' => 'Shanti',
			'Short Stack' => 'Short Stack',
			'Sigmar One' => 'Sigmar One',
			'Six Caps' => 'Six Caps',
			'Slackey' => 'Slackey',
			'Smokum' => 'Smokum',
			'Smythe' => 'Smythe',
			'Sniglet' => 'Sniglet',
			'Snippet' => 'Snippet',
			'Sorts Mill Goudy' => 'Sorts Mill Goudy',
			'Special Elite' => 'Special Elite',
			'Spinnaker' => 'Spinnaker',
			'Stardos Stencil' => 'Stardos Stencil',
			'Sue Ellen Francisco' => 'Sue Ellen Francisco',
			'Sunshiney' => 'Sunshiney',
			'Swanky and Moo Moo' => 'Swanky and Moo Moo',
			'Syncopate' => 'Syncopate',
			'Tangerine' => 'Tangerine',
			'Tenor Sans' => 'Tenor Sans',
			'Terminal Dosis Light' => 'Terminal Dosis Light',
			'Tinos' => 'Tinos',
			'Tulpen One' => 'Tulpen One',
			'Ubuntu' => 'Ubuntu',
			'Ultra' => 'Ultra',
      'UnifrakturCook' => 'UnifrakturCook',
			'UnifrakturMaguntia' => 'UnifrakturMaguntia',
      'Unkempt' => 'Unkempt',
			'Unna' => 'Unna',
			'Varela' => 'Varela',
			'Varela Round' => 'Varela Round',
			'Vibur' => 'Vibur',
			'Vidaloka' => 'Vidaloka',
			'Volkhov' => 'Volkhov',
			'Vollkorn' => 'Vollkorn',
			'Voltaire' => 'Voltaire',
			'VT323' => 'VT323',
			'Waiting for the Sunrise' => 'Waiting for the Sunrise',
			'Wallpoet' => 'Wallpoet',
			'Walter Turncoat' => 'Walter Turncoat',
			'Wire One' => 'Wire One',
			'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
			'Yellowtail' => 'Yellowtail',
			'Yeseva One' => 'Yeseva One',
			'Zeyada' => 'Zeyada');
      
/**
 * Textarea custom control.
 *  
*/ 
class happenstance_customize_textarea_control extends WP_Customize_Control {
    public $type = 'textarea'; 
    public function render_content() { ?>
        <label>
        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
        </label>
<?php }}

/**
 * Sections and Options.
 *  
*/     
    $wp_customize->add_section('happenstance_general_settings', array(
        'title'    => __('HappenStance General Settings', 'happenstance'),
        'description' => '',
        'priority' => 120,
    ));
    $wp_customize->add_section('happenstance_header_settings', array(
        'title'    => __('HappenStance Header Settings', 'happenstance'),
        'description' => '',
        'priority' => 130,
    ));
    $wp_customize->add_section('happenstance_posts_settings', array(
        'title'    => __('HappenStance Posts/Pages Settings', 'happenstance'),
        'description' => '',
        'priority' => 140,
    ));
    $wp_customize->add_section('happenstance_post_entries_settings', array(
        'title'    => __('HappenStance Post Entries/Blog Page Settings', 'happenstance'),
        'description' => '',
        'priority' => 150,
    ));
    $wp_customize->add_section('happenstance_font_settings', array(
        'title'    => __('HappenStance Font Settings', 'happenstance'),
        'description' => '',
        'priority' => 160,
    ));
 
    //  =============================
    //  = Color Scheme              =
    //  =============================
    $wp_customize->add_setting('happenstance_css', array(
        'default'        => $happenstance_defaults['happenstance_css'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_css_control', array(
        'label'      => __('Color Scheme', 'happenstance'),
        'section'    => 'happenstance_general_settings',
        'settings'   => 'happenstance_css',
        'type'       => 'radio',
        'choices'    => array(
            'Blue (default)' => __( 'Blue (default)' , 'happenstance' ),
            'Gray' => __( 'Gray' , 'happenstance' ),
            'Green' => __( 'Green' , 'happenstance' ),
            'Purple' => __( 'Purple' , 'happenstance' ),
        ),
    ));
    
    //  =============================
    //  = Layout Style              =
    //  =============================
    $wp_customize->add_setting('happenstance_layout', array(
        'default'        => $happenstance_defaults['happenstance_layout'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_layout_control', array(
        'label'      => __('Layout Style', 'happenstance'),
        'section'    => 'happenstance_general_settings',
        'settings'   => 'happenstance_layout',
        'type'       => 'radio',
        'choices'    => array(
            'Boxed' => __( 'Boxed' , 'happenstance' ),
            'Wide' => __( 'Wide' , 'happenstance' ),
        ),
    ));
    
    //  =================================
    //  = Display Breadcrumb Navigation =
    //  =================================
    $wp_customize->add_setting('happenstance_display_breadcrumb', array(
        'default'        => $happenstance_defaults['happenstance_display_breadcrumb'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_display_breadcrumb_control', array(
        'label'      => __('Display Breadcrumb Navigation', 'happenstance'),
        'section'    => 'happenstance_general_settings',
        'settings'   => 'happenstance_display_breadcrumb',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'happenstance' ),
            'Hide' => __( 'Hide' , 'happenstance' ),
        ),
    ));
    
    //  =================================
    //  = Display Scroll-top Button     =
    //  =================================
    $wp_customize->add_setting('happenstance_display_scroll_top', array(
        'default'        => $happenstance_defaults['happenstance_display_scroll_top'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_display_scroll_top_control', array(
        'label'      => __('Display Scroll-top Button', 'happenstance'),
        'section'    => 'happenstance_general_settings',
        'settings'   => 'happenstance_display_scroll_top',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'happenstance' ),
            'Hide' => __( 'Hide' , 'happenstance' ),
        ),
    ));
    
    //  =================================
    //  = Background Pattern            =
    //  =================================
    $wp_customize->add_setting('happenstance_display_background_pattern', array(
        'default'        => $happenstance_defaults['happenstance_display_background_pattern'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_display_background_pattern_control', array(
        'label'      => __('Background Pattern (in Boxed layout style)', 'happenstance'),
        'section'    => 'happenstance_general_settings',
        'settings'   => 'happenstance_display_background_pattern',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'happenstance' ),
            'Hide' => __( 'Hide' , 'happenstance' ),
        ),
    ));
    
    //  =================================
    //  = Background Pattern Opacity    =
    //  =================================
    $wp_customize->add_setting('happenstance_background_pattern_opacity', array(
        'default'        => $happenstance_defaults['happenstance_background_pattern_opacity'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_background_pattern_opacity_control', array(
        'label'      => __('Background Pattern Opacity', 'happenstance'),
        'section'    => 'happenstance_general_settings',
        'settings'   => 'happenstance_background_pattern_opacity',
        'type'       => 'radio',
        'choices'    => array(
            'Default' => __( 'Default' , 'happenstance' ),
            '100' => '100',
            '90' => '90',
            '80' => '80',
            '70' => '70',
            '60' => '60',
            '50' => '50',
            '40' => '40',
            '30' => '30',
            '20' => '20',
            '10' => '10',
        ),
    ));
    
    //  ==================================
    //  = Display Shadow                 =
    //  ==================================
    $wp_customize->add_setting('happenstance_display_main_shadow', array(
        'default'        => $happenstance_defaults['happenstance_display_main_shadow'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_display_main_shadow_control', array(
        'label'      => __('Display Shadow', 'happenstance'),
        'section'    => 'happenstance_general_settings',
        'settings'   => 'happenstance_display_main_shadow',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'happenstance' ),
            'Hide' => __( 'Hide' , 'happenstance' ),
        ),
    ));
    
    //  ==================================
    //  = Display Sidebar on Posts/Pages =
    //  ==================================
    $wp_customize->add_setting('happenstance_display_sidebar', array(
        'default'        => $happenstance_defaults['happenstance_display_sidebar'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_display_sidebar_control', array(
        'label'      => __('Display Sidebar on Posts/Pages', 'happenstance'),
        'section'    => 'happenstance_general_settings',
        'settings'   => 'happenstance_display_sidebar',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'happenstance' ),
            'Hide' => __( 'Hide' , 'happenstance' ),
        ),
    ));
    
    //  ==================================
    //  = Display Sidebar on Archives    =
    //  ==================================
    $wp_customize->add_setting('happenstance_display_sidebar_archives', array(
        'default'        => $happenstance_defaults['happenstance_display_sidebar_archives'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_display_sidebar_archives_control', array(
        'label'      => __('Display Sidebar on Archives', 'happenstance'),
        'section'    => 'happenstance_general_settings',
        'settings'   => 'happenstance_display_sidebar_archives',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'happenstance' ),
            'Hide' => __( 'Hide' , 'happenstance' ),
        ),
    ));
    
    //  ==================================
    //  = Display Header Image           =
    //  ==================================
    $wp_customize->add_setting('happenstance_display_header_image', array(
        'default'        => $happenstance_defaults['happenstance_display_header_image'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_display_header_image_control', array(
        'label'      => __('Display Header Image', 'happenstance'),
        'section'    => 'happenstance_header_settings',
        'settings'   => 'happenstance_display_header_image',
        'type'       => 'radio',
        'choices'    => array(
            'Everywhere' => __( 'Everywhere' , 'happenstance' ),
            'Only on Homepage' => __( 'Only on Homepage' , 'happenstance' ),
        ),
    ));
    
    //  =============================
    //  = Header Logo               =
    //  =============================
    $wp_customize->add_setting('happenstance_logo_url', array(
        'default'        => $happenstance_defaults['happenstance_logo_url'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_uri',
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'happenstance_logo_url_control', array(
        'label'    => __('Header Logo', 'happenstance'),
        'section'  => 'happenstance_header_settings',
        'settings' => 'happenstance_logo_url',
    )));
    
    //  ====================================
    //  = Display Site Description         =
    //  ====================================
    $wp_customize->add_setting('happenstance_display_site_description', array(
        'default'        => $happenstance_defaults['happenstance_display_site_description'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_display_site_description_control', array(
        'label'      => __('Display Site Description', 'happenstance'),
        'section'    => 'happenstance_header_settings',
        'settings'   => 'happenstance_display_site_description',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'happenstance' ),
            'Hide' => __( 'Hide' , 'happenstance' ),
        ),
    ));
    
    //  ====================================
    //  = Display Search Form              =
    //  ====================================
    $wp_customize->add_setting('happenstance_display_search_form', array(
        'default'        => $happenstance_defaults['happenstance_display_search_form'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_display_search_form_control', array(
        'label'      => __('Display Search Form', 'happenstance'),
        'section'    => 'happenstance_header_settings',
        'settings'   => 'happenstance_display_search_form',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'happenstance' ),
            'Hide' => __( 'Hide' , 'happenstance' ),
        ),
    ));
    
    //  =============================
    //  = Postal Address            =
    //  =============================
    $wp_customize->add_setting('happenstance_header_address', array(
        'default'        => $happenstance_defaults['happenstance_header_address'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_header_address_control', array(
        'label'      => __('Postal Address', 'happenstance'),
        'section'    => 'happenstance_header_settings',
        'settings'   => 'happenstance_header_address',
    ));
    
    //  =============================
    //  = Email Address             =
    //  =============================
    $wp_customize->add_setting('happenstance_header_email', array(
        'default'        => $happenstance_defaults['happenstance_header_email'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_header_email_control', array(
        'label'      => __('Email Address', 'happenstance'),
        'section'    => 'happenstance_header_settings',
        'settings'   => 'happenstance_header_email',
    ));
    
    //  =============================
    //  = Phone Number              =
    //  =============================
    $wp_customize->add_setting('happenstance_header_phone', array(
        'default'        => $happenstance_defaults['happenstance_header_phone'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_header_phone_control', array(
        'label'      => __('Phone Number', 'happenstance'),
        'section'    => 'happenstance_header_settings',
        'settings'   => 'happenstance_header_phone',
    ));
    
    //  =============================
    //  = Skype Name                =
    //  =============================
    $wp_customize->add_setting('happenstance_header_skype', array(
        'default'        => $happenstance_defaults['happenstance_header_skype'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_header_skype_control', array(
        'label'      => __('Skype Name', 'happenstance'),
        'section'    => 'happenstance_header_settings',
        'settings'   => 'happenstance_header_skype',
    ));
    
    //  ==========================================
    //  = Display Featured Image on single posts =
    //  ==========================================
    $wp_customize->add_setting('happenstance_display_image_post', array(
        'default'        => $happenstance_defaults['happenstance_display_image_post'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_display_image_post_control', array(
        'label'      => __('Display Featured Image on single posts', 'happenstance'),
        'section'    => 'happenstance_posts_settings',
        'settings'   => 'happenstance_display_image_post',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'happenstance' ),
            'Hide' => __( 'Hide' , 'happenstance' ),
        ),
    ));
    
    //  ====================================
    //  = Display Meta Box on single posts =
    //  ====================================
    $wp_customize->add_setting('happenstance_display_meta_post', array(
        'default'        => $happenstance_defaults['happenstance_display_meta_post'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_display_meta_post_control', array(
        'label'      => __('Display Meta Box on single posts', 'happenstance'),
        'section'    => 'happenstance_posts_settings',
        'settings'   => 'happenstance_display_meta_post',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'happenstance' ),
            'Hide' => __( 'Hide' , 'happenstance' ),
        ),
    ));
    
    //  =================================
    //  = Next/Previous Post Navigation =
    //  =================================
    $wp_customize->add_setting('happenstance_next_preview_post', array(
        'default'        => $happenstance_defaults['happenstance_next_preview_post'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_next_preview_post_control', array(
        'label'      => __('Display Next/Previous Post Navigation on single posts', 'happenstance'),
        'section'    => 'happenstance_posts_settings',
        'settings'   => 'happenstance_next_preview_post',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'happenstance' ),
            'Hide' => __( 'Hide' , 'happenstance' ),
        ),
    ));
    
    //  ==========================================
    //  = Display Featured Image on pages        =
    //  ==========================================
    $wp_customize->add_setting('happenstance_display_image_page', array(
        'default'        => $happenstance_defaults['happenstance_display_image_page'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_display_image_page_control', array(
        'label'      => __('Display Featured Image on pages', 'happenstance'),
        'section'    => 'happenstance_posts_settings',
        'settings'   => 'happenstance_display_image_page',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'happenstance' ),
            'Hide' => __( 'Hide' , 'happenstance' ),
        ),
    ));
    
    //  ==================================
    //  = Post Entries Format            =
    //  ==================================
    $wp_customize->add_setting('happenstance_post_entry_format', array(
        'default'        => $happenstance_defaults['happenstance_post_entry_format'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_post_entry_format_control', array(
        'label'      => __('Post Entries Format', 'happenstance'),
        'section'    => 'happenstance_post_entries_settings',
        'settings'   => 'happenstance_post_entry_format',
        'type'       => 'radio',
        'choices'    => array(
            'One Column' => __( 'One Column' , 'happenstance' ),
            'Grid - Masonry' => __( 'Grid - Masonry' , 'happenstance' ),
        ),
    ));
    
    //  ====================================
    //  = Display Meta Box on Post Entries =
    //  ====================================
    $wp_customize->add_setting('happenstance_display_meta_post_entry', array(
        'default'        => $happenstance_defaults['happenstance_display_meta_post_entry'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_display_meta_post_entry_control', array(
        'label'      => __('Display Meta Box on Post Entries', 'happenstance'),
        'section'    => 'happenstance_post_entries_settings',
        'settings'   => 'happenstance_display_meta_post_entry',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'happenstance' ),
            'Hide' => __( 'Hide' , 'happenstance' ),
        ),
    ));
    
    //  ===============================
    //  = Content/Excerpt Displaying  =
    //  ===============================
    $wp_customize->add_setting('happenstance_content_archives', array(
        'default'        => $happenstance_defaults['happenstance_content_archives'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_content_archives_control', array(
        'label'      => __('Content/Excerpt Displaying', 'happenstance'),
        'section'    => 'happenstance_post_entries_settings',
        'settings'   => 'happenstance_content_archives',
        'type'       => 'radio',
        'choices'    => array(
            'Excerpt' => __( 'Excerpt' , 'happenstance' ),
            'Content' => __( 'Content' , 'happenstance' ),
        ),
    ));
    
    //  =============================
    //  = Excerpt Length            =
    //  =============================
    $wp_customize->add_setting('happenstance_excerpt_length', array(
        'default'        => $happenstance_defaults['happenstance_excerpt_length'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_excerpt_length_control', array(
        'label'      => __('Excerpt Length (number of words)', 'happenstance'),
        'section'    => 'happenstance_post_entries_settings',
        'settings'   => 'happenstance_excerpt_length',
    ));
    
    //  =================================
    //  = Latest Posts section headline =
    //  =================================
    $wp_customize->add_setting('happenstance_latest_posts_headline', array(
        'default'        => $happenstance_defaults['happenstance_latest_posts_headline'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control('happenstance_latest_posts_headline_control', array(
        'label'      => __('Latest Posts (Blog) page headline', 'happenstance'),
        'section'    => 'happenstance_post_entries_settings',
        'settings'   => 'happenstance_latest_posts_headline',
    ));
    
    //  =============================
    //  = Body font                 =
    //  =============================
     $wp_customize->add_setting('happenstance_body_google_fonts', array(
        'default'        => $happenstance_defaults['happenstance_body_google_fonts'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
 
    ));
    $wp_customize->add_control( 'happenstance_body_google_fonts_control', array(
        'settings' => 'happenstance_body_google_fonts',
        'label'   => __('Body font', 'happenstance'),
        'section' => 'happenstance_font_settings',
        'type'    => 'select',
        'choices'    => $happenstance_fonts,
    ));
    
    //  =============================
    //  = Site Title font           =
    //  =============================
     $wp_customize->add_setting('happenstance_headings_google_fonts', array(
        'default'        => $happenstance_defaults['happenstance_headings_google_fonts'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
 
    ));
    $wp_customize->add_control( 'happenstance_headings_google_fonts_control', array(
        'settings' => 'happenstance_headings_google_fonts',
        'label'   => __('Site Title font', 'happenstance'),
        'section' => 'happenstance_font_settings',
        'type'    => 'select',
        'choices'    => $happenstance_fonts,
    ));
    
    //  =============================
    //  = Site Description font     =
    //  =============================
     $wp_customize->add_setting('happenstance_description_google_fonts', array(
        'default'        => $happenstance_defaults['happenstance_description_google_fonts'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
 
    ));
    $wp_customize->add_control( 'happenstance_description_google_fonts_control', array(
        'settings' => 'happenstance_description_google_fonts',
        'label'   => __('Site Description font', 'happenstance'),
        'section' => 'happenstance_font_settings',
        'type'    => 'select',
        'choices'    => $happenstance_fonts,
    ));
    
    //  =============================
    //  = Page/Post Headlines font  =
    //  =============================
     $wp_customize->add_setting('happenstance_headline_google_fonts', array(
        'default'        => $happenstance_defaults['happenstance_headline_google_fonts'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
 
    ));
    $wp_customize->add_control( 'happenstance_headline_google_fonts_control', array(
        'settings' => 'happenstance_headline_google_fonts',
        'label'   => __('Page/Post Headlines (h1 - h6) font', 'happenstance'),
        'section' => 'happenstance_font_settings',
        'type'    => 'select',
        'choices'    => $happenstance_fonts,
    ));
    
    //  =============================
    //  = Post Entry Headline font  =
    //  =============================
     $wp_customize->add_setting('happenstance_postentry_google_fonts', array(
        'default'        => $happenstance_defaults['happenstance_postentry_google_fonts'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
 
    ));
    $wp_customize->add_control( 'happenstance_postentry_google_fonts_control', array(
        'settings' => 'happenstance_postentry_google_fonts',
        'label'   => __('Post Entry Headline font', 'happenstance'),
        'section' => 'happenstance_font_settings',
        'type'    => 'select',
        'choices'    => $happenstance_fonts,
    ));
    
    //  ========================================
    //  = Sidebar/Footer Widget Headlines font =
    //  ========================================
     $wp_customize->add_setting('happenstance_sidebar_google_fonts', array(
        'default'        => $happenstance_defaults['happenstance_sidebar_google_fonts'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
 
    ));
    $wp_customize->add_control( 'happenstance_sidebar_google_fonts_control', array(
        'settings' => 'happenstance_sidebar_google_fonts',
        'label'   => __('Sidebar/Footer Widget Headlines font', 'happenstance'),
        'section' => 'happenstance_font_settings',
        'type'    => 'select',
        'choices'    => $happenstance_fonts,
    ));
    
    //  =============================
    //  = Main Header Menu font     =
    //  =============================
     $wp_customize->add_setting('happenstance_menu_google_fonts', array(
        'default'        => $happenstance_defaults['happenstance_menu_google_fonts'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
 
    ));
    $wp_customize->add_control( 'happenstance_menu_google_fonts_control', array(
        'settings' => 'happenstance_menu_google_fonts',
        'label'   => __('Main Header Menu font', 'happenstance'),
        'section' => 'happenstance_font_settings',
        'type'    => 'select',
        'choices'    => $happenstance_fonts,
    ));
    
    //  =============================
    //  = Custom CSS                =
    //  =============================
    $wp_customize->add_setting('happenstance_own_css', array(
        'default'        => $happenstance_defaults['happenstance_own_css'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'happenstance_sanitize_text',
    ));
 
    $wp_customize->add_control( new happenstance_customize_textarea_control($wp_customize, 'happenstance_own_css_control', array(
        'label'    => __('Custom CSS', 'happenstance'),
        'section'  => 'happenstance_general_settings',
        'settings' => 'happenstance_own_css',
    )));
}

add_action('customize_register', 'happenstance_customize_register');

/**
 * Sanitize URIs
*/
function happenstance_sanitize_uri($uri) {
	if('' === $uri){
		return '';
	}
	return esc_url_raw($uri);
}

/**
 * Sanitize Texts
*/
function happenstance_sanitize_text($str) {
	if('' === $str){
		return '';
	}
	return sanitize_text_field( $str);
} ?>