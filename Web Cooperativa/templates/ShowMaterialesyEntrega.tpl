{include file="header.tpl"}

<h1>{$titulo}</h1>
<div class="container">
        <table class="table table-striped">
            <thead class="bg-success">
                <tr>
                    <th scope="col">Materiales que se aceptan</th>
                    <th scope="col">Formas de entrega</th>
                    {if $admin}
                     <th scope="col">Borrar y editar</th>
                    {/if}

                </tr>
            </thead>
            <tbody>
                 {foreach from=$materiales item= materialito}
                    <tr>
                        <td class="table-success">{$materialito->tipo}</td>
                        
                        <td class="table-success">{$materialito->entrega}</td>
                        {if $admin}
                         <td class="table-success">
                            <button type="button" class="btn btn-success"><a href="deleteMaterial/{$materialito->id} ">Borrar</a></button> 
                            <button type="button" class="btn btn-info"><a href="editMaterial/{$materialito->id}">Editar</a></button>
                        </td>
                        {/if}
                        
                    </tr>
                {/foreach}
            </tbody>
        </table>





        {if $admin}
            <div class="container">
                <form action="insertMaterial" method="post" >
                    <div class="form-group">
                        <label for="title">Material</label>
                        <input class="form-control" id="mterial" name="input_material" aria-describedby="emailHelp">
                      
                    </div>
                    <div class="form-group">
                        <label for="title">Entrega</label>
                        <input class="form-control" id="entrega" name="input_entrega" aria-describedby="emailHelp">
                      
                    </div>
                    
                    <button type="submit" class="botonEstilo btnColor1">Agregar</button>
                </form>

        
{/if}

                
</div>

{include file="footer.tpl"}