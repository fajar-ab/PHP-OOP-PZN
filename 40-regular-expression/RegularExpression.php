<?php

$str = "2019010012, Fajar Fadilah. Sistem informasi";
$matches = [];
$result = (bool) preg_match_all("/fajar|fadilah/i", $str, $matches);

var_dump($result);
var_dump($matches);

// replace
$result = preg_replace("/anjing|bangsat/i", "***", "dasar loe anjing dan bangsat");
var_dump($result);


// split
$result = preg_split("/[\s,-]/i", "2019010012,Fajar Fadilah Sistem-Informasi");
var_dump($result);
