<?php
if(!empty($_GET['file'])){
    $fileName = basename($_GET['file']);
    $filePath = $fileName;
    if(!empty($fileName) && file_exists($filePath)){
        // Define headers
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        //header("Content-Transfer-Encoding: binary");
        // Read the file
        readfile($filePath);
        exit;
    }
}
header("Location: fichiers.php");
?>