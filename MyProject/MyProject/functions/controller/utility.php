<?php
/**
 * Created by PhpStorm.
 * User: Vivek
 * Date: 7/19/2016
 * Time: 9:54 PM
 */
function uploadFile($f)
{
    if (isset($_POST['files'])) {
        $error = false;
        $files = array();

        $uploaddir = './uploads/';
        foreach ($f as $file) {
            if (move_uploaded_file($file['tmp_name'], $uploaddir . basename($file['name']))) {
                $files[] = $uploaddir . $file['name'];
            } else {
                $error = true;
            }
        }
        $data = ($error) ? array('error' => 'There was an error uploading your files') : array('files' => $files);
    } else echo "something went wrong";
}