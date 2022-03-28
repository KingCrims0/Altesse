<?php
// Uncomment the next line if you're not using a dependency loader (such as Composer), replacing <PATH TO> with the path to the sendgrid-php.php file
// require_once '<PATH TO>/sendgrid-php.php';
//const SENDGRID_API_KEY = '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';
require '../vendor/autoload.php';
include "../utile/config.php";

//const SENDGRID_API_KEY = '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';


if(isset($_POST)  &&  !empty($_POST["name"]) &&  !empty($_POST["mail"]) &&  !empty($_POST["message"]) )
{

    //echo "on entre";
    extract($_POST);
   

    $name=htmlentities($name);
    $mail=htmlentities($mail);
    $message=htmlentities($message);

    //var_dump($_POST);

    $email = new \SendGrid\Mail\Mail();
    $email->setFrom("steven.zanou@groupe-esigelec.org", "Altesse");
    $email->setSubject("Demande de contact de la part de ".$name);
    $email->addTo(FROM_EMAIL, "Example User");
    $email->addContent(
        "text/html", "Bonjour,<br/>".$name." 
                      a demandé à vous contacter.<br/>
                      Vous pouvez le contacter par mail à ".$mail."<br/>
                      Voici son message : <br/>".$message
    );

    /*$file_encoded = file_get_contents("../../upload/image/2d.pdf");
                $email->addAttachment(
                $file_encoded,
                "application/pdf",
                "test.pdf",
                "attachment"
                );*/

 //var_dump($_POST);
    $sendgrid = new \SendGrid(SENDGRID_API_KEY);
    try {
        $response = $sendgrid->send($email);
        /*print $response->statusCode() . "\n";
        print_r($response->headers());
        print $response->body() . "\n";*/
        header('Location: ../contact.php?isMailSentContact=true');
    } catch (Exception $e) {
        echo 'Caught exception: '. $e->getMessage() ."\n";
    }

}


?>