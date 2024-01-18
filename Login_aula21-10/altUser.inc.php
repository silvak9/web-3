<?php
$us = Usuario::pegaUser(base64_decode($_REQUEST['x']));
?>
<h1>Atualização de usuário</h1>
<form action="principal.php?c=<?=base_encode('updateUser');?>" method="post">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?=$us->getNome();?>">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="<?=$us->getEmail();?>" readonly aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">O e-mail não pode ser alterado.</small>
    </div>
    <div class="form-group">
        <label for="nivel">Nivel</label>
        <select class="form-control"name="nivel" id="nivel">
            <option value="0" <?=$us->getNivel()==0 ? "selected" : "";?> > 0 - Usuário </option>
            <option value="1" <?=$us->getNivel()==1 ? "selected" : "";?> > 1 - Administrador </option>
        </select>
    </div>
    <div class="form-group">
        <label for="senha">Email</label>
        <input type="password" class="form-control" id="senha" name="senha" value="<?=$us->getEmail();?>" aria-describedby="senhaHelp">
        <small id="senhaHelp" class="form-text text-muted">Caso não queira trocar a senha, deixe em branco.</small>
    </div>
    <div class="form-group">
        <label for="csenha">Confirme a nova senha</label>
        <input type="password" class="form-control" id="csenha" name="csenha">
    </div>
    <button type="submit" class="btn btn-primary">Salvar alterações</button>
</form>