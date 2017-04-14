<?php


include_once 'DBfunctions.php';
$db = new DB_Functions();


echo $topicId;

$news=$_POST['news'];
$type=$_POST['type'];
$imei=$_POST['imei'];
$deviceId=$_POST['dID'];


echo "running";



        $newsID=$db->writeNewsToDB($news,$type,$imei,$deviceId);
        echo "news id=".$newsID;

        $length=intval($_POST['length']);
        echo "topic length is $length";

        for($i=0;$i<$length;$i++)
        {
            $topicId= $db->createTopic($_POST['topic'.$i],$_POST['user']);
            $db->createRelation($topicId,$newsID);

        }



die;



