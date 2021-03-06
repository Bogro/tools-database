<?php


namespace ToolDataBase;


class DB
{
    /**
     * @param $val
     */
    public static function debug($val){
        echo '<pre>' . print_r($val, true) . '</pre>';
        die();
    }

    /**
     * @param $array
     * @return string
     */
    public static function toJson($array){
        return json_encode($array);
    }

    /**
     * @param $array
     * @return mixed
     */
    public static function toArray($array){
        return json_decode($array);
    }
}