{include file="header.tpl"}

<div class="portsoli">
    <h1 class="titlemye">{$titulo}</h1>
</div>

<div class="formsoli">
    
<form>
          <div class="form-group row">
               <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg colorgreen">Nombre</label>
               <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg " id="nombre" name="input_nombre" placeholder="Nombre">
               </div>
          </div>
          <div class="form-group row">
               <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg colorgreen">Apellido</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control form-control-lg" id="apellido" name="input_apellido" placeholder="Apellido">
               </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg colorgreen">Dirección</label>
            <div class="col-sm-10">
                 <input type="text" class="form-control form-control-lg" id="direccion" name="input_direccion" placeholder="Direccion">
             </div>
          </div>
          <div class="form-group row">
               <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg colorgreen">Teléfono</label>
               <div class="col-sm-10">
                    <input type="number" class="form-control form-control-lg" id="telefono" name="input_telefono" placeholder="Telefono">
               </div>
          </div>
         <button type="submit" class="botonEstilo btnlog">Enviar</button>
    </form>
</div>

    <table class="table table-hover tabloide">
            <thead class="bg-success">
                <tr>
                    <th class="thtxt" scope="col">Postulaciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Postulacion 1</td>
                </tr>
                <tr>
                    <td>Postulacion 2</td>
                </tr>
                <tr>
                    <td>Postulacion 3</td>
                </tr>
            </tbody>
        </table>

{include file="footer.tpl"}