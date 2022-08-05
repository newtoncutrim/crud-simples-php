<h1>Novo Usuario</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="digite seu nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="digite seu email" class="form-control" required>
    </div> 
    <div class="mb-3">
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" placeholder="digite sua senha" class="form-control" required>
    </div> 
    <div class="mb-3">
        <label for="data">Data</label>
        <input type="date" id="data" name="data_nasc" placeholder="digite sua data de nascimento" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    
</form>
<?php
    
?>
