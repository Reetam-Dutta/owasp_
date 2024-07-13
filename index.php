<?php

  $arrayName = array('.' => '&#x2022', '/'=> '&#xFE5F', '% '=>'&#x25' , '<'=>'&#x3C', '>'=>'&#x3E', '\\'=> '&#x5C','\"'=>'&#x22','\''=>'&#x27', 'or' => '&8qasxc', 'base64' => '$cbtd75');
  

  if(isset($_POST['submit'])){
    $text = fileWrite("text", htmlentities($_POST['name']));
    $email= fileWrite( "email",htmlentities($_POST['email']));
    $text = fileWrite ("text",htmlentities($_POST['contact']));
    $msg = fileWrite ("message",htmlentities($_POST['msg']));
    

    echo "done";
    
  }

  function replace($org){
    GLOBAL $arrayName;
    foreach($arrayName as $key => $val){
      $org = str_replace($key,$val,$org);
    }
    return $org;
  }
  function fileWrite($name, $val){
    $file = fopen("data.txt","a") or die("cant open file");
    fwrite($file, $name." ".$val."\n");
    fclose($file);
  }

?>
