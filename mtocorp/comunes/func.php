<?php

function PintarModulo($titulo,$valor,$desc){
	$color=array ("#e6b0aa","#af7ac5","#1abc9c","#2e86c1","#cb4335","#f1948a","#f9e79f","#82e0aa","#f1c40f","#28b463","#f8c471","#f0f3f4","#95a5a6","#229954","#d7bde2","#aeb6bf","#5dade2","#aed6f1","#bb8fce","#2e86c1","#f5b041","#f6ddcc","#e5e8e8","#808b96","#616a6b","#ba4a00","#d1f2eb","#f2d7d5","#fadbd8","#ebdef0","#e8daef","#d4e6f1","#d6eaf8","#d1f2eb","#d0ece7","#d4efdf","#d5f5e3","#fcf3cf","#fdebd0","#fae5d3","#f6ddcc","#f2f3f4","#c0392b","#e74c3c","#9b59b6","#3498db","#16a085","#27ae60","#2ecc71","#f39c12","#e67e22","#d35400");
	$b= array_rand($color);

	$a='<div class="col-lg-4 col-sm-6 text-center">';
	$a.='<div class="col-lg-4" id="variables">'.$valor.'</div>';
	$a.='<div style="background:'.$color[$b].';width: 200px;margin-left: auto;margin-right: auto;height: 200px;border-radius: 8em;"></div>';
	$a.='<h3>'.$titulo.'</h3>';
	$a.='<p>'.$desc.'</p><br><b
	r>';
	$a.='</div>';

	echo $a;
}
function PintarListado($Img,$Tit,$Subt,$Creac,$Fact,$Client,$Rent,$Rep,$Cesta,$Destino){
	//$Img -> es la ruta de la imagen que vamos a mostrar
	//$Tit -> es el titulo del negocio
	//$Subt -> es el subtitulo del negocio
	//$Creac -> es el año de creacion del negocio
	//$Fact -> es la facturacion del negocio
	//$Client -> son los clientes actuales del negocio
	//$Rent -> es el % rentabilidad del negocio
	//$Rep -> es el indice de repeticion de compra en el negocio
	//$Cesta -> es la cesta media del negocio
	//$Destino -> es el boton "ver estadisticas" que nos envia a la url detalle
	
	$color=array ("#e6b0aa","#af7ac5","#1abc9c","#2e86c1","#cb4335","#f1948a","#f9e79f","#82e0aa","#f1c40f","#28b463","#f8c471","#f0f3f4","#95a5a6","#229954","#d7bde2","#aeb6bf","#5dade2","#aed6f1","#bb8fce","#2e86c1","#f5b041","#f6ddcc","#e5e8e8","#808b96","#616a6b","#ba4a00","#d1f2eb","#f2d7d5","#fadbd8","#ebdef0","#e8daef","#d4e6f1","#d6eaf8","#d1f2eb","#d0ece7","#d4efdf","#d5f5e3","#fcf3cf","#fdebd0","#fae5d3","#f6ddcc","#f2f3f4","#c0392b","#e74c3c","#9b59b6","#3498db","#16a085","#27ae60","#2ecc71","#f39c12","#e67e22","#d35400");
	$b= array_rand($color);

	$a='<div class="col-lg-4 col-sm-6 text-center">';
	$a.='<div class="col-lg-4" id="variables">'.$valor.'</div>';
	$a.='<div style="background:'.$color[$b].';width: 200px;margin-left: auto;margin-right: auto;height: 200px;border-radius: 8em;"></div>';
	$a.='<h3>'.$titulo.'</h3>';
	$a.='<p>'.$desc.'</p><br><b
	r>';
	$a.='</div>';





/*
	  <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive img-thumbnail" src="img/labiomania-logo.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Labiomanía</h3>
                <h4>Tienda de Tatuajes Labiales</h4>
                <ul class="b">
                    <li><strong>Año/Mes de Creación:</strong> xxx</li>
                    <li><strong>Facturación:</strong> xxx</li>
                    <li><strong>Clientes Actuales:</strong> xxx</li>
                    <li><strong>% Rentabilidad:</strong> xxx</li>
                    <li><strong>Índice de Repetición:</strong> xxx</li>
                    <li><strong>Cesta Media:</strong> xxx</li>                   
                </ul>
                <p> 
                </p>
                <a class="btn btn-primary" href="#">Ver Estadísticas <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>

*/




	echo $a;
}








?>