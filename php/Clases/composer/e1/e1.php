<?php
require "vendor/autoload.php";

use SebastianBergmann\Timer\Timer;

Timer::start();

for($i=0; $i<10; $i++) {
    echo rand(1,100);
    sleep(1);
}
$time=Timer::stop();

var_dump($time);
var_dump(Timer::secondsToTimeString($time));
