<?php

const FORMAT = "Y-m-d H:i:s";
const INPUT_STRING_DATETIME = "2001-6-1 00:00:00";
const TIMEZONE = new DateTimeZone("Asia/Jakarta");

$date = DateTime::createFromFormat(FORMAT, INPUT_STRING_DATETIME, TIMEZONE);
var_dump($date);
