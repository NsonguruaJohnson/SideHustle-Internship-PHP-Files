<?php
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["file"]) && $_FILES["file"]["error"] == 0){
     $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png", "mp4" => "video/mp4", "avi" => "video/avi", "3gp" => "video/3gp");
        $filename = $_FILES["file"]["name"];
     $filetype = $_FILES["file"]["type"];
     $filesize = $_FILES["file"]["size"];

    // print_r($_FILES);
     // Verify file extension
     $ext = pathinfo($filename, PATHINFO_EXTENSION);
     $ext1 = strtolower($ext);
    
     if(!array_key_exists($ext1, $allowed)) die("Error: Please select a valid file format.");
    //  if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

     // Verify file size - 5MB maximum
     $maxsize = 5 * 1024 * 1024;
     if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

     // Verify MYME type of the file
     if(in_array($filetype, $allowed)){
         // Check whether file exists before uploading it
         if(file_exists("upload/" . $filename)){
             // $filename1 = time() .  '_' . $filename;
             $filename1 = date("F d-Y h-i-s A") .  '_' . $filename;
             move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $filename1);
             echo $filename . "  already exists but uploaded.";
         } else{
             move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $filename);
             echo "Your file was uploaded successfully.";
         } 
     } else{
         echo "Error: There was a problem uploading your file. Please try again."; 
     }
 } else{
     echo "Error: " . $_FILES["file"]["error"];
    }
}
?>