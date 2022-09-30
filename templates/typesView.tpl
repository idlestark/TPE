{include 'templates/header.tpl'}

<ul>{foreach $types as $type}
    <li class='col'> <a href='cats/{$type->id}'>{$type->nombre_tipo}</a><br>{$type->descripcion}</li>
    <a href="{BASE_URL}"> Volver al Inicio </a>
{/foreach}
</ul>
