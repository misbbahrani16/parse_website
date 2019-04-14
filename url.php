<?php
$url = "https://lms.nust.edu.pk/portal/course/view.php?id=28169";

var_dump(parse_url($url, PHP_URL_SCHEME));


var_dump(parse_url($url, PHP_URL_HOST));

var_dump(parse_url($url, PHP_URL_PATH));
var_dump(parse_url($url, PHP_URL_QUERY));

?>

