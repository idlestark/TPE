{include 'templates/header.tpl'}

<h3 class="text-center">Editar impresión</h3>
<form class="row g-3" action="editImpression/{$impressions->id}" method="POST">
  <div class="col-md-3">
    <input type="text" class="form-control" name="name" value="{$impressions->nombre}" required>
  </div>

  <div class="col-md-3">
    <input type="text" class="form-control" name="description" value="{$impressions->descripcion}" required>
  </div>

  <div class="col-md-3">
    <input type="text" class="form-control" name="dimensions" value="{$impressions->dimensiones}" required>
  </div>

  <div class="col-md-3">
    <input type="text" class="form-control" name="price" value="{$impressions->precio}" required>
  </div>
<div class="col-md-3">
<br>
<select id="inputAutor" name="inputCat" class="form-select">
<option selected  value="vacio">Elegir Categoría</option>
{foreach from=$CatsId item=$cats}
    <option value="{$cats->id}">
    {$cats->nombre_tipo}
    </option>
  {/foreach}
</select>

</div>

  <div class="col-12">
    <br>
    <button type="submit" class="btn btn-primary">Editar</button>
  </div>
</form>