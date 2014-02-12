<?php

//MyCounter v1.0        04.16.2008
//MyCounter is distributed under GPL License
//You can use it, distribute it for FREE
//Hell, you can even modify it to fit your needs!
//Author: Adrian Mot
//E-mail: adrian.mot@gmail.com
//No warranty of any kind

function MyCounter($echo_output=true, $show_visits=true, $show_hits=true, $cookie_ttl=60) {
    if (!is_writable('count.txt'))
        die('probleme sur compteur: File count.txt .');
    else {
      $counter=file('count.txt');
      $visits=intval($counter[0]);
      $hits=intval($counter[1]);
    }
    if ($show_hits)
        $hits++;
    if (isset($show_visits) && $_COOKIE['MyCounter_visited']!='true') {
        $visits++;
        setcookie("MyCounter_visited", 'true', time()+$cookie_ttl*60*60*24);//=1jour
    }
    $handle=fopen('count.txt', 'w+');
    fwrite($handle, "$visits\n$hits");
    fclose($handle);
    
    if ($show_visits && $show_hits)
        $return=array($visits, $hits);
    elseif ($show_visits)
        $return=$visits;
    elseif ($show_hits)
        $return=$hits;
    if ($echo_output) {
        if (is_array($return))
            echo "Visits: $visits, Hits: $hits";
        else
            echo $return;
    }
    else {
        return $return;
    }
}

?>
