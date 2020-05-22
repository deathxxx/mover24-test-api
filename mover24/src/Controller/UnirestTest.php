<?php
//
//
//namespace App\Controller;
//
//
//class UnirestTest
//{
//    public function test2()
//    {
////        // search Songs of Frank Sinatra
//        $headers = array('Accept' => 'application/json');
//        $query = array('q' => 'Frank sinatra', 'type' => 'track');
////
//        $response = Unirest\Request::get('https://api.spotify.com/v1/search',$headers,$query);
////// or use a plain text request
////// $response = Unirest\Request::get('https://api.spotify.com/v1/search?q=Frank%20sinatra&type=track');
////
////// Display the result
////        dump($response->body);
//
////        $response = new Response(
////            'hi3435',
////            Response::HTTP_OK,
////            ['content-type' => 'text/html']
////        );
//
////        return $response;
//        die('hi');
//    }
//
//}