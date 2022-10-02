{include 'templates/header.tpl'}

<ul>
{foreach from=$ListTypes item=$ListType}
<li class='col'> <a href='cats/{$ListType->id}'>{$ListType->nombre_tipo}<br></a></li>
<a href='removeCategory/{$ListType->id}' type='button' class='btn btn-danger'>Borrar</a>    
{/foreach}
</ul> 

{include 'templates/AddCategories.tpl'}
