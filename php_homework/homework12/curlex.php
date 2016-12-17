<?php

//php curl is used tosend http requests

class CurlEx{
  function httpGet($url){ //GET example
    $ch = curl_init(); //initialize curl session

    curl_setopt($ch, CURLOPT_URL, $url); //fetches url
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //if true, data is returned as string instead of output
    //curl_setopt($ch, CURLOPT_HEADER, true); //includes header/not

    $output = curl_exec($ch); //executes curl session

    if($output == false){
      echo "Error Number:".curl_errno($ch)."<br>"; //error as string
      echo "Error String:".curl_error($ch); //error as number
    }

    curl_close($ch); //closes session
    echo "curl session success";
    return $output;
  }

  function httpPost($url,$params){ //POST example
    $postData = ''; //create name value pairs seperated by &
    foreach($params as $k => $v){
      $postData .= $k . '='. $v. '&';
    }
    $postData = rtrim($postData, '&');

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_POST,count($postData));
    curl_setopt($ch, CURLOPT_POSTFIELDS,$postData);

    $out = curl_exec($ch);

    if($out == false){
      echo "Error Number:".curl_errno($ch)."<br>"; //error as string
      echo "Error String:".curl_error($ch); //error as number
    }

    curl_close($ch);
    echo "curl session success";
    return $out;
  }
}

$c = new CurlEx;

$c->httpGet('http://www.njit.edu');

$params = array(
   "name" => "Uh",
   "age" => "2",
   "location" => "the void"
);
$c->httpPost('http://www.njit.edu', $params);
?>
