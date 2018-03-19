<?php

//Variable Decalaration
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile'];
$message = $_REQUEST['message'];

//Get the uploaded file information
$name_of_uploaded_file = 
	basename($_FILES['uploaded_file']['name']);
 
//get the file extension of the file
$type_of_uploaded_file =
    substr($name_of_uploaded_file,
    strrpos($name_of_uploaded_file, '.') + 1);
 
$size_of_uploaded_file =
    $_FILES["uploaded_file"]["size"]/1024; //size in KBs

//Settings
$max_allowed_file_size = 2000; // size in KB
$allowed_extensions = array("jpg", "jpeg", "gif", "bmp", "png");
 
//Validations
if($size_of_uploaded_file > $max_allowed_file_size )
{
  $errors .= "\n Size of file should be less than $max_allowed_file_size";
}

// Validate the file extension
$allowed_ext = false;

for($i=0; $i<sizeof($allowed_extensions); $i++)
{
  if(strcasecmp($allowed_extensions[$i],$type_of_uploaded_file) == 0)
  {
    $allowed_ext = true;
  }
}
 
if(!$allowed_ext)
{
  $errors .= "\n The uploaded file is not supported file type. ".
  " Only the following file types are supported: ".implode(',',$allowed_extensions);
}

//copy the temp. uploaded file to uploads folder
$upload_folder = '/home/unicorn8/public_html/www.pencilsketch.in/uploads/';
//$upload_folder = '/uploads/';
$path_of_uploaded_file = $upload_folder . $name_of_uploaded_file;
$tmp_path = $_FILES["uploaded_file"]["tmp_name"];

if(is_uploaded_file($tmp_path))
{
  if(!copy($tmp_path,$path_of_uploaded_file))
  {
    $errors .= '\n error while copying the uploaded file';
  }
}

$userimage_email_path = "http://www.pencilsketch.in/uploads/" . $name_of_uploaded_file;

// Email Message acknowledgment
$headers = "From: pencilsketch.in@gmail.com" . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$emailbody = "<p>Hello, {$name}</p>
			  <p>I have received your order for sketching the Image. I will review the image and get back to you at the earliest.</p>
			  <p>&nbsp;</p>
			  <p>Thanks,<br/>
			  Prabhu Gsp<br/>
			  www.PencilSketch.in<br/>
        www.fb.com/pencilsketching</p>
        <br>
        This is an auto generated email. 
        <br>
			  <!-- <p><a href='{$userimage_email_path}'>click here to view you image</a></p>-->";

mail("{$email}","Thanks for ordering with www.pencilsketch.in",$emailbody,$headers);



//send email if all is ok
$headers = "From: Orders@pencilsketch.in" . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$emailbody = "<p>You have recieved a new message from the enquiries form on your website.</p>
			  <p><strong>Name: </strong> {$name} </p>
			  <p><strong>Email Address: </strong> {$email} </p>
			  <p><strong>Mobile: </strong> {$mobile} </p>
			  <p><strong>Message: </strong> {$message} </p>
        <p>Path of uploaded file: '{$path_of_uploaded_file}'</p>
        <p><a href='{$userimage_email_path}'>click here to view you image</a></p>";

mail("pencilsketch.in@gmail.com","New Order from PencilSketch",$emailbody,$headers);


?>
