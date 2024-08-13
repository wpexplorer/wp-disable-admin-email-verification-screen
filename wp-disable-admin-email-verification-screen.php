<?php

/*
 * Plugin Name: Disable Admin Email Verification Screen
 */

defined( 'ABSPATH' ) || exit;

add_filter( 'admin_email_check_interval', '__return_false' );
