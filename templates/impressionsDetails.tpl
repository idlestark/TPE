{include 'templates/header.tpl'}

<ul>
{foreach from=$types item=$type}
            
    <li class='col' >{$type->nombre}<br></a>{$type->descripcion}</li>
    <br>
    <a href="{BASE_URL}"> Volver al Inicio </a>
    
{/foreach}
 </ul>