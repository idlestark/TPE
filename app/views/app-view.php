<?php
    
class ImpressionsView{
    function showImpressions($impresiones){
        echo "<ul>";
        foreach($impresiones as $impresion){
            echo "<li class='col'> <a href='impresiones/$impresion->id'<b>$impresion->nombre</a></b>";
        }
        echo "</ul>";
    }
}

class TypesView{
    function showTypes($types){
        echo "<ul>";
        foreach ($types as $tipo){
            echo "<li class='col'> <a href='cats/$tipo->id'<br>$tipo->nombre_tipo<br></a>$tipo->descripcion<a/></li>";
        }
        echo "</ul>";
    }
}

class TypeListView{
    function ListTypes($types){
        echo "<ul>";
        foreach ($types as $tipo){
            echo "<li class='col'> <a href='cats/$tipo->id'<br>$tipo->nombre_tipo<br></a></li>";
        }
        echo "</ul>";   
    }
}

class AboutView{
    function ShowAbout(){
        echo "<p>Somos una empresa start-up fundada por padre e hijo dedicados a la impresión 3D, intentando brindar soluciones prácticas y baratas a nuestros clientes.</p>";
    }
}

class ImpressionD{
    function ImpressionDetails($types){
        echo "<ul>";
        foreach ($types as $tipo){
            echo "<li class='col'> <a href='cats/$tipo->id'<br>$tipo->nombre<br></a>$tipo->descripcion</li>";
        }
        echo "</ul>"; 
    }
}