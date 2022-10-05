<? php
$name = $_POST['name']; 
$visitor_email = $_POST['email'];
$subjecct = $_POST['subject'];
$message = $_POST['message'];
$email_form='foodai.com';
$email_subject = "New FOrm Submission";
$email_body = "User Name: $name.\n".
                 "User Email: $visitor_email.\n".
                 "Subject: $subject.\n".
                 "User Message: $message.\n";
$to = 'ksa33-21-10301@gclass.ice.go.kr';

$headers = "From: $email_from \r\n";

$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subhect,$email_body$headers);
header("Location: contact_1.html");
?>