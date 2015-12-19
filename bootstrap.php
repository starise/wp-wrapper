<?php
/**
 * Plugin Name: WordPress Wrapper Class
 * Description: WordPress class for easily manage templates following the DRY principle.
 * Version:     1.0.0
 * Author:      starise
 * Author URI:  http://stari.se
 */

if (file_exists(__DIR__ . '/src/Wrapper.php')) {
  require __DIR__ . '/src/Wrapper.php';
}

add_filter('template_include', ['Starise\\WordPress\\Wrapper', 'wrap'], 109);
