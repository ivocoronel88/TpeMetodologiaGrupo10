{include file="header.tpl"}
{include file="encabezadoSecretaria.tpl"}
<h1>Domicilios</h1>
<div class="container">
        <table class="table table-striped">
            <thead class="bg-success">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Franja horaria</th>

                </tr>
            </thead>
            <tbody>
                 {foreach from=$domicilios item= domicilio}
                    <tr>
                        <td class="table-success">{$domicilio->nombre}</td>
                        <td class="table-success">{$domicilio->apellido}</td>
                        <td class="table-success">{$domicilio->direccion}</td>
                        <td class="table-success">{$domicilio->telefono}</td>
                        <td class="table-success">{$domicilio->franja}</td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
                
</div>

{include file="footer.tpl"}