<?php
/**
* Plugin Name: My first plugin
* Plugin Uri: https://gionline.xyz/crypto/home
* Author: Mubashar Hussain
* Author Uri:https://gionline.xyz/crypto/about
* Version:1.0.0
* Description: This is for just testing purpose of plugins by using php.
**/

defined('ABSPATH') || die ("You can't access this file directly");// for protection from directly access through URL in browser.

register_activation_hook(__FILE__,"First_plg_activation");// for activate this plugin this is a function which have 2 parameters(file path , funtion name/define function)
register_deactivation_hook(__FILE__,"First_plg_deactivation");// for deactivate this plugin this is a function which have 2 parameters(file path , funtion name/define function)
register_uninstall_hook(__FILE__,"First_plg_uninstall");// for uninstall this plugin this is a function which have 2 parameters(file path , funtion name/define function)

function First_plg_activation(){}

function First_plg_deactivation(){}

function First_plg_uninstall(){}
