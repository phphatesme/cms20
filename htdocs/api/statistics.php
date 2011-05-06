<?php

$stats = explode( ';', file_get_contents( 'stats.ini' ));

$stats[0] += (int)$_GET['urls'];
$stats[1] += (int)$_GET['tests'];

file_put_contents( 'stats.ini', $stats[0].';'.$stats[1]);
