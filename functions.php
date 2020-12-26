<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
function getAll(){
    global $db;
    $stmt = $db->prepare("SELECT * FROM taikhoan");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function activateUser($id)
{
	global $db;
    $code = null;
    $stmt = $db->prepare("UPDATE taikhoan set code = ? where id = ?"); 
    return $stmt->execute(array($code,$id));
}

function findUserById($id)  
{
	 global $db;
	 $stmt = $db->prepare("SELECT * FROM taikhoan WHERE id=?");
	 $stmt->execute(array($id));
	 return $stmt->fetch(PDO::FETCH_ASSOC);
}
function findUserByEmail($email)
{
	 global $db;
	 $stmt = $db->prepare("SELECT * FROM taikhoan WHERE email=?");
	 $stmt->execute(array($email));
	 return $stmt->fetch(PDO::FETCH_ASSOC);
}
function createUserUpdate($email,$repassword)
{
	 global $db;
	 $stmt = $db->prepare("UPDATE taikhoan SET password=? WHERE email=?");
	 $stmt->execute(array($repassword,$email));
     $stmt = $db->prepare("SELECT * FROM taikhoan WHERE email=?");
	 $stmt->execute(array($email));
	 return $stmt->fetch(PDO::FETCH_ASSOC);
}
function findUserByUsername($username)
{
	 global $db;
	 $stmt = $db->prepare("SELECT * FROM taikhoan WHERE username=?");
	 $stmt->execute(array($username));
	 return $stmt->fetch(PDO::FETCH_ASSOC);
}
function findIdByUsername($username)
{
	 global $db;
	 $stmt = $db->prepare("SELECT * FROM taikhoan WHERE username=?");
	 $stmt->execute(array($username));
	 return $stmt->fetch(PDO::FETCH_ASSOC);
}
function createUser($username,$email,$password,$code,$NameAccout)
{
	 global $db;
	 $stmt = $db->prepare("INSERT INTO taikhoan (username,email,password,code,NameAccout) VALUES (?,?,?,?,?) ");
	 $stmt->execute(array($username,$email,$password,$code,$NameAccout));
     return findUserById($db->lastInsertId());
}
function requireLoggedIn()
{
	global $currentUser;
	if(!$currentUser){
	header('Location: Login.html');
	exit();
	}
}
function getCurrentUser()
{
    if(isset($_SESSION['userId'])){
        return findUserById($_SESSION['userId']);
    }
    return null;
}

function sendEmail($to, $title, $content)
{

$mail = new PHPMailer(true);

try {       
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'ltw18ck1@gmail.com';                     // SMTP username
        $mail->Password   = '1234@1234';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        $mail->CharSet = 'UTF-8';
        //Recipients
        $mail->setFrom('ltw18ck1@gmail.com', 'LTW1 18CK1');
        $mail->addAddress($to);     // Add a recipient

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $title;
        $mail->Body    = $content;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
    } catch (Exception $e) 
        {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
}
function updateAvatar ($userId,$NameAccout,$sdt,$email,$diachi,$gender)
{
	 global $db;
	 $stmt = $db->prepare("UPDATE taikhoan SET NameAccout=?,sdt=?,email=?,diachi=?,gender=? WHERE id=? ");
	 $stmt->execute(array($NameAccout,$sdt,$email,$diachi,$gender,$userId));
}
?>