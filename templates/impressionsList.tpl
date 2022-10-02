{include 'templates/header.tpl'}


<ul>
    {foreach from=$impression item=$impressions}
           
    <li class='col' ><a href='impresiones/{$impressions->id}'> {$impressions->nombre}</a></li>
        
    {/foreach}
</ul>

{include 'templates/AddImpression.tpl'}
