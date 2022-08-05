<h1>listar usuario</h1>
<?php
    $sql = "SELECT * FROM crud";
    $res = $conexao->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0) {
        echo"<table class='table table-hover table-striped table-bordered'>";
        echo "<tr>";
        echo "<th> ID </th>";
        echo "<th> NOME </th>";
        echo "<th> E-MAIL </th>";
        echo "<th> SENHA </th>";
        echo "<th> DATA NASCIMENTO </th>";
        echo "<th> ACAO </th>";
        //trazer tudos os dados da tabela em objeto
        while($row = $res->fetch_object()) {
            echo "<tr>";
            echo "<td> $row->id </td>";
            echo "<td> $row->nome</td>";
            echo "<td> $row->email</td>";
            echo "<td> $row->senha</td>";
            echo "<td> $row->data_nasc</td>";
            echo "<td> 
            <button onclick=\"location.href='?page=editar&id= $row->id';\" class='btn btn-success'>EDITAR
            </button>

            <button onclick=\"if(confirm('tem certeza que desaja excluir?')){location.href='?page=salvar&acao=excluir&id= $row->id';}else{false;}\"class='btn btn-danger'>EXCLUIR
            </button>
            </td>";
            echo "<tr>";
        }
        echo"</table>";
    } else {
        echo "<script> alert('sem usuario cadastrado!') </script>";
    }
?>