<?php

$arrayName = array('.' => '&#x2022', '/'=> '&#xFE5F', '% '=>'&#x25' , '<'=>'&#x3C', '>'=>'&#x3E', '\\'=> '&#x5C','\"'=>'&#x22','\''=>'&#x27', 'or' => '&8qasxc', 'base64' => '$cbtd75');


function replace($org){
  GLOBAL $arrayName;
  foreach($arrayName as $key => $val){
    $org = str_replace($val,$key,$org);
  }
  return $org;
}

$file = fopen("data.txt","r");
echo fread($file,filesize("./data.txt"));
fclose($file);


?>