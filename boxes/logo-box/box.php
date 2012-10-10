<?php
/*
Name: Simple Logo Box
Author: DIYWPBlog.com
Description: Simple Box to Add a Logo
Version: 1.0
Class: diy_logo_box
*/

class diy_logo_box extends thesis_box {

protected function translate() {
$this->title = __('Logo', 'diywp');
}

protected function options() {
global $thesis;
return array(
'class' => array(
'type' => 'text',
'width' => 'medium',
'code' => true,
'label' => $thesis->api->strings['html_class'],
'tooltip' => sprintf('%s %s', $thesis->api->strings['class_tooltip'], $thesis->api->strings['class_note'])),
'url_to' => array(
'type' => 'text',
'width' => 'long',
'label' => sprintf(__('Destination %s', 'diywp'), $thesis->api->base['url']),
'tooltip' => __('Enter the URL where you would like the logo to take you if clicked. If nothing is entered it will default to your site URL.', 'diywp')),
'logo_img' => array(
'type' => 'text',
'width' => 'long',
'label' => $this->title,
'tooltip' => __('Enter the URL for your image.', 'diywp')));
}

public function html($depth) {
$tab = str_repeat("\t", $depth);

// Defaults
$logo_img = !empty($this->options['logo_img']) ? $this->options['logo_img'] : '';
$url_to = !empty($this->options['url_to']) ? $this->options['url_to'] : site_url();
$class = !empty($this->options['class']) ? $this->options['class'] : 'diywp_img';

// output
printf('%s<div class="%s"><a href="%s"><img src="%s" /></a></div>', $tab, esc_attr($class), esc_url($url_to), esc_url($logo_img));
     }
}