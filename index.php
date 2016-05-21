<html>
<body style="margin: 0;">
<?php
$url = "https://docs.google.com/spreadsheets/d/1RyAmV8cNg0zht-ZP3k4-gglCpdo99PhHSLxbRVNeMlo/pub?gid=0&single=true&output=csv";
$csvFile = file($url);
    $data = [];
    foreach ($csvFile as $line) {
        $data[] = str_getcsv($line);
    }

    $length = count($data);
    $rowId = rand ( 1 , $length-1 );

    // var_dump($data[$rowId]);
    $img = $data[$rowId][0];
    if(substr( $img, 0, 4 ) !== "http") {
    	$img = "images/".$img;
    }
    $url = $data[$rowId][1];

    echo '<a href="'.$url.'" style="display:block; width:100%; height:100%; background:url('.$img.'); background-size:cover; text-decoration:none;">&nbsp;</a>';
?>
</body>
</html>
