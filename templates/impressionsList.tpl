{include 'templates/header.tpl'}

<ul>
    {foreach from=$impressions item=$impression}
           
    <li class='col' ><a href='impresiones/{$impression->id}'> {$impression->nombre}</a></li>
     <a href='removeImpression/{$impression->id}' type='button' class='btn btn-danger'>Borrar</a>    
    {/foreach}
</ul>

{include 'templates/AddImpression.tpl'}
