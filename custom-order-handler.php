<?php
    //error_reporting(0);
    $errors = array();
    $myemail =  "d00182438@student.dkit.ie";// <-----Put your DkIT email address here.
    if(empty($_POST["name"])){
        $errors = ["name" => "empty"];
    }
    if(empty($_POST["email-add"])){
        $errors += ["email" => "empty"];
    }
    if(empty($_POST["address1"])){
        $errors += ["add1" => "empty"];
    }
    if(empty($_POST["address2"])){
        $errors += ["add2" => "empty"];
    }
    if(empty($_POST["address-town"])){
        $errors += ["town" => "empty"];
    }
    if(empty($_POST["address-county"])){
        $errors += ["county" => "empty"];
    }
    if(empty($_POST["address-eircode"])){
        $errors += ["eircode" => "empty"];
    }
    if(empty($_POST["order"])){
        $errors += ["order" => "empty"];
    }

    // Important: Create email headers to avoid spam folder
    $headers .= 'From: '.$myemail."\r\n".
        'Reply-To: '.$myemail."\r\n" .
        'X-Mailer: PHP/' . phpversion();


    $name = $_POST['name'];
    $email_address = $_POST['email-add'];
    $message = $_POST['message'];

    if (!preg_match(
        "/^(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}/i",
        $email_address)){
        $errors += ["invalid" => "email"];
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
                $errors += ["not-sent" => "email"];
            }
    }
    if(!empty($errors)){
        header("Location: custom-orders.php?" . http_build_query($errors, "err"));
    }
?>