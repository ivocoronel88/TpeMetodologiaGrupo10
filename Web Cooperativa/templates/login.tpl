{include file="header.tpl"}

<div class="portmye">
<h1 class="title">{$titulo_login}</h1>
</div>
<div class="formxd">
    <form action="verificarUser" method="post">
            <div class="form-group">
                <label for="user">Usuario</label>
                <input class="form-control" id="user" name="input_user" >
            </div>
            <div class="form-group">
                <label for="pass">Contraseña</label>
                <input type="password" class="form-control" id="pass" name="input_pass">
            </div>
            <div class="form-group">
            <button type="submit" class="botonEstilo btnlog">Login</button>
            </div>
            {if $mensaje}
                <div class="alert alert-danger" role="alert">{$mensaje}</div>
            {/if}
             
    </form>
    
</div>

{assign var=titulo value="null"}

{include file="footer.tpl"}