<?php
    ob_start();
    include 'includes/header.php'; //page header
?>
<div class="page-header">
    <div class="container">
        <h3>Contact Us</h3>
<?php
    //test mailing class
    $mail = new sendMail('davecowan2016@gmail.com', 'Dave Cowan', 
                         'Test PHP Mailer', '<h3>Hello</h3>', 'Hello', 
                         'davecowan2016@gmail.com', 'InClass Demo', 'avid-a-cowan@hotmail.com', 'Dave Cowan');
    //Send the email
    $result = $mail->SendMail();
    if($result){
        //success
        header('location:mailsent.php');
    }else{
        //fail
        header('location:mailerror.php');
    }
?>   
    <div>
</div>
<?php include 'includes/footer.php'; //page footer