{include file="header.tpl"}

<h1>{$titulo}</h1>
<div class="container">
    <div class="col-9">
        <table class="table table-striped">
            <thead class="bg-success">
                <tr>
                    <th scope="col">Materiales que se aceptan</th>
                    <th scope="col">Formas de entrega</th>
                </tr>
            </thead>
            <tbody>
                 {foreach from=$materiales item= materialito}
                    <tr>
                        <td class="table-success">{$materialito->tipo}</td>
                        <td class="table-success">{$materialito->entrega}</td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
        {if $admin}
            <form>

                <div class="row justify-content-start">
                    <div class="col-4">
                        <input type="text" class="form-control form-control-lg" id="material" placeholder="Material">
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control form-control-lg" id="entrega" placeholder="Entrega">
                    </div>
                </div>
           
            </form>
            <div class="row justify-content-start">
                <div class="col-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">Insertar Nuevo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">Eliminar</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">Editar</label>
                    </div>
                </div>
                <div class="col-4">
                      <p><button type="button" class="btn btn-primary">Enviar</button></p>

                </div>
            </div>
{/if}

                
</div>

{include file="footer.tpl"}