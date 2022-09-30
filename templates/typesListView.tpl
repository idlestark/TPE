{include 'templates/header.tpl'}

<ul>
{foreach from=$ListTypes item=$ListType}
<li class='col'> <a href='cats/{$ListType->id}'>{$ListType->nombre_tipo}<br></a></li>    
{/foreach}
</ul> 

