{include file="header.tpl"}
{include file="encabezadoSecretaria.tpl"}
<h1>Cartoneros activos</h1>
<div class="container">
    <div class="row justify-content-start">

        <div style="width: 80%; float:left">
            <table class="table table-striped">
                <thead class="bg-success">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Dni</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Vehiculo</th>
                        <th scope="col">Peso de Materiales</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$cartoneros item= cartonero}
                        <tr>
                            <td class="table-success">{$cartonero->nombre}</td>
                            <td class="table-success">{$cartonero->dni}</td>
                            <td class="table-success">{$cartonero->direccion}</td>
                            <td class="table-success">{$cartonero->vehiculo}</td>
                            <td class="table-success">{$cartonero->peso_materiales} kg</td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
        <div style="width: 20%; float:right">
            <p><button type="button" class="btn btn-primary">Agregar Cartonero</button></p>
            <p><button type="button" class="btn btn-primary">Editar Cartonero</button></p>
            <p><button type="button" class="btn btn-primary">Borrar Cartonero</button></p>

        </div>
    </div>
    <form action="insertPeso" method="post">
        <label for="opciones">Cartonero
            <select class="form-select" id="opciones" name="input_cartonero">
            {foreach from=$cartoneros item= cartonero}
                <option value={$cartonero->dni}>{$cartonero->nombre}</option>           
            {/foreach}
            </select>
        </label>
        <input type="number" name="input_peso" placeholder="Peso de la balanza">
        <button type="submit" class="botonEstilo btnColor1">Enviar</button>
    </form>
</div>

{include file="footer.tpl"}