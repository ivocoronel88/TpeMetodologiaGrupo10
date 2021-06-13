{include file="header.tpl"}
{include file="encabezadoSecretaria.tpl"}
<h1 class="colorgreen">Cartoneros activos</h1>
<div class="container">
               <table class="table table-hover">
            <thead class="bg-success">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Dni</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Vehiculo</th>
                        <th scope="col">Peso de Materiales</th>
                        <th scope="col">Borrar y editar</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$cartoneros item= cartonero}
                        <tr>
                            <td class="table-success">{$cartonero->nombre}</td>
                            <td class="table-success">{$cartonero->dni}</td>
                            <td class="table-success">{$cartonero->direccion}</td>
                            <td class="table-success">{$cartonero->vehiculo}</td>
                            {if $cartonero->peso_materiales eq NULL}
                                <td class="table-success">No hay peso asignado</td>
                            {else}
                                <td class="table-success">{$cartonero->peso_materiales} kg</td>
                            {/if}
                            <td class="table-success">
                            <button type="button" class="btn btn-danger btnmm"><h3 class="btnmgm">Borrar</h3></a></button> 
                            <button type="button" class="btn btn-primary btnmm"><h3 class="btnmgm">Editar</h3></a></button>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
        
    </div>
    <div class="formsito">
    <button type="submit" class="botonEstilo btnlog">Agregar cartonero</button>
    </div>
    
    <div class="formsoli">
        <form action="insertPeso" method="post">
            <label for="opciones">
                <p class="colorgreen">Cartonero</p>
                <select  id="opciones" name="input_cartonero">
                    {foreach from=$cartoneros item= cartonero}
                        <option value={$cartonero->dni}>{$cartonero->nombre}</option>           
                    {/foreach}
                </select>
            </label>
            <input type="number" name="input_peso" placeholder="Peso de la balanza">
            <button type="submit" class="botonEstilo btnlog">Enviar</button>
        </form>
    </div>
</div>

{include file="footer.tpl"}