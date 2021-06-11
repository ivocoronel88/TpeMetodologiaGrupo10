{include file="header.tpl"}
<h1>{$titulo}</h1>
<div class="container">

    <form action="insertSolicitud" method="post">
          <div class="form-group row">
               <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nombre</label>
               <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="nombre" name="input_nombre" placeholder="Nombre">
               </div>
          </div>
          <div class="form-group row">
               <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Apellido</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control form-control-lg" id="apellido" name="input_apellido" placeholder="Apellido">
               </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Dirección</label>
            <div class="col-sm-10">
                 <input type="text" class="form-control form-control-lg" id="direccion" name="input_direccion" placeholder="Direccion">
             </div>
          </div>
          <div class="form-group row">
               <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Teléfono</label>
               <div class="col-sm-10">
                    <input type="number" class="form-control form-control-lg" id="telefono" name="input_telefono" placeholder="Telefono">
               </div>
          </div>
          <div>
               <label for="opciones">Franja horaria
                    <select class="form-select" id="opciones" name="input_franja">
                         <option value="primerHorario">9 a 12hs</option>
                         <option value="segundoHorario">13 a 17hs</option>
                    </select>
               </label>
          </div>
         
          <button type="submit" class="botonEstilo btnColor1">Enviar</button>
          </form>
          
          {include file="mapa.tpl"}
</div>
{include file="footer.tpl"}

