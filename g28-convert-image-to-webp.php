<?php
/*
Plugin Name: G28 Convert Image to Webp
Description: A G28 example plugin to demonstrate how to convert an image to webp format
Version: 0.0.1
Author: G28 - Guilherme Pereira
*/

if ( ! defined( 'ABSPATH' ) ) exit;

require "vendor/autoload.php";

use function G28\ConvertImageToWebp\runPlugin;

runPlugin( __FILE__ );