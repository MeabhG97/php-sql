<?php
    //error_reporting(0);
    $errors = "";
    $myemail =  "d00182438@student.dkit.ie";// <-----Put your DkIT email address here.
    if(empty($_POST['name'])  ||
        empty($_POST['email']) ||
        empty($_POST['message'])){
        $errors .= "\n Error: all fields are required";
    }

    // Important: Create email headers to avoid spam folder
    $headers .= 'From: '.$myemail."\r\n".
        'Reply-To: '.$myemail."\r\n" .
        'X-Mailer: PHP/' . phpversion();


    $name = $_POST['name'];
    $email_address = $_POST['email'];
    $message = $_POST['message'];

    if (!preg_match(
        "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
        $email_address)){
        $errors .= "\n Error: Invalid email address";
    }

    if(empty($errors)){
            $to = $myemail;
            $email_subject = "Contact form submission: $name";
            $email_body = "You have received a new message. ".
            " Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message";

            if(mail($to,$email_subject,$email_body,$headers)){
                //redirect to the 'thank you' page
                header('Location: custom-order-confirmation.php');
            }
            else{
                echo "not sent";
            }
    }
?>

<!DOCTYPE HTML>
<html>
    <?php include "includes/head.php" ?>
    <body>
    <!-- This page is displayed only if there is some error -->

        <?php
            include "includes/nav.php";
            echo nl2br($errors);
            include "includes/footer.php";
        ?>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>