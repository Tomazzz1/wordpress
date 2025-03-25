<?php


/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '4.8.7' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );
define( 'ASTRA_THEME_ORG_VERSION', file_exists( ASTRA_THEME_DIR . 'inc/w-org-version.php' ) );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '4.8.4' );

/**
 * Load in-house compatibility.
 */
if ( ASTRA_THEME_ORG_VERSION ) {
	require_once ASTRA_THEME_DIR . 'inc/w-org-version.php';
}

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

define( 'ASTRA_PRO_UPGRADE_URL', ASTRA_THEME_ORG_VERSION ? astra_get_pro_url( 'https://wpastra.com/pricing/', 'dashboard', 'free-theme', 'dashboard' ) : 'https://woocommerce.com/products/astra-pro/' );
define( 'ASTRA_PRO_CUSTOMIZER_UPGRADE_URL', ASTRA_THEME_ORG_VERSION ? astra_get_pro_url( 'https://wpastra.com/pricing/', 'customizer', 'free-theme', 'upgrade' ) : 'https://woocommerce.com/products/astra-pro/' );

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/lib/docs/class-astra-docs-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

// Enable NPS Survey only if the starter templates version is < 4.3.7 or > 4.4.4 to prevent fatal error.
if ( ! defined( 'ASTRA_SITES_VER' ) || version_compare( ASTRA_SITES_VER, '4.3.7', '<' ) || version_compare( ASTRA_SITES_VER, '4.4.4', '>' ) ) {
	// NPS Survey Integration
	require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-notice.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-survey.php';
}

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if ( is_admin() ) {
	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';
}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/surecart/class-astra-surecart.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymous functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';



//Ověření, jestli se načítá soubour functions.php správně
add_action('admin_notices', function() {
    echo '<div class="notice notice-success"><p>functions.php se načítá správně!</p></div>';
});
add_action( 'acf/init', 'set_acf_settings' );
function set_acf_settings() {
    acf_update_setting( 'enable_shortcode', true );
}

<<<<<<< Updated upstream
=======
//Stránka Contact Us

function kontakt_hero_nadpis_shortcode() {
    return '<h1 style="color:white">' . get_field('hero_nadpis', 1924) . '</h1>';
}
add_shortcode('kontakt_hero_nadpis', 'kontakt_hero_nadpis_shortcode');


// Shortcode pro úvodní frázi
function kontakt_uvodni_fraze_shortcode() {
    return '<h3 style="color:white">' . get_field('uvodni_fraze', 1924) . '</h3>';
}
add_shortcode('kontakt_uvodni_fraze', 'kontakt_uvodni_fraze_shortcode');

>>>>>>> Stashed changes
// Shortcode pro nadpis "kontakt_nadpis"
function kontakt_nadpis_shortcode() {
    return '<h3>' . get_field('kontakt_nadpis', 1924) . '</h3>';
}
add_shortcode('kontakt_nadpis', 'kontakt_nadpis_shortcode');


// Shortcode pro logo
function kontakt_logo_shortcode($atts) {
    // Nastavení výchozích hodnot pro šířku a výšku
    $atts = shortcode_atts(
        array(
            'width' => '100%',  // Výchozí šířka obrázku bude 100% (responzivní)
            'height' => 'auto', // Výška bude automaticky přizpůsobena
        ), 
        $atts, 
        'kontakt_logo'
    );

    $logo = get_field('logo', 1924);
    
    if ($logo) {
        return '<img src="' . esc_url($logo['url']) . '" alt="' . esc_attr($logo['alt']) . '" style="max-width: ' . esc_attr($atts['width']) . '; height: ' . esc_attr($atts['height']) . '; width: 100%;">';
    }

    return ''; // Pokud není logo, nevracíme nic
}
add_shortcode('kontakt_logo', 'kontakt_logo_shortcode');


