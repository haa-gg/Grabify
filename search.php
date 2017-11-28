<?php 

/*===============Basic webm get command example

$imageString = file_get_contents("https://r5---sn-q4flrner.googlevideo.com/videoplayback?itag=251&sparams=clen%2Cdur%2Cei%2Cgir%2Cid%2Cinitcwndbps%2Cip%2Cipbits%2Citag%2Ckeepalive%2Clmt%2Cmime%2Cmm%2Cmn%2Cms%2Cmv%2Cpl%2Crequiressl%2Csource%2Cexpire&ipbits=0&requiressl=yes&keepalive=yes&mime=audio%2Fwebm&initcwndbps=561250&pl=19&ei=oBAPWtj4HtW3DLDuouAC&clen=65716772&mt=1510936628&expire=1510958336&gir=yes&mm=31&mn=sn-q4flrner&id=o-AF87OAXS1skldyStpuZ6cEWo-srliivh8enTqquI5HDS&dur=3850.021&ip=209.181.225.204&key=yt6&lmt=1449585387379371&source=youtube&mv=m&ms=au&alr=yes&ratebypass=yes&signature=0F0BB80DD7F112F6DBAAD4F4C871721519F3DDA5.61C5B2905D49A817D8F8569F8AF213B7CBE28EA3&cpn=VqZHA14pXYVkEI-7&c=web&cver=html5.webm");

$save = file_put_contents('download/test.webm',$imageString);*/


    $searchString   = 'Arcade High - Outrun This! Lyrics Video';
    $correctString  = str_replace(" ","+",$searchString);
    $youtubeUrl = "https://www.youtube.com/results?search_query=". $correctString;
    $getHTML        = file_get_contents($youtubeUrl);
    $pattern        = '/<a href="\/watch\?v=(.*?)"/i';

    if(preg_match($pattern, $getHTML, $match)){
            $videoID = $match[1];


    } else {
            echo "Something went wrong!";
            exit;
    }


    echo '<iframe width="560" height="315" src="//www.youtube.com/embed/'. $videoID .'" frameborder="0" allowfullscreen></iframe>';
    

 ?>


<?php
    require('youtube-dl.class.php');
    try {
        // Instantly download a YouTube video (using the default settings).
        new yt_downloader('http://www.youtube.com/watch?v=aahOEZKTCzU', TRUE);

        // Instantly download a YouTube video as MP3 (using the default settings).
        new yt_downloader('http://www.youtube.com/watch?v=aahOEZKTCzU', TRUE, 'audio');
    }
    catch (Exception $e) {
        die($e->getMessage());
    }