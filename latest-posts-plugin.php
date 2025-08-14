<?php

/**
 * Plugin Name: Latest Posts Plugin
 * Description: Menampilkan daftar posting terbaru dengan shortcode [latest_posts].
 * Version: 1.0
 * Author: Muhamad Nur Fatakhuzaman
 */

if (! defined('ABSPATH')) {
    exit; // Stop akses langsung
}

require_once plugin_dir_path(__FILE__) . 'class-latest-posts.php';

// Jalankan plugin
function lpp_run_plugin()
{
    $plugin = new Latest_Posts_Plugin();
    $plugin->init();
}
add_action('plugins_loaded', 'lpp_run_plugin');