// Shortcode pro jméno a příjmení
function kontakt_jmeno_prijmeni_shortcode() {
    return '<p style="font-size: 25px; margin-top: -40;"">' . get_field('jmeno_prijmeni', 1924) . '</p>';
}
add_shortcode('kontakt_jmeno_prijmeni', 'kontakt_jmeno_prijmeni_shortcode');

// Shortcode pro IČ
function kontakt_ic_shortcode() {
    return '<p style="font-size: 25px; margin-top: -40;"">' . get_field('ic', 1924) . '</p>';
}
add_shortcode('kontakt_ic', 'kontakt_ic_shortcode');

// Shortcode pro adresu
function kontakt_adresa_shortcode() {
    $adresa_nadpis = get_field('adresa_nadpis', 1924);
    $misto_bydliste = get_field('misto_bydliste', 1924);
    $psc = get_field('psc', 1924);
    $adresa_html = '';

    if ($adresa_nadpis) {
<<<<<<< Updated upstream
        $adresa_html .= '<h3 style="margin-bottom: 10px;">' . esc_html($adresa_nadpis) . '</h3>'; // Nastavení mezery pod nadpisem
    }
    if ($misto_bydliste) {
        $adresa_html .= '<p style="font-size: 25px; margin-top: 0; margin-bottom: 5px;">' . esc_html($misto_bydliste) . '</p>'; // Místo bydliště s menší mezerou pod tím
    }
    if ($psc) {
        $adresa_html .= '<p style="font-size: 25px; margin-top: 0;">' . esc_html($psc) . '</p>'; // PSČ bez mezery před ním
=======
        $adresa_html .= '<h3 style="margin-bottom: 10px;">' . esc_html($adresa_nadpis) . '</h3>'; 
    }
    if ($misto_bydliste) {
        $adresa_html .= '<p style="font-size: 25px; margin-top: 0; margin-bottom: 5px;">' .
        esc_html($misto_bydliste) . '</p>'; 
    }
    if ($psc) {
        $adresa_html .= '<p style="font-size: 25px; margin-top: 0;">' . esc_html($psc) . '</p>'; 
>>>>>>> Stashed changes
    }

    return $adresa_html;
}
add_shortcode('kontakt_adresa', 'kontakt_adresa_shortcode');

// Shortcode pro telefonní číslo
function kontakt_tel_shortcode() {
    $telcislo_nadpis = get_field('telcislo_nadpis', 1924);
    $telcislo = get_field('telcislo', 1924);
    $tel_html = '';

    if ($telcislo_nadpis) {
        $tel_html .= '<h3>' . esc_html($telcislo_nadpis) . '</h3>';
    }
    if ($telcislo) {
        $tel_html .= '<p style="font-size: 25px; margin-top: -40;"">' . esc_html($telcislo) . '</p>';
    }

    return $tel_html;
}
add_shortcode('kontakt_tel', 'kontakt_tel_shortcode');

// Shortcode pro e-mail
function kontakt_email_shortcode() {
    $email_nadpis = get_field('email_nadpis', 1924);
    $email = get_field('email', 1924);
    $email_html = '';

    if ($email_nadpis) {
        $email_html .= '<h3>' . esc_html($email_nadpis) . '</h3>';
    }
    if ($email) {
<<<<<<< Updated upstream
        $email_html .= '<p style="font-size: 25px; margin-top: -40;""><a href="mailto:' . esc_attr($email) . '">' . esc_html($email) . '</a></p>';
=======
        $email_html .= '<p style="font-size: 25px; margin-top: -40;"">' 
        . esc_attr($email) . '">' . esc_html($email) . '</p>';
>>>>>>> Stashed changes
    }

    return $email_html;
}
add_shortcode('kontakt_email', 'kontakt_email_shortcode');

<<<<<<< Updated upstream
function kontakt_hero_nadpis_shortcode() {
    return '<h1 style="color:white">' . get_field('hero_nadpis', 1924) . '</h1>';
}
add_shortcode('kontakt_hero_nadpis', 'kontakt_hero_nadpis_shortcode');


