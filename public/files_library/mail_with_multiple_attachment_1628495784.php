<?php
if(isset($_POST['apply']))
{
$to = 'sagar.logicsofts@gmail.com';
$subject  = "Application Request Information";
$todayis = date("l, F j, Y, g:i a") ;
$from = $_POST['email'];

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$nationality = $_POST['nationality'];
$hair_color = $_POST['hair_color'];
$height = $_POST['height'];
$dress_size = $_POST['dress_size'];
$eye_color = $_POST['eye_color'];
$bust_size = $_POST['bust_size'];
$skye_id = $_POST['skye_id'];
$message = "
Date ------- $todayis
Full Name ------- $full_name
Email Address ------ $email
Phone Number ------- $phone
Age ----------- $age
Nationality --------- $nationality
Hair colour --------- $hair_color
Height ------------ $height
Dress size ----------- $dress_size
Eye colour ------------- $eye_color
Bust size ----------- $bust_size
Skype id ------------- $skye_id
";
  $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";
		
		$from = $_POST['email'];
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From: ".$from."" . "\r\n";
        
		$headers = "From: $from\r\n" .
         "MIME-Version: 1.0\r\n" .
            "Content-Type: multipart/mixed;\r\n" .
            " boundary=\"{$mime_boundary}\"";
         $message = "This is a multi-part message in MIME format.\n\n" .
            "--{$mime_boundary}\n" .
            "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
            "Content-Transfer-Encoding: 7bit\n\n" .
         $message . "\n\n";
         foreach($_FILES as $userfile)
         {
            $tmp_name = $userfile['tmp_name'];
            $type = $userfile['type'];
            $name = $userfile['name'];
            $size = $userfile['size'];
            if (file_exists($tmp_name))
            {
               if(is_uploaded_file($tmp_name))
               {
                  $file = fopen($tmp_name,'rb');
                  $data = fread($file,filesize($tmp_name));
                  fclose($file);
                  $data = chunk_split(base64_encode($data));
               }
               $message .= "--{$mime_boundary}\n" .
                  "Content-Type: {$type};\n" .
                  " name=\"{$name}\"\n" .
                  "Content-Disposition: attachment;\n" .
                  " filename=\"{$fileatt_name}\"\n" .
                  "Content-Transfer-Encoding: base64\n\n" .
               $data . "\n\n";
            }
         }
         $message.="--{$mime_boundary}--\n";
  if (mail($to, $subject, $message, $headers))
  {
	print_r('<script>');
	print_r('self.location = "thankyou.html"');
	print_r('</script>');
	exit();
  } 
 else
   echo "Error in mail";
//mail($to,$subject,$message,$headers);
}
?>