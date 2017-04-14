<?php

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function sqlInsert(mysqli &$conn,$tableName,...$value)
{
    $values='';
    foreach($value as $temp)
    {
        if(gettype($temp)=='string')
            $temp ="'".$temp."'";
        elseif($temp==null)
            $temp='null';
        $values .=$temp.",";

    }

    $values[strlen($values)-1]=' ';

    $q ="insert into $tableName VALUES (".$values.")";
       if(!$conn->query($q))
            echo "something went wrong at sqlinsert()";

    return $conn->affected_rows;
}

function sqlSelect(mysqli &$conn,$tableName,$from=array(),$where=null,$orderBy=null)
{
    $_from='';

    if($from =='*') {
        $_from = '*';
    }
    elseif(gettype($from)=='array')
    {
        foreach ($from as $item) {
            $_from .="$item,";
        }

        $_from[strlen($_from)-1] =' ';
    }

    $q="select $_from from $tableName".($where==null?'':(" where $where ")).($orderBy==null?'':("order by $orderBy"));
        echo $q;
    return $conn->query($q);

}

function &sqlConnect($host,$user,$pass,$db)
{
    $temp = new mysqli($host,$user,$pass,$db);
    if(!$temp)
    {
        echo "connection could not be established ".$temp->connect_error;
    }
    else return $temp;
}

function writeModule($file,$data,$mode=NULL)
{
    $url ="../modules/$file.php";
    $data="<?php ".$data;
    file_put_contents($url,$data);
    return $url;
}

function createElement($tag,$attributePair=null,$innerHtml=null)
{
    $attr='';
    foreach($attributePair as $key=>$value)
    {
        $attr .= "$key=\"$value\" ";
    }
    $markup = "<$tag $attr>$innerHtml</$tag>";
  //  $markup = "<$tag ".($class==null?'':" class=$class").($value==null?'':" values=".$value).">$innerHtml</$tag>";
    return $markup;
}

function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}