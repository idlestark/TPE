{include 'templates/header.tpl'}

<ul>
{foreach from=$types item=$type}
            
    <li class='col' >{$type->nombre}<br></a>{$type->descripcion}<br>Precio: {$type->precio}</li>
    <button type="submit" class="btn btn-primary mt-3">Comprar</button>
    <br>
    <a href="{BASE_URL}"> Volver al Inicio </a>
    
{/foreach}
 </ul>