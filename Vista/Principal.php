			<?php
			//envia sql y recive los candidatos de la base de datos
				include('../modelo/funciones.php');
				$sql ="select candidato from datos_encuesta_candidato";
				$res =consulta($sql);
				$max =mysqli_num_rows($res);
	
				for($i = 0; $i < $max; $i++)
				{
					$sand[$i] = mysqli_fetch_array($res);	
				}
			?>
<html>
<head>

<h2>
FORMULARIO DE VOTACION:
</h2>
<br>

	<style type="text/css">

	

	</style>
	
<script>
// validaciones de javascript
function val_nombre()
{
	x=document.form_ingreso.nombre_apellido.value;

	if(x=="")
	{
		window.alert("Antes de enviar debe completar el campo nombre y apellido")
		return false;
		return;
	}

	
	return true;
}

function val_Alias()
{
if(document.form_ingreso.Alias.value.length<=5)
{
		window.alert("Alias tiene que tener MAS de 5 digitos")
		return false;
		return;		
}

if ( /\d/.test($("#campo_alias").val().trim()) ) {

	  
		x=document.form_ingreso.Alias.value;
	if(isNaN(x))
	{
		return true;
		
	}
    else {
		
	alert("debe contener al menos una letra el campo alias");	
	return false;
		return;		
		
	}	
	  
	  
  }
  else
  {
	alert("debe contener al menos un numero el campo alias"); 
    return false;
		return;			
	  
  }
  
}
  
  function val_correo()
{  
        x=document.form_ingreso.Email.value;
		
iChars = "@"; 
iCharsdos = "."; 
aux=0;
auxdos=0;
for (var i = 0; i < document.form_ingreso.Email.value.length; i++) 
{ 
if (iChars.indexOf(document.form_ingreso.Email.value.charAt(i)) != -1) 
{ 
	aux++;	
} 
if (iCharsdos.indexOf(document.form_ingreso.Email.value.charAt(i)) != -1) 
{ 
	auxdos++;	
}
}
if(aux>=1&&auxdos>=1)
{
        return true;
		
}
else{
	    window.alert("Ingrese un correo valido")
		
		return false;
		return;
	
} 
		
		
}
  
 function val_rut()
{  
var sw=true;

var x=document.form_ingreso.RUT.value
var cadena=x.split("-");

x=cadena[0]+"";
y=cadena[1]+"";
b=parseInt(x/10);
b=parseInt((x-(b*10))*2);
c=parseInt(x/100);
c=parseInt((x-(c*100))/10)*3;
d=parseInt(x/1000);
d=parseInt((x-(d*1000))/100)*4;
e=parseInt(x/10000);
e=parseInt((x-(e*10000))/1000)*5;
f=parseInt(x/100000);
f=parseInt((x-(f*100000))/10000)*6;
g=parseInt(x/1000000);
g=parseInt((x-(g*1000000))/100000)*7;
h=parseInt(x/10000000);
h=parseInt((x-(h*10000000))/1000000)*2;
a=parseInt(x/100000000);
a=parseInt((x-(a*100000000))/10000000)*3;
k=a+b+c+d+e+f+g+h;
dig=11-k%11;

if(y=='k')
{
	y=10;
}
if(dig==11)
{
	dig=0;
}
var iChars = "-";
var aux=0; 
for (var i = 0; i < document.form_ingreso.RUT.value.length; i++) 
{ 
if (iChars.indexOf(document.form_ingreso.RUT.value.charAt(i)) != -1) 
{ 
aux++;
}
}
if(document.form_ingreso.RUT.value.length==aux)
{
		window.alert("Tiene que ingresar un guion(-) en el rut para poder identificar el digito valificador del rut")
		return false;
		return;		
}

iChars = "!@#$%^&*()+=[]\\\';,./{}|\":<>?"; 
aux=0;
for (var i = 0; i < document.form_ingreso.RUT.value.length; i++) 
{ 
if (iChars.indexOf(document.form_ingreso.RUT.value.charAt(i)) != -1) 
{ 
	aux++;	
} 
}
if(aux>=1||isNaN(x)||isNaN(y))
{
		window.alert("Ingrese solo numeros en el rut y un guion(-)")
		return false;
		return;
} 
if(x=="")
{
		window.alert("Complete el campo del rut")
		return false;
		return;
}
if(y=="")
{
		window.alert("Complete el dígito verificador con un guion(-) como separador")
		return false;
		return;
}
if(dig!=y)
{
		window.alert("rut incorrecto")
		return false;
		return;
		
}
	return true;
}

function seleccione()
{
	var i = 0;
	if(document.getElementById('web1').checked)
	{
		i++;
		
	}
	if(document.getElementById('tv1').checked)
	{
		i++;
		
	}
	if(document.getElementById('redes1').checked)
	{
		i++;
		
	}
	if(document.getElementById('amigo1').checked)
	{
		i++;
		
	}
	if(i<2)
	{
		window.alert("debe seleccionar al menos dos casillas del campo de como se entero de nosotros");
		return false;
		return;
	}
	
	return true;
}

