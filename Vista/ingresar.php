Cargando datos...

<?php

include('../modelo/funciones.php');

// se reciben los datos de Form form_ingreso y se adaptan al insert y se evalua si existe un rut del q se solicita inscribir

$web='';
$tv='';
$redes='';
$Amigo='';

if(isset($_POST['Web']))
$web='web';

if(isset($_POST['TV']))
$tv='TV';

if(isset($_POST['Redes']))
$redes='Redes Sociales';

if(isset($_POST['Amigo']))
$Amigo='Amigo';


                $sqlrut = "select rut from persona where rut='".$_POST['RUT']."';";
				$res=consulta($sqlrut);
				
				$num=mysqli_num_rows($res);  // obtenemos cuántas filas de rut hay en la base de datos
				if($num!=0){
				
				?>
				<script>
				window.alert("Ya existe un registro con ese rut, por favor tratar con otro rut");
				</script>
				<?php
				
				}	  
			    else{
				$sql ="insert into persona(nombre_apellido, alias, rut, email, region, comuna, candidato, como_entero) values('".$_POST['nombre_apellido']."','".$_POST['Alias']."','".$_POST['RUT']."','".$_POST['Email']."', (select region as reg from datos_encuesta_reg where id_region=".$_POST['regiones']."),(select comuna as comu from datos_encuesta_comuna where id_comuna_reg=".$_POST['regiones']." and id_comuna=(".$_POST['comuna']." - 1 + (select id_comuna from datos_encuesta_comuna where id_comuna_reg=".$_POST['regiones']." order by id_comuna asc limit 1 ))),'".$_POST['candidato']."','".$web." ".$tv." ".$redes." ".$Amigo."');";
				ingreso($sql);	
				}
                
					
					
				
				
				
				
              
 ?>
 
 <META HTTP-EQUIV="REFRESH" CONTENT="1;URL=Principal.php">