<?php


namespace App\Controller;


class MoverApiV4
{

    function GetDelivery($user,$pass,$test=false) {
        return CurlRequest::CallAPI("GET", "https://test.mover24.ru/delivery/schemas.json", false, $user, $pass, $test);
    }

    function PostDelivery($user,$pass,$data,$test=false) {
        return CurlRequest::CallAPI("POST", "https://test.mover24.ru/delivery.json", $data, $user, $pass, $test);
    }
}