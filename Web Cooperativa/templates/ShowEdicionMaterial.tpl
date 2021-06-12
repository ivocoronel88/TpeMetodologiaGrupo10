{include file="header.tpl"}
 <div class="container">
                <form action="modificarMaterial" method="post">
                    <div class="form-group">
                        <input type="hidden" id="material_id" name="material_id" value="{$material->id}">
                    </div>
                    <div class="form-group">
                        <label for="title">Material</label>
                        <input class="form-control" id="mterial" name="input_material" value="{$material->tipo}">
                      
                    </div>
                    <div class="form-group">
                        <label for="title">Entrega</label>
                        <input class="form-control" id="entrega" name="input_entrega"  value="{$material->entrega}">
                      
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Modificar</button>
                </form>
    </div>
    

{include file="footer.tpl"}