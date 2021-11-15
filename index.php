<?php

printf("Right now is %s", Carbon::now()->toDateTimeString());

printf("Right now in New York is %s", Carbon::now('US/Eastern'));
