<?php
/**
* Plugin Name: My first plugin
* Plugin Uri: https://gionline.xyz/crypto/home
* Author: Mubashar Hussain
* Author Uri:https://gionline.xyz/crypto/about
* Version:1.0.0
* Description: This is for just testing purpose of plugins by using php.
**/

defined('ABSPATH') || die ("You can't access this file directly");

register_activation_hook(__FILE__,"First_plg_activation")
register_deactivation_hook(__FILE__,"First_plg_deactivation")
register_uninstall_hook(__FILE__,"First_plg_uninstall")  

