<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
if (!function_exists('css_url')) {

    function css_url($nom) {
        return base_url() . 'assets/css/' . $nom . '.css';
    }

}
if (!function_exists('js_url')) {

    function js_url($nom) {
        return base_url() . 'assets/js/' . $nom . '.js';
    }

}
if (!function_exists('img_url')) {

    function img_url($nom) {
        return base_url() . 'assets/image/' . $nom;
    }

}
if (!function_exists('img')) {

    function img($nom, $alt = '') {
        return '<img src="' . img_url($nom) . '" alt="' . $alt . '" />';
    }

}

if (!function_exists('font_url')) {

    function font_url($nom) {
        return base_url() . 'assets/font-awesome/' . $nom;
    }

}

if (!function_exists('fonts_url')) {

    function fonts_url($nom) {
        return base_url() . 'assets/fonts/' . $nom;
    }

}