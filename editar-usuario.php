<h1>Editar Usuario</h1>
<?php 
    
    $sql = "SELECT * FROM crud WHERE id=".$_REQUEST["id"];
    $res = $conexao->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?= $row->id; ?>">
    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="<?= $row->nome;?>" placeholder="digite seu nome" class="form-control" require>
    </div>
    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" id="email" name="email"  value="<?= $row->email;?>" placeholder="digite seu email" class="form-control" require>
    </div> 
    <div class="mb-3">
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" value="<?= $row->senha;?>" placeholder="digite sua senha" class="form-control" require>
    </div> 
    <div class="mb-3">
        <label for="data">Data</label>
        <input type="date" id="data" name="data_nasc" value="<?= $row->data_nasc;?>" placeholder="digite sua data de nascimento" class="form-control" require>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    
</form>
<?php
    
?>
