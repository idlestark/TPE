<form id="addImpression" name="addImpression" action="addImpression" method="POST">
<div class="col-sm-7">
  <label for="exampleFormControlInput1" class="form-label">Nombre del objeto</label>
  <input name="name" type="text" class="form-control" id="name"placeholder="Maceta estilo japonés">
</div>
<br>
<div class="col-sm-7">
  <label for="exampleFormControlTextarea1" class="form-label">Descripción del objeto</label>
  <textarea name="description" class="form-control" id="description" rows="3"></textarea>
</div>
<br>
<div class="col-sm-7">
  <label for="exampleFormControlInput1" class="form-label">Dimensiones de la impresion</label>
  <input type="text" name="dimensions" class="form-control" id="dimensions" placeholder="20x20x20">
</div>
<br>
<div class="col-md-4">
<label for="inputState" class="form-label">Categoría: </label>
<select id="selectImp" name="selectImp" class="form-select">
  <option selected>Elegir...</option>
  {foreach from=$types item=$type}
    <option value={$type->id}>
    {$type->nombre_tipo}
    </option>
  {/foreach}
</select>
</div>
<br>
<div class="col-sm-7">
  <label for="exampleFormControlInput1" class="form-label">Precio</label>
  <input type="text" name="price" class="form-control" id="price" placeholder="1000$">
</div>
<br>
<input type="submit" class="btn btn-primary"></button>
</form>

