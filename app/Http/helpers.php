<?php 
if (!function_exists('language')) {
    function language() {
        return LaravelLocalization::getCurrentLocale();
    }
}
?>