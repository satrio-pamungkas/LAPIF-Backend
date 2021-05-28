<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../vendor/autoload.php';
    include '../config/connection.php';

    try {
        $mail = new PHPMailer(true);
        $mail->IsSMTP();
        $mail->SMTPSecure = 'ssl';
        $mail->Host = "smtp.gmail.com"; //host masing2 provider email
        $mail->SMTPDebug = 2;
        $mail->Port = 465; //--tls: 587, ssl: 465
        $mail->SMTPAuth = true;
        // Silakan ubah kredensial
        $mail->Username = "emailanda";
        $mail->Password = "passwordanda";
        $mail->setFrom("emailanda");
        $mail->addAddress("emailtujuan");
        $mail->addReplyTo("no-reply@gmail.com");
        // Batas kredensial
        $mail->isHTML(true);
        $mail->Subject  = "Reset Password";
        $mail->Body     = "<h1>Reset Password LAPIF</h1><br><h2>Thanks</h2>";
        $mail->send();
        
    } catch (Exception $e) {
        echo "Gagal mengirim pesan";
        echo "PHPMailer eror : ".$mail->ErrorInfo;
    }
?>