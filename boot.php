<?php

/*
 * Prevent direct access
 */
defined('ADAPT_STARTED') or die;
use \frameworks\adapt as adapt;

$adapt = $GLOBALS['adapt'];
$adapt->dom->head->add(new html_link(array('type' => 'text/css', 'rel' => 'stylesheet', 'href' => '/adapt/frameworks/bootstrap_datetimepicker/static/css/bootstrap-datetimepicker.css')));
$adapt->dom->head->add(new adapt\html_script(array('type' => 'text/javascript', 'src' => '/adapt/frameworks/bootstrap_datetimepicker/static/js/bootstrap-datetimepicker.js')));

?>