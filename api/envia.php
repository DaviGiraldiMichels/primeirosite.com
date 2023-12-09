<?php
if(!empty($_post['nome']) && !empty($_post['email']) && !empty($_post['mensagem'])){
    $to      = 'davigmichels@gmail.com';
    $subject = 'contato do site';
    $message = 'hello';
    $headers = 'From: davigmichels@gmail.com' . "\r\n" .
    'Reply-To: davigmichels@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
    echo json_encode(["status" => "success", "message" => "Enviado com sucesso"]);

}else{
    echo json_encode(["status" => "erro", "message" => "Nenhum dado foi enviado"]);
}}