function seleccioneSelect()
{
	if(document.form_ingreso.regiones.value==0)
	{
		window.alert("Seleccione la casilla de region");
		return false;
		return;
	}
	if(document.form_ingreso.comuna.value==0)
	{
		window.alert("Seleccione la casilla comuna");
		return false;
		return;
	}
	if(document.form_ingreso.candidato.value==0)
	{
		window.alert("Seleccione la casilla candidato");
		return false;
		return;
	}
	
	return true;
}

function valida()
{
	if(!val_nombre())
	{
	return false;
	return;
	}
	if(!val_Alias())
	{
	return false;
	return;
	}
	if(!val_rut())
	{
	return false;
	return;
	}
	if(!val_correo())
	{
	return false;
	return;
	}
	if(!seleccioneSelect())
	{
	return false;
	return;
	}
	if(!seleccione())
	{
	return false;
	return;
	}
	
	return true;
}


</script>
	
	
	<!--Incluir la librería jQuery-->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
 
<!--Llamada al evento Change del selector regiones-->
<script language="javascript">
$(document).ready(function(){
    $("#regiones").on('change', function () {
        $("#regiones option:selected").each(function () {
            regionelegido=$(this).val();
            $.post("buscarcomunas.php", { regionelegido: regionelegido }, function(data){
                $("#comuna").html(data);
            });         
        });
   });
});
</script>
	

</head>

<body onload="llenarSand();">

<?php

// Envia sql y recive las regiones de la base de datos

$consu="select region from datos_encuesta_reg";

$resul=consulta($consu);
$num=mysqli_num_rows($resul);  // obtenemos cuántas filas
if($num!=0){
for($i=0;$i<$num;$i++)
 { $mat[$i]=mysqli_fetch_array($resul); } //creamos matriz
}
?>


     <div id="marco_ingreso">
     <form name ="form_ingreso"  onSubmit="return valida();" action="ingresar.php" method="post">
	 <div id="marco_ingreso_interior" style="border-style: inset; width: 700px; height:220px;" >

	 <div id="marco_lbl" style="display: inline-block; width: 300px; height:180px;">
	
	<label id="lbl_nombre_apellido" style=" display: block; width: 200px; height:3px;" > Nombre y Apellido </label>	</br>
	<label id="lbl_Alias" style=" display: block; width: 200px; height:3px;"> Alias </label>   </br>
	<label id="lbl_rut" style=" display: block; width: 200px; height:3px;"> RUT </label>   </br>
	<label id="lbl_email" style=" display: block; width: 200px; height:3px;"> Email </label>   </br>
	<label id="lbl_region" style=" display: block; width: 200px; height:3px;"> Region </label>   </br>
	<label id="lbl_comuna" style=" display: block; width: 200px; height:3px;"> Comuna </label>   </br>
	<label id="lbl_candidato" style=" width: 200px; height:3px;"> Candidato </label>  <br> 
	<label id="lbl_medio_encontro" style="  width: 200px; height:3px;" > Como se entero de Nosotros </label> 
	</div>
	
	<div id="marco_text" style="display: inline-block; width: 300px; height:180px;">
	
	<input id="campo_nombre_apellido" type="text" name="nombre_apellido" value="" size="30" style="margin-down: 50px;" /></br>
	<input id="campo_alias" type="text" name="Alias" value="" size="30" /></br>
	<input id="campo_rut" type="text" name="RUT" value="" size="30" /></br>
	<input id="campo_email" type="text" name="Email" value="" size="30" /></br>
	
	<select id="regiones" name="regiones" style="width:236px" >
		<option value="0" >  Seleccione
		</option>
		
		
    
	<?php 
	
        $i=1;
        foreach ($mat as $values)
		{
		$dato = $values;
		echo '<option value="';
		
		
		echo $i;
		$i=$i+1;
		echo '" > ';
		
		
        echo  $dato['region'];
		}
		echo '</option>';
		?>
		
	</select>
	<br>
	<select id="comuna" name="comuna" style="width:236px" >
		<option value="0" > Seleccione </option>


		
    </select>
	<br>
	<select id="candidato" name="candidato" style="width:236px" >
		<option value="0" > Seleccione </option> 
		
		<?php 
	
     
        foreach ($sand as $values)
		{
		$dato = $values;
		echo '<option value="'.$dato['candidato'].'" > ';
		
        echo  $dato['candidato'];
		}
		echo '</option>';
		?>	
		
    </select>
	<br>
	<input type="checkbox" id="web1" name="Web" value="Web">
	<label for="web1"> Web </label>
	<input type="checkbox" id="tv1" name="TV" value="TV">
	<label for="tv1"> TV </label>
	<input type="checkbox" id="redes1" name="Redes" value="Redes">
	<label for="redes1"> Redes Sociales </label>
	<input type="checkbox" id="amigo1" name="Amigo" value="Amigo">
	<label for="amigo1"> Amigo </label>
	
	</div>

	
	</br>
	
	<input type="submit" name="votar"  value="Votar" />
	<br>
	</div>
		</form>
		
		</div>
	

</body>
</html>