// Shortcode pro úvodní frázi
function kontakt_uvodni_fraze_shortcode() {
    return '<h3 style="color:white">' . get_field('uvodni_fraze', 1924) . '</h3>';
}
add_shortcode('kontakt_uvodni_fraze', 'kontakt_uvodni_fraze_shortcode');

// Shortcode pro načtení mapy (latitude, longitude)
=======









//Úvodní stránka
>>>>>>> Stashed changes


// Shortcode pro Nadpis (pro post s ID 2052)
function uvodka_nadpis_shortcode() {
    return '<h1 style="color:white;">' . get_field('nadpis', 2052) . '</h1>';
}
add_shortcode('uvodka_nadpis', 'uvodka_nadpis_shortcode');

<<<<<<< Updated upstream
// Shortcode pro Tlačítko (pro post s ID 2052)
function uvodka_tlacitko_shortcode() {
    return '<button>' . get_field('tlacitko', 2052) . '</button>';
}
add_shortcode('uvodka_tlacitko', 'uvodka_tlacitko_shortcode');

=======
>>>>>>> Stashed changes
// Shortcode pro Karta nadpis (pro post s ID 2052)
function uvodka_karta_nadpis_shortcode() {
    return '<h2>' . get_field('karta_nadpis', 2052) . '</h2>';
}
add_shortcode('uvodka_karta_nadpis', 'uvodka_karta_nadpis_shortcode');

// Shortcode pro Karta obsah (pro post s ID 2052)
function uvodka_karta_obsah_shortcode() {
<<<<<<< Updated upstream
    return '<h5 style="color:#7A7A7A; weight:thin; font-family:default;">' . get_field('karta_obsah', 2052) . '</h5>';
=======
    return '<h5 style="color:#7A7A7A; font-weight:300;">' . get_field('karta_obsah', 2052) . '</h5>';
>>>>>>> Stashed changes
}
add_shortcode('uvodka_karta_obsah', 'uvodka_karta_obsah_shortcode');

// Shortcode pro Karta obrázek (pro post s ID 2052)
function uvodka_karta_obrazek_shortcode() {
    $obrazek = get_field('karta_obrazek', 2052);
    if ($obrazek) {
        return '<img src="' . esc_url($obrazek['url']) . '" alt="' . esc_attr($obrazek['alt']) . '" style="max-width:100%; height:auto;">';
    }
    return ''; // Pokud není obrázek, nic se nezobrazí
}
add_shortcode('uvodka_karta_obrazek', 'uvodka_karta_obrazek_shortcode');

function uvodka_specializace_nadpis_shortcode() {
    return '<h2 style="color:#A9070F; text-align:center;" id="SECTION">' . get_field('specializace_nadpis', 2052) . '</h2>';
}
add_shortcode('uvodka_specializace_nadpis', 'uvodka_specializace_nadpis_shortcode');

function uvodka_karty_nadpis_shortcode() {
<<<<<<< Updated upstream
    return '<h2>' . get_field('karty_nadpis', 2052) . '</h2>';
}
add_shortcode('uvodka_karty_nadpis', 'uvodka_karty_nadpis_shortcode');


function monoliticke_galerie_shortcode() {
    $images = get_field('monoliticke_galerie');
    
    if (!$images) {
        return '<p>Žádné obrázky k zobrazení.</p>';
    }
    
    $output = '<div class="monoliticke-galerie">';
    
    foreach ($images as $image) {
        $output .= '<div class="galerie-item">';
        $output .= '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
        $output .= '</div>';
    }
    
    $output .= '</div>';
    
    return $output;
}
add_shortcode('monoliticke_galerie', 'monoliticke_galerie_shortcode');

