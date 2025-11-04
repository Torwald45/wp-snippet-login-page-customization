<?php
/**
 * WordPress Login Page Customization
 * 
 * Customizes the WordPress login page with custom logo, URL, and title.
 * Changes default logo link from wordpress.org to site homepage.
 * 
 * @author      Torwald45
 * @link        https://github.com/Torwald45/wp-snippet-login-page-customization
 * @license     GPL-2.0-or-later
 * @version     1.0.0
 */

// Change login page logo
function torwald45_logpage_custom_login_logo() {
    ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            /* Change YOUR_LOGO_ID to your logo attachment ID from Media Library */
            background-image: url("<?php echo wp_get_attachment_url(YOUR_LOGO_ID); ?>");
            height: 160px;
            width: 320px;
            background-size: contain;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
    </style>
    <?php
}
add_action("login_enqueue_scripts", "torwald45_logpage_custom_login_logo");

// Change logo URL (links to site homepage instead of wordpress.org)
function torwald45_logpage_custom_login_logo_url() {
    return home_url();
}
add_filter("login_headerurl", "torwald45_logpage_custom_login_logo_url");

// Change logo title (tooltip)
function torwald45_logpage_custom_login_logo_title() {
    // Change YOUR_NAME to your site/company name
    return "YOUR_NAME";
}
add_filter("login_headertext", "torwald45_logpage_custom_login_logo_title");
