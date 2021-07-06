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
                <th scope="col">Editar y Borrar</th>
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
                            <button type="button" class="btn btn-warning"><a class="text-white text-decoration-none" href="EditarCartonero/{$cartonero->id}">Menu</a></button>
                            <button type="button" class="btn btn-danger"><a class="text-white text-decoration-none" href="DeleteCartonero/{$cartonero->id}">Borrar</a></button>
                            </td>
                        </tr>
                    {/foreach}
        </tbody>
    </table>


    <div class="formsito">
        <button type="button" class="botonEstilo btnlog" data-toggle="modal" data-target="#myModal3">Agregar
            cartonero</button>
    </div>
    <div class="formsoli">
        <form action="insertPeso" method="post">
            <label for="opciones">
                <p class="colorgreen">Cartonero</p>
                <select id="opciones" name="input_cartonero">
                    {foreach from=$cartoneros item= cartonero}
                        <option value={$cartonero->dni}>{$cartonero->nombre}</option>
                    {/foreach}
                </select>
            </label>
            <input type="number" name="input_peso" placeholder="Peso de la balanza">
            <button type="submit" class="botonEstilo btnlog">Enviar</button>
        </form>

    </div>

    <div class="modal" id="myModal3">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Título -->
                <div class="modal-header">
                    <h4 class="modal-title">Ingresar Nuevo Cartonero</h4>
                </div>
                <!-- Modal Cuerpo -->
                <div class="modal-body">
                    <div class="form-group">
                        <form action="InsertarCartonero" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Nombre</label>
                                <input class="form-control" id="nombre" name="input_nombre" aria-describedby="emailHelp"
                                    placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <label for="description">Dni</label>
                                <input class="form-control" id="dni" name="input_dni" placeholder="Dni">
                            </div>
                            <div class="form-group">
                                <label for="description">Direccion</label>
                                <input class="form-control" id="direcicon" name="input_direccion" placeholder="Direccion">
                            </div>
                            <div class="form-group">
                                <label for="description">Vehìculo</label>
                                <input class="form-control" id="vehiculo" name="input_vehiculo"
                                    placeholder="Vehìculo">
                            </div>
                            <!-- Modal botón Editar -->
                            <div>
                                <button type="submit" class="btn btn-info">Ingresar Cartonero</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>



</div>
{include file="footer.tpl"}