=======
    return '<h2 style="color:white;text-decoration:underline;">' . get_field('karty_nadpis', 2052) . '</h2>';
}
add_shortcode('uvodka_karty_nadpis', 'uvodka_karty_nadpis_shortcode');
function uvodka_repeater_shortcode() {
    ob_start();

    $post_id = 2052; // Ručně nastavujeme ID postu, kde máme repeater

    
    if (have_rows('karty', $post_id)) {
        
        ?>
        <div class="acf-repeater" style="display: flex; flex-wrap:wrap; gap:40px; max-width:1200px; margin:0 auto;">
            <?php while (have_rows('karty', $post_id)) : the_row();
                $logo = get_sub_field('logo');
                $nadpis = get_sub_field('nadpis');
                $text = get_sub_field('text');
                ?>
                <div class="acf-repeater-item" style="width: 30%; min-width:300px; display:flex; flex-direction:column;">
                    <?php if ($logo): ?>
                        <div class="icon-wrapper" style="width: 100px; height:100px; background-color:#a00; border-radius:50%; display:flex; justify-content:center; align-items:center; margin-bottom:15px; overflow:hidden;">
                            <img style="width: 50px;height:50px;object-fit:contain; filter:brightness(0) invert();" src="<?php echo esc_url($logo['url']); ?>"  alt="<?php echo esc_attr($nadpis); ?>">
                        </div>
                    <?php endif; ?>
                    <h3 style="min-height: 50px; display: flex;"><?php echo esc_html($nadpis); ?></h3>
                    <p style="min-height: 100px;display:flex;"><?php echo esc_html($text); ?></p>
                </div>
            <?php endwhile; ?>
        </div>
        <?php
    } else {
        echo '<pre>Repeater "karty" neexistuje nebo je prázdný.</pre>';
    }

    return ob_get_clean();
}

add_shortcode('uvodka_repeater', 'uvodka_repeater_shortcode');






//Stránka Výstavba rodinných domů na klíč 
// Shortcode pro Stavby RS-mont nadpis (pro stránku s ID 2162)
function vystavba_rs_mont_nadpis_shortcode() {
    return '<h5 style="color:#A9070F;">' . get_field('rs_mont_nadpis', 2162) . '</h5>';
}
add_shortcode('vystavba_rs_mont_nadpis', 'vystavba_rs_mont_nadpis_shortcode');

function vystavba_hero_nadpis_shortcode() {
    return '<h1 style="color:white;">' . get_field('hero_nadpis', 2162) . '</h1>';
}
add_shortcode('vystavba_hero_nadpis','vystavba_hero_nadpis_shortcode');

function vystavba_karta_obsah_shortcode() {
    return '<h5 style="color:#7A7A7A;font-weight:300;">' . get_field('karta_obsah', 2162) . '</h5>';
}
add_shortcode('vystavba_karta_obsah','vystavba_karta_obsah_shortcode');

function vystavba_karta_obrazek_shortcode() {
    $obrazek = get_field('karta_obrazek', 2162);
    if ($obrazek) {
        return '<img src="' . esc_url($obrazek['url']) . '" alt="' . esc_attr($obrazek['alt']) . '" style="max-width:100%; height:auto;">';
    }
    return ''; // Pokud není obrázek, nic se nezobrazí
}
add_shortcode('vystavba_karta_obrazek', 'vystavba_karta_obrazek_shortcode');


//Stránka monolitické konstrukce 
function monoliticke_rs_mont_nadpis_shortcode() {
    return '<h5 style="color:#A9070F;">' . get_field('rs_mont_nadpis', 2240) . '</h5>';
}
add_shortcode('monoliticke_rs_mont_nadpis', 'monoliticke_rs_mont_nadpis_shortcode');

function monoliticke_hero_nadpis_shortcode() {
    return '<h1 style="color:white;">' . get_field('hero_nadpis', 2240) . '</h1>';
}
add_shortcode('monoliticke_hero_nadpis','monoliticke_hero_nadpis_shortcode');

function monoliticke_karta_obsah_shortcode() {
    return '<h5 style="color:#7A7A7A;font-weight:300;">' . get_field('karta_obsah', 2240) . '</h5>';
}
add_shortcode('monoliticke_karta_obsah','monoliticke_karta_obsah_shortcode');

