<?php
/**
 * Created by PhpStorm.
 * User: jaejin
 * Date: 2017. 5. 30.
 * Time: PM 7:45
 */



$filename = "Publication & Project List(안병구)-2017.05.29.pdf";
$reail_filename = urldecode("Publication & Project List(안병구)-2017.05.29.pdf");
$file_dir = './Publication & Project List(안병구)-2017.05.29.pdf';

header('Content-Type: application/x-octetstream');
header('Content-Length: '.filesize($file_dir));
header('Content-Disposition: attachment; filename='.$reail_filename);
header('Content-Transfer-Encoding: binary');

$fp = fopen($file_dir, "r");
fpassthru($fp);
fclose($fp);

