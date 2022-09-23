<?php

class ImpressionsView{
    function showImpressions($impresiones){
        echo "<ul>";
        foreach($impresiones as $impresion){
            echo '<li class="impresion">' . $impresion->nombre . '</li>';
        }
        echo "</ul>";
    }
}

class TypesView{
    function showTypes($types){
        echo "<ul>";
        foreach ($types as $types){
            echo "<li class='col'> <a href='detalle/$types->id'<b>$types->nombre_tipo</a></li>";
        }
        echo "</ul>";
    }
}