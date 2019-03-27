
<?php
/* Set e-mail recipient */
$myemail  = "email@email.com";
/* Check all form inputs using check_input function */
$yourname = check_input($_POST['yourname'], "Enter your name");
$phone    = check_input($_POST['phone']);
$email    = check_input($_POST['email']);
$msg      = check_input($_POST['msg']);
$subject  = "Poli Junior Formulário";
$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/plain; charset=UTF-8\n";
$headers .= "From: email@email.com\n"; // remetente
$headers .= "Return-Path: email@email.com\n"; // return-path
/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    echo "<script> alert('Digite um email válido'); 
    window.location = 'index.html';  </script>";
}
/* Let's prepare the message for the e-mail */
$message = "Olá!
Alguem se inscreveu no formulario de contato do seu site:\n
Nome $yourname \n
Telefone $phone \n
E-mail $email \n
Mensagem: $msg
";
/* Send the message using mail() function */
if(mail($myemail, $subject, $message, $headers,"-r".$myemail)){
    echo "<script> alert('Sua mensagem foi enviada com sucesso'); 
    window.location = 'index.html';  </script>";
} else {
    die("Falha no servidor ao tentar enviar o email");
};
/* Redirect visitor to the thank you page */
/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}
?>