function monoliticke_karta_obrazek_shortcode() {
    $obrazek = get_field('karta_obrazek', 2240);
    if ($obrazek) {
        return '<img src="' . esc_url($obrazek['url']) . '" alt="' . esc_attr($obrazek['alt']) . '" style="max-width:100%; height:auto;">';
    }
    return ''; // Pokud není obrázek, nic se nezobrazí
}
add_shortcode('monoliticke_karta_obrazek', 'monoliticke_karta_obrazek_shortcode');


//Stránka stropy a základy
function stropy_rs_mont_nadpis_shortcode() {
    return '<h5 style="color:#A9070F;">' . get_field('rs_mont_nadpis', 2263) . '</h5>';
}
add_shortcode('stropy_rs_mont_nadpis', 'stropy_rs_mont_nadpis_shortcode');

function stropy_hero_nadpis_shortcode() {
    return '<h1 style="color:white;">' . get_field('hero_nadpis', 2263) . '</h1>';
}
add_shortcode('stropy_hero_nadpis','stropy_hero_nadpis_shortcode');

function stropy_karta_obsah_shortcode() {
    return '<h5 style="color:#7A7A7A;font-weight:300;">' . get_field('karta_obsah', 2263) . '</h5>';
}
add_shortcode('stropy_karta_obsah','stropy_karta_obsah_shortcode');

function stropy_karta_obrazek_shortcode() {
    $obrazek = get_field('karta_obrazek', 2263);
    if ($obrazek) {
        return '<img src="' . esc_url($obrazek['url']) . '" alt="' . esc_attr($obrazek['alt']) . '" style="max-width:100%; height:auto;">';
    }
    return ''; // Pokud není obrázek, nic se nezobrazí
}
add_shortcode('stropy_karta_obrazek', 'stropy_karta_obrazek_shortcode');

//Stránka Rekonstrukce a zateplení
function rekonstrukce_rs_mont_nadpis_shortcode() {
    return '<h5 style="color:#A9070F;">' . get_field('rs_mont_nadpis', 2271) . '</h5>';
}
add_shortcode('rekonstrukce_rs_mont_nadpis', 'rekonstrukce_rs_mont_nadpis_shortcode');

function rekonstrukce_hero_nadpis_shortcode() {
    return '<h1 style="color:white;">' . get_field('hero_nadpis', 2271) . '</h1>';
}
add_shortcode('rekonstrukce_hero_nadpis','rekonstrukce_hero_nadpis_shortcode');

function rekonstrukce_karta_obsah_shortcode() {
    return '<h5 style="color:#7A7A7A;font-weight:300;">' . get_field('karta_obsah', 2271) . '</h5>';
}
add_shortcode('rekonstrukce_karta_obsah','rekonstrukce_karta_obsah_shortcode');

function rekonstrukce_karta_obrazek_shortcode() {
    $obrazek = get_field('karta_obrazek', 2271);
    if ($obrazek) {
        return '<img src="' . esc_url($obrazek['url']) . '" alt="' . esc_attr($obrazek['alt']) . '" style="max-width:100%; height:auto;">';
    }
    return ''; // Pokud není obrázek, nic se nezobrazí
}
add_shortcode('rekonstrukce_karta_obrazek', 'rekonstrukce_karta_obrazek_shortcode');


//Stránka Obklady a dlažby
function obklady_rs_mont_nadpis_shortcode() {
    return '<h5 style="color:#A9070F;">' . get_field('rs_mont_nadpis', 2278) . '</h5>';
}
add_shortcode('obklady_rs_mont_nadpis', 'obklady_rs_mont_nadpis_shortcode');

function obklady_hero_nadpis_shortcode() {
    return '<h1 style="color:white;">' . get_field('hero_nadpis', 2278) . '</h1>';
}
add_shortcode('obklady_hero_nadpis','obklady_hero_nadpis_shortcode');

function obklady_karta_obsah_shortcode() {
    return '<h5 style="color:#7A7A7A; font-weight:300;">' . get_field('karta_obsah', 2278) . '</h5>';
}
add_shortcode('obklady_karta_obsah','obklady_karta_obsah_shortcode');

