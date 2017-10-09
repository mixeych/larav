<?php
namespace Zguchiy\Blockchain;

class HttpCall
{
    public static function send($url, $method = 'GET', $params = [] )
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        if(strtoupper($method)=='POST'){
            curl_setopt($ch, 'CURLOPT_POST', true);
            if(count($params)){
                curl_setopt($ch, 'CURLOPT_POSTFIELDS', $params);
            }
        }
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
}