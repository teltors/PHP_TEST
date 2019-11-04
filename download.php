<?php
// $target_Dir = "./save/exam/";
$target_Dir = $_GET['path'];
$file = str_replace("+"," ", $_GET['file']);
$down_filename = $target_Dir.$file;

if (file_exists($down_filename))
{ 
    header("Content-type: doesn/matter"); 
    header("Content-length: ".filesize("$down_filename")); 
    header('Content-Disposition: attachment; filename="'.iconv('UTF-8','CP949',$file). '"');
    header("Content-Transfer-Encoding: binary"); 
    Header("Cache-Control: cache,must-revalidate"); 
    header("Pragma: cache"); 
    header("Expires: 0"); 
 
    if (is_file("$down_filename")) 
    {
        $fp = fopen("$down_filename", "r"); 
        if(!fpassthru($fp)) fclose($fp); 
    } 
}
?>