function obklady_karta_obrazek_shortcode() {
    $obrazek = get_field('karta_obrazek', 2278);
    if ($obrazek) {
        return '<img src="' . esc_url($obrazek['url']) . '" alt="' . esc_attr($obrazek['alt']) . '" style="max-width:100%; height:auto;">';
    }
    return ''; // Pokud není obrázek, nic se nezobrazí
}
add_shortcode('obklady_karta_obrazek', 'obklady_karta_obrazek_shortcode');

//Stránka Výkopové práce
function vykopove_rs_mont_nadpis_shortcode() {
    return '<h5 style="color:#A9070F;">' . get_field('rs_mont_nadpis', 2291) . '</h5>';
}
add_shortcode('vykopove_rs_mont_nadpis', 'vykopove_rs_mont_nadpis_shortcode');

function vykopove_hero_nadpis_shortcode() {
    return '<h1 style="color:white;">' . get_field('hero_nadpis', 2291) . '</h1>';
}
add_shortcode('vykopove_hero_nadpis','vykopove_hero_nadpis_shortcode');

function vykopove_karta_obsah_shortcode() {
    return '<h5 style="color:#7A7A7A; font-weight:300;">' . get_field('karta_obsah', 2291) . '</h5>';
}
add_shortcode('vykopove_karta_obsah','vykopove_karta_obsah_shortcode');

function vykopove_karta_obrazek_shortcode() {
    $obrazek = get_field('karta_obrazek', 2291);
    if ($obrazek) {
        return '<img src="' . esc_url($obrazek['url']) . '" alt="' . esc_attr($obrazek['alt']) . '" style="max-width:100%; height:auto;">';
    }
    return ''; // Pokud není obrázek, nic se nezobrazí
}
add_shortcode('vykopove_karta_obrazek', 'vykopove_karta_obrazek_shortcode');


//Stránka Kontejnerová doprava
function kontejnery_rs_mont_nadpis_shortcode() {
    return '<h5 style="color:#A9070F;">' . get_field('rs_mont_nadpis', 2301) . '</h5>';
}
add_shortcode('kontejnery_rs_mont_nadpis', 'kontejnery_rs_mont_nadpis_shortcode');

function kontejnery_hero_nadpis_shortcode() {
    return '<h1 style="color:white;">' . get_field('hero_nadpis', 2301) . '</h1>';
}
add_shortcode('kontejnery_hero_nadpis','kontejnery_hero_nadpis_shortcode');

function kontejnery_karta_obsah_shortcode() {
    return '<h5 style="color:#7A7A7A; font-weight:300;">' . get_field('karta_obsah', 2301) . '</h5>';
}
add_shortcode('kontejnery_karta_obsah','kontejnery_karta_obsah_shortcode');

function kontejnery_karta_obrazek_shortcode() {
    $obrazek = get_field('karta_obrazek', 2301);
    if ($obrazek) {
        return '<img src="' . esc_url($obrazek['url']) . '" alt="' . esc_attr($obrazek['alt']) . '" style="max-width:100%; height:auto;">';
    }
    return ''; // Pokud není obrázek, nic se nezobrazí
}
add_shortcode('kontejnery_karta_obrazek', 'kontejnery_karta_obrazek_shortcode');
>>>>>>> Stashed changes
// Shortcode pro ACF Icon Boxes s individuálním obsahem pro každý box
// Shortcode pro ACF Icon Boxes s individuálním obsahem pro každý box


?>
<<<<<<< Updated upstream
<style>
    .monoliticke-galerie {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
    margin: 0 auto;
    max-width: 1000px; /* Nastav šířku, jakou chceš pro galerii */
}

.galerie-item {
    position: relative;
}

.monoliticke-galerie img {
    width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 8px; /* Zaoblené rohy (volitelné) */
    transition: transform 0.3s ease;
}

.monoliticke-galerie img:hover {
    transform: scale(1.05); /* Efekt zvětšení při najetí myší */
}

</style>
=======
>>>>>>> Stashed changes
