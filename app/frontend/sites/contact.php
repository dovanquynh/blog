<?php
if(isset($_POST['sendMail'])){
    $name = '';
    $email = '';
    $phone = '';
    $message = '';
    $success = true;

    if ($_POST['name'] != '') {
        $name = clean_input($_POST['name']);
    } else {
        $success = false;
    }

    if ($_POST['email'] != '') {
        $email = clean_input($_POST['email']);
    } else {
        $success = false;
    }

    if ($_POST['phone'] != '') {
        $phone = clean_input($_POST['phone']);
    } else {
        $success = false;
    }

    if ($_POST['message'] != '') {
        $message = clean_input($_POST['message']);
    } else {
        $success = false;
    }

    if (!$success){
        $msg = 'Please input all fields';
        echo $twig->render('contact.html', [
            'bg_image' => 'assets/img/contact-bg.jpg',
            'site_heading' => 'Contact',
            'sub_heading' => 'Follow Me',
            'msg' => $msg
        ]);
    } else {
        $mail = new PHPMailer();
        $mail->isSMTP();
//        $mail->SMTPDebug = 2;
//        $mail->Debugoutput = 'html';

        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPAuth = true;
        $mail->Username = 'quynhtiny1@gmail.com';
        $mail->Password = 'quynhladykillah';
        $mail->SetFrom($email , $name);
        $mail->AddReplyTo($email, $name);
        $mail->AddAddress("quynhtiny1@gmail.com", 'Quynh');
        $mail->Subject = "Email from" . $name . ' | Blog';
        $mail->MsgHTML($message);

        if (!$mail->Send()) {
            $msg = "Error: " . $email->ErrorInfo;
        } else {
            $msg = "Send Email Success!";
        }
        echo $twig->render('contact.html', [
            'bg_image' => 'assets/img/contact-bg.jpg',
            'site_heading' => 'Contact',
            'sub_heading' => 'Follow Me',
            'msg' => $msg
        ]);
    }

}

else {
    echo $twig->render('contact.html', [
        'bg_image' => 'assets/img/contact-bg.jpg',
        'site_heading' => 'Contact',
        'sub_heading' => 'Follow Me'
    ]);
}

