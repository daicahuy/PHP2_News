<?php

namespace Assignment\Php2News\Commons;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class Helper
{
    // Hàm debug: hiển thị ra dữ liệu và die luôn
    public static function debug($data)
    {
        echo "<pre>";

        print_r($data);

        die;
    }

    // Hàm sendEmail: gửi mail
    public static function sendEmail($to, $title, $contents)
    {

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->IsSMTP();

            $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'huymamicoi@gmail.com'; // SMTP username
            $mail->Password = 'dnhf xhpa niox wmod'; // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; //Enable implicit TLS encryption
            $mail->Port = 587; // TCP port to connect to

            //Recipients
            $mail->setFrom('php2news@gmail.com', "PHP2 News");
            $mail->addAddress($to);
            $mail->addReplyTo('not-reply@php2news.com', 'Information');

            // //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);
            $mail->Subject = mb_encode_mimeheader($title, "UTF-8", "B");
            $mail->Body = $contents;
            $mail->send();

            return true;
        } catch (\Exception $e) {

            $_SESSION['notify']['danger'][] = $mail->ErrorInfo;

            return false;
        }
    }

    //Hàm createToken: Tạo Token mới
    public static function createToken()
    {
        $code = '';

        for ($i = 0; $i < 2; $i++) {
            $number = rand(000, 999);
            $randomChar = chr(mt_rand(65, 90));
            $code .= $randomChar .= $number;
        }

        return md5($code);
    }
}
