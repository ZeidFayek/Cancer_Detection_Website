<?php

function classify_image($in1,$in2,$in3,$in4,$in5,$in6,$in7,$in8,$in9,$in10){
    $url = 'http://localhost:5000/classify/';
    $data = array('o1' => $in1,'o2' => $in2,'o3' => $in3,'o4' => $in4,'o5' => $in5,'o6' => $in6,'o7' => $in7,'o8' => $in8,'o9' => $in9,'o10' => $in10);
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $result = json_decode($result, true);
    return $result;
}

?>