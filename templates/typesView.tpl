{include 'templates/header.tpl'}

{if count($types) <= 0}
    <h4>Esta categoría no posee impresiones aún.</h4>
    <a href="cats"> Volver a Categorías </a>
    {else}
<ul>
{$types[0]->types}
{foreach $types as $type}
    <li class='col'>{$type->nombre}<br></li>
{/foreach}
<a href='cats/'> Volver a Categorías </a>
</ul>
{/if}