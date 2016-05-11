<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['field1'])) {
    $data = $_POST['field1'];
    $ret = file_put_contents('../sample_tei_project/TEI-XML_test_file.xml', $data);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   die('no post data to process');
}
header("Location: http://104.236.150.221/apitext_demo/results.html");
die();
?>
