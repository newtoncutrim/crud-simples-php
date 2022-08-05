<?php

    switch(@$_REQUEST['acao']) {
    case "cadastrar":
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        $data_nasc = $_POST['data_nasc'];

        $sql = "INSERT INTO  crud (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

        $res = $conexao->query($sql);

        if($res == true) {
            echo "<script>alert('cadastro realizado com sucesso!');</script>"; 
            echo "<script>window.location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('cadastro nao realizado')</script>"; 
            echo "<script>window.location.href='?page=listar';</script>";
        }
        break;
    case "editar":
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $data_nasc = $_POST['data_nasc'];

        $sql = "UPDATE crud SET 
                    nome='{$nome}',
                    email='{$email}',
                    senha='{$senha}',
                    data_nasc='{$data_nasc}'
                WHERE 
                    id=".$_REQUEST['id'];


        $res = $conexao->query($sql);

        if($res == true) {
            echo "<script>alert('cadastro editado com sucesso!');</script>"; 
            echo "<script>window.location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('cadastro nao editado')</script>"; 
            echo "<script>window.location.href='?page=listar';</script>";
        }

        break;
    case "excluir":

        $sql = "DELETE FROM crud WHERE id=".$_REQUEST["id"];

        $res = $conexao->query($sql);


        if($res == true) {
            echo "<script>alert('cadastro excluido com sucesso!');</script>"; 
            echo "<script>window.location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('cadastro nao excluido')</script>"; 
            echo "<script>window.location.href='?page=listar';</script>";
        }

        break;
    }
?>