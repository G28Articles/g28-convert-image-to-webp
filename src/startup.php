<?php

namespace G28\ConvertImageToWebp;


if( !function_exists( __NAMESPACE__ . 'runPlugin') )
{
    function runPlugin( $root )
    {
        add_action( 'plugins_loaded', function () use ( $root ) {
            
        } );
    }
}