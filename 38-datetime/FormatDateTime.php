<?php

$date = new DateTime();
$date->setTimezone(new DateTimeZone("Asia/Jakarta"));


// string datetime
echo $date->format("Y-m-d H:i:s");
