<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $mensagem = htmlspecialchars($_POST['mensagem']);
    
    $para = "professorti60@gmail.com";
    $assunto = "Novo Contato do Site - AFN Instalações";
    
    $corpo = "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Telefone: $telefone\n";
    $corpo .= "Mensagem:\n$mensagem\n";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if (mail($para, $assunto, $corpo, $headers)) {
        // Redireciona para página de sucesso
        header('Location: obrigado.html');
    } else {
        header('Location: erro.html');
    }
}
?>