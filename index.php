<?php

require __DIR__ . '/vendor/autoload.php';
use Carbon\Carbon;


printf("Right now in New York is %s.\n", Carbon::now('US/Eastern')->format('Y-m-d g:i:s A'));

printf("Tomorrow in New York will be %s.\n", Carbon::tomorrow('US/Eastern')->format('Y-m-d'));

printf("Right now in Paris is %s\n", Carbon::now('Europe/Paris'));
