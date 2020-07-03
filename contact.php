<?php
// variable settings
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$mesage = $_REQUEST['Mesage'];
//check input field
if(empty($name) || empty($email) || empty($mesage))
{
    echo "Plese fill all the fields";
}
else
{
    mail("compassdezins@gmail.com","compass Mesage",$mesage,"From: $name <$email>");
    echo "<script type='text/javascript'>alert('your message sent successfully');
    window.history.log(-1);
    </script>";
}
?>