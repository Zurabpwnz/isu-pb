<?php

if (in_category('stati')) { //slug категории
    include(TEMPLATEPATH.'/single-stati.php');
// } elseif (in_category('news')) { //slug категории
    // include(TEMPLATEPATH.'/single-news.php');
} else {
    include(TEMPLATEPATH.'/single-default.php');
}