{include file="header.tpl"}
{include file="encabezadoSecretaria.tpl"}
<div class="container">
    <div class="col-9">
     
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
                            <button type="button" class="btn btn-warning"><a class="text-white text-decoration-none" href="EditarAlumno/{$cartonero->dni}">Menu</a></button>
                            <button type="button" class="btn btn-danger"><a class="text-white text-decoration-none" href="BorrarAlumno/{$cartonero->dni}">Borrar</a></button>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
    <div>
    <h4 class="colorgreen">Editar cartonero</h4>
</div>
      <!-- Modal Cuerpo -->
      <div class="modal-body">
      <form action="ModificarCartonero" method="POST" enctype="multipart/form-data">
          <!--REVISAR FORM ACTION-->
          <div class="form-group">
              <input type="hidden" name="cartonero_id" value="{$cartonero_s->id}">
          </div>
          <div class="form-group">
          <label for="alumno">Dni:</label>
          <input type="text" class="form-control" id="dni" name="edit_dni" value={$cartonero_s->dni}>
            </div>    
          <div class="form-group">
              <label for="alumno">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="edit_nombre" value={$cartonero_s->nombre}>
          </div>
          <div class="form-group">
              <label for="Conducta">Direccion:</label>
              <input type="text" class="form-control" id="direccion" name="edit_direccion" value={$cartonero_s->direccion}>
          </div>
          <div class="form-group">
              <label for="calificacion">Vehículo:</label>
              <input type="text" class="form-control" id="vehiculo" name="edit_vehiculo" value={$cartonero_s->vehiculo}>
          </div>
          <button type="submit" class="btn btn-warning">Editar</button>
      </form>
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