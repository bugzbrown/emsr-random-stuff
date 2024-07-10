<?php
/**
 * Plugin Name: GDPR Compliance Popup
 * Description: A simple GDPR compliance popup for WordPress.
 * Version: 1.0
 * Author: Your Name
 */

// Enqueue the necessary CSS and JavaScript
function gdpr_popup_enqueue_scripts() {
  wp_enqueue_style('gdpr-popup-css', plugin_dir_url(__FILE__) . 'gdpr-popup.css');
  wp_enqueue_script('gdpr-popup-js', plugin_dir_url(__FILE__) . 'gdpr-popup.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'gdpr_popup_enqueue_scripts');

// Add the GDPR popup HTML to the footer
function gdpr_popup_html() {
  ?>
  <div id="gdpr-popup">
    <p>We use cookies to ensure that we give you the best experience on our website. By continuing to use this site, you accept our <a href="/privacy-policy">privacy policy</a>.</p>
    <button id="accept-gdpr">Accept</button>
  </div>
  <?php
}
add_action('wp_footer', 'gdpr_popup_html');
