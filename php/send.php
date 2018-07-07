<?php
if(isset($_POST['submit'])){
    $msg='Name: '.$_POST['name']."\n"
         .'Email: '.$_POST['email']."\n"
         .'Comment: '.$_POST['message']."\n"
         .'Phone: '.$_POST['phone'];
    mail('contact@codecreed.ml','contact form',$msg);
    mail($_POST['email'],'CODECREED','Thank you '.$_POST['name'].' for your response.'."\n\n\t\t".'-Team Codecreed');
    header('location: \hello.html');
}else{
    header('location: send.php');
    exit(0);
}
?>