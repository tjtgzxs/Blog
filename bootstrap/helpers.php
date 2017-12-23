<?php
/**
 * Created by PhpStorm.
 * User: Johnson
 * Date: 2017/12/23
 * Time: 19:05
 */

function get_db_config(){
    if(getenv('IS_IN_HEROKU')){
        $url=parse_url(getenv("DATABASE_URL"));
        return $db_config=[
            'connection' => 'pgsql',
            'host' => $url["host"],
            'database'  => substr($url["path"], 1),
            'username'  => $url["user"],
            'password'  => $url["pass"],
        ];
    }else{
        return $db_config = [
            'connection' => env('DB_CONNECTION', 'mysql'),
            'host' => env('DB_HOST', 'localhost'),
            'database'  => env('DB_DATABASE', 'sample'),
            'username'  => env('DB_USERNAME', 'homestead'),
            'password'  => env('DB_PASSWORD', 'homestead'),
        ];
    }

}