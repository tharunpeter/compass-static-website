<?php
// variable settings

$email = $_REQUEST['email'];

//check input field
if(empty($email))
{
    echo "Plese the fields";
}
else
{
    mail("compassdezins@gmail.com","From: <$email>");
    echo "<script type='text/javascript'>alert('your message sent successfully');
    window.history.log(-1);
    </script>";
}
?>