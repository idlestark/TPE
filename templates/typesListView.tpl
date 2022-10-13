{include 'templates/header.tpl'}

<ul>
{foreach from=$ListTypes item=$ListType}
<li class='col'> <a href='cats/{$ListType->id}'>{$ListType->nombre_tipo}<br></a></li>
{if isset($smarty.session.USER_ID)}
    <a href='removeCategory/{$ListType->id}' type='button' class='btn btn-danger'>Borrar</a> 
    <a href='showFormEditCat/{$ListType->id}' type='button' class='btn btn-secondary'>Editar</a>
    {/if}
{/foreach}



</ul> 
{if isset($smarty.session.USER_ID)}
{include 'templates/AddCategories.tpl'}
{/if}