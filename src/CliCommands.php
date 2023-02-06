<?php

namespace G28\ConvertImageToWebp;

use WP_CLI;

class CliCommands
{
    public function __construct()
    {
        
    }

    public function convert2Webp( $args )
    {
        WP_CLI::line("Iniciando conversão da imagem...");
        [$message, $ret] = ImageConverter::generetaWebpFile( $args[0] );
        WP_CLI::line("Mensagem: " . $message);
        WP_CLI::line("R: " . $ret);
    }
}