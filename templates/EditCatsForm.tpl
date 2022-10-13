{include 'templates/header.tpl'}

<h3 class="text-center">Editar categoría</h3>
<form class="column g-3" action="editCategory/{$types->id}" method="POST">
  <div class="col-md-4">
<h5>Nombre</h5>
<input type="text" class="form-control" required name="name" value="{$types->nombre_tipo}">
  </div>
<br>
  <div class="col-md-4">
  <h5>Descripción</h5>
    <input type="text" class="form-control" required name="description" value="{$types->descripcion}">
  </div>
  <div class="col-12">
  <br>
    <button type="submit" class="btn btn-primary">Editar</button>
  </div>
</form>