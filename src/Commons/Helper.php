<?php 

namespace Trand\Lesson8OopBasic\Commons;

class Helper
{
    public static function debug($data) {
        echo '<pre>';

        print_r($data);

        die;
    }
}