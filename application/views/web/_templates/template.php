<?php

defined('BASEPATH') or exit('No direct script access allowed');

header('X-Powered-By: engineering-innovation.com');
header('X-XSS-Protection: 1');
header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');
header('Vary: Accept-Encoding');

if (isset($header)) {
  echo $header;
}

if (isset($navbar)) {
  echo $navbar;
}

if (isset($content)) {
  echo $content;
}

// if (isset($bottom_bar)) {
//   echo $bottom_bar;
// }

if (isset($footer)) {
  echo $footer;
}
