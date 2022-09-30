{include 'templates/header.tpl'}

<ul>{foreach $types as $type}
    <li class='col'> <a href='cats/{$type->id}'>{$type->nombre_tipo}</a><br>{$type->descripcion}</li>
    <a href='cats/'> Volver a Categorías </a>
{/foreach}
</ul>
