{include 'templates/header.tpl'}

<ul>{foreach $types as $type}
    <li class='col'>{$type->types}<br>{$type->nombre}</li>
    <a href='cats/'> Volver a Categorías </a>
{/foreach}
</ul>
