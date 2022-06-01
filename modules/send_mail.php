<?php


// Düzenleme: Domainhizmetleri.com

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Gerekli dosyaları include ediyoruz
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';

if(isset($_FILES['contact-file']))
{

$path =__DIR__.'/../randevu_images/';
$name= time().'-'.basename( $_FILES['contact-file']['name']);
$path = $path . $name;
echo $path;

try {
    move_uploaded_file($_FILES['contact-file']['tmp_name'], $path);
} catch (\Throwable $th) {
    print_r($th -> getMessage());
}
// if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
//     echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
//     " has been uploaded";
// // } else{
//     echo "There was an error uploading the file, please try again!";
// }
 }

$mail = new PHPMailer(true);

try {
    //SMTP Sunucu Ayarları
    $mail->SMTPDebug = 0;
    $mail->isSMTP();											// SMTP gönderimi kullan
    $mail->Host       = 'mail.peradis.com';					// Email sunucu adresi. Genellikle mail.domainadi.com olarak kullanilir. Bu adresi hizmet saglayiciniza sorabilirsiniz
    $mail->SMTPAuth   = true;									// SMTP kullanici dogrulama kullan
    $mail->Username   = 'info@peradis.com';				// SMTP sunucuda tanimli email adresi
    $mail->Password   = 'PEra!421421.';			
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
		// SMTP email sifresi
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;			// SSL icin `PHPMailer::ENCRYPTION_SMTPS` kullanin. SSL olmadan 587 portundan gönderim icin `PHPMailer::ENCRYPTION_STARTTLS` kullanin
    $mail->Port       = 587;									// Eger yukaridaki deger `PHPMailer::ENCRYPTION_SMTPS` ise portu 465 olarak guncelleyin. Yoksa 587 olarak birakin
    $mail->setFrom('info@peradis.com', $_POST["contact-name"]. $_POST["contact-surname"]); // Gonderen bilgileri yukaridaki $mail->Username ile ay1231234klmnpRr..ali

    //Alici Ayarları
    $mail->addAddress('ukavza@yahoo.com', 'Alıcı Ad Soyad'); // Alıcı bilgileri
    //$mail->addReplyTo('YANITADRESI@domainadi.com');			// Alıcı'nın emaili yanıtladığında farklı adrese göndermesini istiyorsaniz aktif edin
    //$mail->addCC('CC@domainadi.com');
    //$mail->addBCC('BCC@domainadi.com');

    // Mail Ekleri
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Attachment ekleme
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Opsiyonel isim degistirerek Attachment ekleme

    // İçerik
    $mail->isHTML(true); // Gönderimi HTML türde olsun istiyorsaniz TRUE ayarlayin. Düz yazı (Plain Text) icin FALSE kullanin
	$mail->CharSet = 'utf-8';
    $mail->Subject = 'Yeni Randevu';
    $mail->Body    = 'İsim Soyisim:'. " ". $_POST["contact-name"]. " " . $_POST["contact-surname"]. "<br> Tel: ".$_POST["contact-phone"]. "<br> Email: " . $_POST["contact-email"] ."<br> <img src='peradis.com/randevu_images/$name'>" ;
    $mail->send();
    header("Location:../?status=ok");
} catch (Exception $e) {
    echo "Ops! Email iletilemedi. Hata: {$mail->ErrorInfo}";
}