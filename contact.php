<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$project_name = $_REQUEST['project_name'];


if(empty($name) || empty($email) || empty($message) || empty($project_name))
{
    echo "Please fill all fields";
}
else
{
    mail("lokossoustephen@gmail.com", "My Personal Portfolio", $message, "From: $name <$email>");
    echo "<script type='text/javascript'> alert('Your Message was sent Successfully');
    window.history.go(-1);
    </script>"
}

?>