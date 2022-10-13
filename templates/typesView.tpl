{include 'templates/header.tpl'}

<ul>
{$types[0]->types}
{foreach $types as $type}
    <li class='col'>{$type->nombre}<br></li>
{/foreach}
<a href='cats/'> Volver a Categorías </a>
</ul>
