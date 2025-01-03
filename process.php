<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensagem = $_POST['mensagem'];

    // Configuração do e-mail
    $para = 'paulinho2006sx@gmail.com'; // Seu e-mail
    $assunto = 'Nova mensagem do formulário de contato';
    $conteudo = "Nome: $nome\n";
    $conteudo .= "E-mail: $email\n";
    $conteudo .= "Celular: $celular\n";
    $conteudo .= "Mensagem: $mensagem\n";

    // Cabeçalhos do e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envia o e-mail
    if (mail($para, $assunto, $conteudo, $headers)) {
        echo 'Formulário enviado com sucesso!';
    } else {
        echo 'Erro ao enviar o formulário. Tente novamente.';
    }
}
?>

