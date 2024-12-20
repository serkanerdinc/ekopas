<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define("CACHE_DIR", APPPATH.'cache/');

if ( ! function_exists('is_cache_valid')) {
    function is_cache_valid($cache_name,$lifespan) {

        if (file_exists(CACHE_DIR.$cache_name)) {
            $last_date = filemtime(CACHE_DIR.$cache_name);
            print_r($last_date);
            die;

            if (abs($last_date - time()) < $lifespan) {
                return true;
            } else {
                file_put_contents(CACHE_DIR.$cache_name,time());
                return false;
            }
        } else {
            file_put_contents(CACHE_DIR.$cache_name,time());
            return true;
        }

    }
}