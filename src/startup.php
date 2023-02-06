<?php

namespace G28\ConvertImageToWebp;

use WP_CLI;

if( !function_exists( __NAMESPACE__ . 'runPlugin') )
{
    function runPlugin( $root )
    {
        add_action( 'plugins_loaded', function () use ( $root ) {
            
        } );
        add_action( 'cli_init', function () {
            WP_CLI::add_command('g28', 'G28\ConvertImageToWebp\CliRegistrator\EuCapCli');
        } );
    }
}