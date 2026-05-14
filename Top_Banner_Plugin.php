<?php
/**
 * Plugin Name: Custom Top Message Bar
 * Description: Displays a customizable message at the top of every post.
 * Version: 1.0
 * Author: Andre
 */

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

/**
 * 1. Add the Menu to the Dashboard
 */
add_action('admin_menu', 'ctmb_add_admin_menu');
function ctmb_add_admin_menu() {
    add_menu_page(
        'Message Bar Settings',    // Page Title
        'Message Bar',             // Menu Title
        'manage_options',          // Capability
        'top-message-bar',         // Menu Slug
        'ctmb_settings_page',      // Function
        'dashicons-megaphone',     // Icon
        '80'                       // Position
    );
}

/**
 * 2. Register Settings
 */
add_action('admin_init', 'ctmb_settings_init');
function ctmb_settings_init() {
    register_setting('ctmb_settings_group', 'ctmb_text');
    register_setting('ctmb_settings_group', 'ctmb_bg_color');
    register_setting('ctmb_settings_group', 'ctmb_text_color');
}

/**
 * 3. Settings Page HTML
 */
function ctmb_settings_page() {
    ?>
    <div class="wrap">
        <h1>Top Message Bar Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('ctmb_settings_group');
            do_settings_sections('ctmb_settings_group');
            ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Message Text</th>
                    <td><input type="text" name="ctmb_text" value="<?php echo esc_attr(get_option('ctmb_text', 'Welcome to our site!')); ?>" style="width: 100%;" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Background Color</th>
                    <td><input type="color" name="ctmb_bg_color" value="<?php echo esc_attr(get_option('ctmb_bg_color', '#ff0000')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Text Color</th>
                    <td><input type="color" name="ctmb_text_color" value="<?php echo esc_attr(get_option('ctmb_text_color', '#ffffff')); ?>" /></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

/**
 * 4. Display the Message at the very top of the page
 */
add_action('wp_body_open', 'ctmb_display_message');
function ctmb_display_message() {
    if (is_single()) {
        $text = get_option('ctmb_text', 'Welcome to our site!');
        $bg = get_option('ctmb_bg_color', '#ff0000');
        $color = get_option('ctmb_text_color', '#ffffff');

        echo "
            <div class='ctmb-message-bar' style='
                background-color: {$bg};
                color: {$color};
                padding: 15px;
                text-align: center;
                font-weight: bold;
                width: 100%;
                box-sizing: border-box;
                z-index: 9999;
                position: relative;
                display: block;
            '>
                {$text}
            </div>
        ";
    }
}
