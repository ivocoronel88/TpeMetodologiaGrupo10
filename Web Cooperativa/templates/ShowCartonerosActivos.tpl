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
                </tr>
            </thead>
            <tbody>
                 {foreach from=$cartoneros item= cartonero}
                    <tr>
                        <td class="table-success">{$cartonero->nombre}</td>
                        <td class="table-success">{$cartonero->dni}</td>
                        <td class="table-success">{$cartonero->direccion}</td>
                        <td class="table-success">{$cartonero->vehiculo}</td>
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
</div>

{include file="footer.tpl"}