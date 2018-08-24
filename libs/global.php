<?php
function clean_input ($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
function getFileExtension($fileName){
    return pathinfo($fileName)['extension'];
}
function uploadFile($file, $path, $allowType, $maxSize){
    $fileName = $file['name'];
    $ext = getFileExtension($fileName);
    $fileSize = $file['size'];
    $tmpFile = $file['tmp_name'];
    $result = [
      'error' => [],
      'path' => ''
    ];
    if($fileSize > $maxSize) {
        $result['error'][] = [
            "msg" => "File qua lon (" . ($maxSize > 1000000) . "MB)"
        ];
    }
    if (!in_array($ext, $allowType)){
        $result['error'][] = [
          "msg" => "Dinh dang File khong ho tro"
        ];
    }
    if(count($result['error']) == 0){
        $fileName = time(). '_' . $fileName;
        $path = $path . '/' . $fileName;
        if(move_uploaded_file($tmpFile, $path)){
            $result['path'] = $path;
        }
    }
    return $result;
}