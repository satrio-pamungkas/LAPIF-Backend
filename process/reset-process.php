<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../vendor/autoload.php';
    include '../config/connection.php';

    function get_email_address($username) {
        global $koneksi;
        
        $result = mysqli_query($koneksi, "SELECT email FROM userAdmin WHERE 
        username='$username'");
        $email = mysqli_fetch_assoc($result);

        return $email['email'];
    }

    if (isset($_POST['reset'])) {
        $username = $_POST['username'];
        $tujuan = get_email_address($username);
        $url = "http://localhost/LAPIF-Backend/new-password.php?username='$username'";

        try {
            $mail = new PHPMailer(true);
            $mail->setFrom("lapif-reset@reset.com","reset");
            $mail->addAddress($tujuan);
            $mail->addReplyTo("no-reply@gmail.com");
            $mail->isHTML(true);
            $mail->Subject  = "Reset Password";
            $mail->Body     = "<h1>Reset Password LAPIF</h1><br><a href='$url'>Klik</a>";
            $mail->send();
            
        } catch (Exception $e) {
            echo "Gagal mengirim pesan";
            echo "PHPMailer eror : ".$mail->ErrorInfo;
        }

        exit();
    }
?>