{include 'templates/header.tpl'}

<ul>{foreach $types as $type}
    <li class='col'>{$type->nombre_tipo}<br>{$type->descripcion}</li>
    <a href='cats/'> Volver a Categorías </a>
{/foreach}
</ul>
