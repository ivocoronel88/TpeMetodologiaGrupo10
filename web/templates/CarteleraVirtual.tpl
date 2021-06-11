{include file="header.tpl"}

<h1>{$titulo}</h1>
<div class="container">
    
<form>
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nombre</label>
            <div class="col-sm-10">
                 <input type="text" class="form-control form-control-lg" id="nombre" placeholder="Nombre">
             </div>
        </div>
         <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
            <div class="col-sm-10">
                 <input type="email" class="form-control form-control-lg" id="email" placeholder="Email">
             </div>
        </div>
         <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Dirección</label>
            <div class="col-sm-10">
                 <input type="text" class="form-control form-control-lg" id="direccion" placeholder="Direccion">
             </div>
        </div>
         <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Teléfono</label>
            <div class="col-sm-10">
                 <input type="number" class="form-control form-control-lg" id="telefono" placeholder="Telefono">
             </div>
        </div>
         <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Espacio Disponible</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="EspacioDisponible" placeholder="Pon aquello que quieres que tengamos en cuenta!">
            </div>
        </div>
         <p><button type="button" class="btn btn-primary">Enviar</button></p>
    </form>
    <table class="table table-hover">
            <thead class="bg-success">
                <tr>
                    <th scope="col">Postulaciones</th>
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
</div>
{include file="footer.tpl"}