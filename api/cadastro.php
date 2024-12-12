<?php
    if($_POST ['nome' ] != ""){

        include 'script.php';
        $nome = $_POST ['nome'];
        $email = $_POST ['email'];
        $telefone = $_POST ['telefone'];
        $cpf = $_POST ['cpf'];

        $sql = "INSERT INTO `tabela1`(`Nome`, `E-mail`, `Telefone`, `CPF`) VALUES ('$nome','$email','$telefone','$cpf')";
        $query = mysqli_query ($conn,$sql) ;
        echo "Dados cadastrado com sucesso";
    }else{
        echo "Dados não cadastrado";}
?>
