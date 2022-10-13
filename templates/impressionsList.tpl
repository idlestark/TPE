{include 'templates/header.tpl'}

<ul>
    {foreach from=$impressions item=$impression}
           
    <li class='col' ><a href='impresiones/{$impression->id}'> {$impression->nombre}</a></li>
    {if isset($smarty.session.USER_ID)}
     <a href='removeImpression/{$impression->id}' type='button' class='btn btn-danger'>Borrar</a> 
     <a href='showFormEditImpressions/{$impression->id}' type='button' class='btn btn-secondary'>Editar</a>
    {/if}   
    {/foreach}
</ul>

{if isset($smarty.session.USER_ID)}
{include 'templates/AddImpression.tpl'}
{/if}