<?php
/*
Plugin Name: G28 Convert Image to Webp
Description: A G28 example plugin to demonstrate how to convert an image to webp format
Version: 0.0.3
Author: G28 - Guilherme Pereira
*/

if (!defined('ABSPATH')) exit;

/* require "vendor/autoload.php";

use function G28\ConvertImageToWebp\runPlugin;

runPlugin( __FILE__ ); */

use WP_CLI;

function generetaWebpFile($imageFile)
{
    $upload_dir = wp_upload_dir();
    $imageFile = substr($imageFile, 0 ,2);
    $imageFile = $upload_dir['basedir'] . $imageFile . ".webp";
    if (file_exists($imageFile)) {
        return $imageFile . '.webp';
    } else {
        $image_type = exif_imagetype($imageFile);
        $mime_type = image_type_to_mime_type($image_type);
        if ($mime_type == 'image/jpeg' || $mime_type == 'image/png') {
            $image = imagecreatefromstring(file_get_contents($imageFile));
            $saved = imagewebp($image, $imageFile);
            imagedestroy($image);
            if ($saved) {
                return $imageFile . '.webp';
            } else {
                return "";
            }
        }
    }
}


if (defined('WP_CLI') && WP_CLI) {
    add_action('cli_init', function () {
        WP_CLI::add_command('convert-webp', function ( $args ) {
            WP_CLI::line("Iniciando conversão da imagem...");
            [$message, $ret] = generetaWebpFile($args[0]);
            WP_CLI::line("Mensagem: " . $message);
            WP_CLI::line("R: " . $ret);
        });
    });
}
