<?php
function FzzBzz( $it = 20 )
{
    for ( $i = 1; $i <= $it; $i++ ) {
        if ( ( $i % 3 ) == 0 && ( $i % 5 ) == 0 ) {
            echo 'FzzBzz';
        } else if ( ( $i % 5 ) == 0 ) {
            echo 'Buzz';
        } else if ( ( $i % 3 ) == 0 ) {
            echo 'Fizz';
        } else {
            echo $i;
        }
        echo PHP_EOL;
    }
}

if ( PHP_SAPI == 'cli' ) {
    $it = 20;

    if ( isset( $_SERVER['argc'] ) && $_SERVER['argc'] > 1 && intval( $_SERVER['argv'][1] ) > 0 ) {
        $it = intval( $_SERVER['argv'][1] );
    }

    FzzBzz( $it );
    } else {
          echo '<pre>';
          $it = 20;

    if ( isset( $_REQUEST['it'] ) && intval( $_REQUEST['it'] ) > 0 ) {
        $it = intval( $_REQUEST['it'] );
    }

    FzzBzz( $it );
}