{include file="header.tpl"}



<div class="portmye">
    <h1 class="titlemye">{$titulo}</h1>
</div>

<div class="container">
        <table class="table table-striped">
            <thead class="bg-success">
                <tr>
                    <th class="thtxt" scope="col"></th>
                    <th class="thtxt" scope="col">Materiales que se aceptan</th>
                    <th class="thtxt" scope="col">Formas de entrega</th>
                    {if $admin}
                     <th class="thtxt" scope="col">Borrar y editar</th>
                    {/if}

                </tr>
            </thead>
            <tbody>
                 {foreach from=$materiales item= materialito}
                    <tr>
                        <td class="table-success" ><img src="img/{$materialito->imagen}"></td>
                        <td class="table-success">{$materialito->tipo}</td>
                        <td class="table-success">{$materialito->entrega}</td>
                        {if $admin}
                         <td class="table-success">
                            <button type="button" class="btn btn-danger btnmm"><a href="deleteMaterial/{$materialito->id} "><h3 class="btnmgm">Borrar</h3></a></button> 
                            <button type="button" class="btn btn-primary btnmm"><a href="editMaterial/{$materialito->id}"><h3 class="btnmgm">Editar</h3></a></button>
                        </td>
                        {/if}
                        
                    </tr>
                {/foreach}
            </tbody>
        </table>

        {if $admin}
            <div class="formsito">
                <form class="mb-5" action="insertMaterial" method="post" >
                    <div class="form-group">
                        <label for="title" class="form-label">Material</label>
                        <input class="form-control" id="mterial" name="input_material" aria-describedby="emailHelp">
                      
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Entrega</label>
                        <input class="form-control" id="entrega" name="input_entrega" aria-describedby="emailHelp">
                      
                    </div>
                        <div class="form-group">
                        <label for="title" class="form-label">Imagen</label>
                        <input class="form-control" id="imagen" name="input_imagen" type="file" aria-describedby="emailHelp">
                    </div>
                   
                    <button type="submit" class="botonEstilo btnlog">Agregar</button>
                </form>
            </div>
        {/if}

                
</div>

{include file="footer.tpl"}