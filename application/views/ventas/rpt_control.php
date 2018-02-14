<!DOCTYPE html>
<html>
<head>
    <title><?php echo titulo;?></title> 
    <link rel="stylesheet" href="<?php echo css;?>estilos.css" type="text/css">
    <link rel="stylesheet" href="<?php echo css;?>nav.css" type="text/css">
    <link rel="stylesheet" href="<?php echo css;?>theme.css" type="text/css">
    <link rel="stylesheet" href="<?php echo css;?>calendario/calendar-win2k-2.css" type="text/css" media="all" title="win2k-cold-1"/>	    
    <link rel="stylesheet" href="<?php echo css;?>estilos.css" type="text/css">    
    <script type="text/javascript" src="<?php echo js;?>constants.js"></script>
    <script type="text/javascript" src="<?php echo js;?>calendario/calendar.js"></script>
    <script type="text/javascript" src="<?php echo js;?>calendario/calendar-es.js"></script>
    <script type="text/javascript" src="<?php echo js;?>calendario/calendar-setup.js"></script>
    <script type="text/javascript" src="<?php echo js;?>jquery.js"></script>
    <script type="text/javascript" src="<?php echo js;?>ventas/presupuesto.js"></script>
    <script type="text/javascript" src="<?php echo js;?>ventas/partida.js"></script>
     <script type="text/javascript" src="<?php echo js;?>contabilidad/costos.js"></script>
    <style>
        .tabla_cabecera tr{cursor:pointer;}
    </style>    
    <link rel="stylesheet" href="calendar-win2k-2.css" type="text/css" media="all" title="win2k-cold-1"/>
</head>    
<body>
    <div id="container">
        <?php echo validation_errors("<div class='error'>",'</div>');?>  
        <div class="header">REPORTE DE CONTROL DE PRESUPUESTOS</div>
        <div class="case_top">
           <form id="frmBusqueda" method="post">
                <table width="100%" cellspacing="0" cellpadding="3" border="0" >
                    <tbody>
                        <tr>
                            <td align="left" width="10%">TIPO OT:</td>     
                            <td align="left"><?php echo $seltipot;?></td>   
                            <td align="left" width="10%">TIPO PRODUCTO:</td>     
                            <td align="left"><?php echo $selproducto;?>&nbsp;</td>                   
                        </tr>   
                        <tr>
                            <td align="left" width="10%">PROYECTO:</td>     
                            <td align="left"><?php echo $selproyecto;?></td>   
                            <td align="left" width="10%">ESTADO:</td>     
                            <td align="left"><?php echo $selestado;?>
                                MONEDA:<?php echo $selmoneda;?>
                            </td>                   
                        </tr> 
                        <tr>
                            <td align="left" width="10%"><b>Cantidad: <?php echo $j."<br>";?></b></td>  
                            <td align="left"></td>  
                            <td align="left" width="10%"></td>
                            <td align="left"></td>  
                        </tr> 
                    </tbody>
                </table>
               <?php echo $oculto;?>
            </form> 
        </div>
	<div class="case_botones">
            <ul class="lista_botones"><li id="salir" class="rpt_control">Salir</li></ul>            
            <ul class="lista_botones"><li id="excel" class="rpt_control">Ver Excel</li></ul>
	</div> 
        <div id="idcontenido" style = "display: table; width: 100%;border:0px solid #000;height:565px;">
           
            <table border='1' style='width:100%;'>
                <tr align='center'>

                    <td>NRO</td>
                    <td>NOMBRE</td>		
                    <td>PROYECTO</td>	
                    <td>FECHA<br>INICIO</td>
                    <td>FECHA<br>TERMINO</td>
                    <td>PRESUPUESTO</td>
                    <td>MODIFICADO</td>
                    <td>EJECUCION</td>
                    <td>MARGEN<br>PRESUPUESTADO</td>     
                </tr>
                <?php 
                if($fila!=''){
                    echo $fila;    
                }
                else{
                    echo "<td colspan='9'>NO EXISTEN REGISTROS.</td>";
                }
                ?>
            </table>              
        </div>      
    </div>
</body>
</html>