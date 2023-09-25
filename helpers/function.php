<?php
function getImageType($image){
    switch ($image->getClientMimeType()){
        case "image/jpeg":
            return ".jpg";
        case "image/png":
            return ".png";
        default:
            return null;
    }
}

function file_upload($file, $path){
    if(!getImageType($file)){
        return "error";
    }

    $type = getImageType($file);
    $fileName = md5(date('y-m-d H:i:sa')).$type;

    $file->move($path, $fileName);

    return $fileName;
}




?>



