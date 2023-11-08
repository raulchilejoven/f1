<?php
include('../modelo/funciones.php');

// por cada select seleccionado se consulta a la base de datos y trae la comunas correspondiente de la region elegida
//cada if del POST con la region elegida solo extrae los datos y los deja con formato de un select con sus correspondientes options para enviarlo al select de comunas a traves de javascript

$html = "";
if ($_POST["regionelegido"]==0) {
	
	 $html = '
    <option value="0">Seleccione</option>';
	
	
}

if ($_POST["regionelegido"]==1) {
        $consu="select comuna from datos_encuesta_comuna where id_comuna_reg=1";

$resul=consulta($consu);
$num=mysqli_num_rows($resul);  
if($num!=0){
for($i=0;$i<$num;$i++)
 { $mat[$i]=mysqli_fetch_array($resul); }
}

$iaux=0;
$htmldato;
		
foreach ($mat as $values)
		{
		$dato = $values;
		
		
		
		$iaux=$iaux+1;
		


    $htmldato= '<option value="'.$iaux.'">'.$dato['comuna'].'</option>   ';
    $htmldato;
	$htmlaux=$htmlaux.$htmldato;
}

	$html= $htmlaux;
	
}
if ($_POST["regionelegido"]==2) {
        $consu="select comuna from datos_encuesta_comuna where id_comuna_reg=2";

$resul=consulta($consu);
$num=mysqli_num_rows($resul);  
if($num!=0){
for($i=0;$i<$num;$i++)
 { $mat[$i]=mysqli_fetch_array($resul); }
}

$iaux=0;
$htmldato;
		
foreach ($mat as $values)
		{
		$dato = $values;
		
		
		
		$iaux=$iaux+1;
		


    $htmldato= '<option value="'.$iaux.'">'.$dato['comuna'].'</option>   ';
    $htmldato;
	$htmlaux=$htmlaux.$htmldato;
}

	$html= $htmlaux;
}
if ($_POST["regionelegido"]==3) {
        $consu="select comuna from datos_encuesta_comuna where id_comuna_reg=3";

$resul=consulta($consu);
$num=mysqli_num_rows($resul);  
if($num!=0){
for($i=0;$i<$num;$i++)
 { $mat[$i]=mysqli_fetch_array($resul); }
}

$iaux=0;
$htmldato;
		
foreach ($mat as $values)
		{
		$dato = $values;
		
		
		
		$iaux=$iaux+1;
		


    $htmldato= '<option value="'.$iaux.'">'.$dato['comuna'].'</option>   ';
    $htmldato;
	$htmlaux=$htmlaux.$htmldato;
}

	$html= $htmlaux;
}
if ($_POST["regionelegido"]==4) {
        $consu="select comuna from datos_encuesta_comuna where id_comuna_reg=4";

$resul=consulta($consu);
$num=mysqli_num_rows($resul);  
if($num!=0){
for($i=0;$i<$num;$i++)
 { $mat[$i]=mysqli_fetch_array($resul); }
}

$iaux=0;
$htmldato;
		
foreach ($mat as $values)
		{
		$dato = $values;
		
		
		
		$iaux=$iaux+1;
		


    $htmldato= '<option value="'.$iaux.'">'.$dato['comuna'].'</option>   ';
    $htmldato;
	$htmlaux=$htmlaux.$htmldato;
}

	$html= $htmlaux;
}
if ($_POST["regionelegido"]==5) {
        
		$consu="select comuna from datos_encuesta_comuna where id_comuna_reg=5";

$resul=consulta($consu);
$num=mysqli_num_rows($resul);  
if($num!=0){
for($i=0;$i<$num;$i++)
 { $mat[$i]=mysqli_fetch_array($resul); }
}

$iaux=0;
$htmldato;
		
foreach ($mat as $values)
		{
		$dato = $values;
		
		
		
		$iaux=$iaux+1;
		


    $htmldato= '<option value="'.$iaux.'">'.$dato['comuna'].'</option>   ';
    $htmldato;
	$htmlaux=$htmlaux.$htmldato;
}

	$html= $htmlaux;
}
if ($_POST["regionelegido"]==6) {    
$consu="select comuna from datos_encuesta_comuna where id_comuna_reg=6";

$resul=consulta($consu);
$num=mysqli_num_rows($resul);  
if($num!=0){
for($i=0;$i<$num;$i++)
 { $mat[$i]=mysqli_fetch_array($resul); }
}

$iaux=0;
$htmldato;
		
foreach ($mat as $values)
		{
		$dato = $values;
		
		
		
		$iaux=$iaux+1;
		


    $htmldato= '<option value="'.$iaux.'">'.$dato['comuna'].'</option>   ';
    $htmldato;
	$htmlaux=$htmlaux.$htmldato;
}

	$html= $htmlaux;
}
if ($_POST["regionelegido"]==7) {
       $consu="select comuna from datos_encuesta_comuna where id_comuna_reg=7";

$resul=consulta($consu);
$num=mysqli_num_rows($resul);  
if($num!=0){
for($i=0;$i<$num;$i++)
 { $mat[$i]=mysqli_fetch_array($resul); }
}

$iaux=0;
$htmldato;
		
foreach ($mat as $values)
		{
		$dato = $values;
		
		
		
		$iaux=$iaux+1;
		


    $htmldato= '<option value="'.$iaux.'">'.$dato['comuna'].'</option>   ';
    $htmldato;
	$htmlaux=$htmlaux.$htmldato;
}

	$html= $htmlaux;
}
if ($_POST["regionelegido"]==8) {
    $consu="select comuna from datos_encuesta_comuna where id_comuna_reg=8";

$resul=consulta($consu);
$num=mysqli_num_rows($resul);  
if($num!=0){
for($i=0;$i<$num;$i++)
 { $mat[$i]=mysqli_fetch_array($resul); }
}

$iaux=0;
$htmldato;
		
foreach ($mat as $values)
		{
		$dato = $values;
		
		
		
		$iaux=$iaux+1;
		


    $htmldato= '<option value="'.$iaux.'">'.$dato['comuna'].'</option>   ';
    $htmldato;
	$htmlaux=$htmlaux.$htmldato;
}

	$html= $htmlaux;
}
if ($_POST["regionelegido"]==9) {
    $consu="select comuna from datos_encuesta_comuna where id_comuna_reg=9";

$resul=consulta($consu);
$num=mysqli_num_rows($resul);  
if($num!=0){
for($i=0;$i<$num;$i++)
 { $mat[$i]=mysqli_fetch_array($resul); }
}

$iaux=0;
$htmldato;
		
foreach ($mat as $values)
		{
		$dato = $values;
		
		
		
		$iaux=$iaux+1;
		


    $htmldato= '<option value="'.$iaux.'">'.$dato['comuna'].'</option>   ';
    $htmldato;
	$htmlaux=$htmlaux.$htmldato;
}

	$html= $htmlaux; 
}




	

if ($_POST["regionelegido"]==10) {
	
	$consu="select comuna from datos_encuesta_comuna where id_comuna_reg=10";

$resul=consulta($consu);
$num=mysqli_num_rows($resul);  
if($num!=0){
for($i=0;$i<$num;$i++)
 { $mat[$i]=mysqli_fetch_array($resul); }
}

$iaux=0;
$htmldato;
		
foreach ($mat as $values)
		{
		$dato = $values;
		
		
		
		$iaux=$iaux+1;
		


    $htmldato= '<option value="'.$iaux.'">'.$dato['comuna'].'</option>   ';
    $htmldato;
	$htmlaux=$htmlaux.$htmldato;
}

	$html= $htmlaux;
}
if ($_POST["regionelegido"]==11) {
    $consu="select comuna from datos_encuesta_comuna where id_comuna_reg=11";

$resul=consulta($consu);
$num=mysqli_num_rows($resul);  
if($num!=0){
for($i=0;$i<$num;$i++)
 { $mat[$i]=mysqli_fetch_array($resul); }
}

$iaux=0;
$htmldato;
		
foreach ($mat as $values)
		{
		$dato = $values;
		
		
		
		$iaux=$iaux+1;
		


    $htmldato= '<option value="'.$iaux.'">'.$dato['comuna'].'</option>   ';
    $htmldato;
	$htmlaux=$htmlaux.$htmldato;
}

	$html= $htmlaux;
}
if ($_POST["regionelegido"]==12) {
    $consu="select comuna from datos_encuesta_comuna where id_comuna_reg=12";

$resul=consulta($consu);
$num=mysqli_num_rows($resul);  
if($num!=0){
for($i=0;$i<$num;$i++)
 { $mat[$i]=mysqli_fetch_array($resul); }
}

$iaux=0;
$htmldato;
		
foreach ($mat as $values)
		{
		$dato = $values;
		
		
		
		$iaux=$iaux+1;
		


    $htmldato= '<option value="'.$iaux.'">'.$dato['comuna'].'</option>   ';
    $htmldato;
	$htmlaux=$htmlaux.$htmldato;
}

	$html= $htmlaux;
}
if ($_POST["regionelegido"]==13) {
      $consu="select comuna from datos_encuesta_comuna where id_comuna_reg=13";

$resul=consulta($consu);
$num=mysqli_num_rows($resul);  
if($num!=0){
for($i=0;$i<$num;$i++)
 { $mat[$i]=mysqli_fetch_array($resul); }
}

$iaux=0;
$htmldato;
		
foreach ($mat as $values)
		{
		$dato = $values;
		
		
		
		$iaux=$iaux+1;
		


    $htmldato= '<option value="'.$iaux.'">'.$dato['comuna'].'</option>   ';
    $htmldato;
	$htmlaux=$htmlaux.$htmldato;
}

	$html= $htmlaux;
}
if ($_POST["regionelegido"]==14) {
        $consu="select comuna from datos_encuesta_comuna where id_comuna_reg=14";

$resul=consulta($consu);
$num=mysqli_num_rows($resul);  
if($num!=0){
for($i=0;$i<$num;$i++)
 { $mat[$i]=mysqli_fetch_array($resul); }
}

$iaux=0;
$htmldato;
		
foreach ($mat as $values)
		{
		$dato = $values;
		
		
		
		$iaux=$iaux+1;
		


    $htmldato= '<option value="'.$iaux.'">'.$dato['comuna'].'</option>   ';
    $htmldato;
	$htmlaux=$htmlaux.$htmldato;
}

	$html= $htmlaux;
}
if ($_POST["regionelegido"]==15) {
        $consu="select comuna from datos_encuesta_comuna where id_comuna_reg=15";

$resul=consulta($consu);
$num=mysqli_num_rows($resul);  
if($num!=0){
for($i=0;$i<$num;$i++)
 { $mat[$i]=mysqli_fetch_array($resul); }
}

$iaux=0;
$htmldato;
		
foreach ($mat as $values)
		{
		$dato = $values;
		
		
		
		$iaux=$iaux+1;
		


    $htmldato= '<option value="'.$iaux.'">'.$dato['comuna'].'</option>   ';
    $htmldato;
	$htmlaux=$htmlaux.$htmldato;
}

	$html= $htmlaux;
}
if ($_POST["regionelegido"]==16) {
       $consu="select comuna from datos_encuesta_comuna where id_comuna_reg=16";

$resul=consulta($consu);
$num=mysqli_num_rows($resul);  
if($num!=0){
for($i=0;$i<$num;$i++)
 { $mat[$i]=mysqli_fetch_array($resul); }
}

$iaux=0;
$htmldato;
		
foreach ($mat as $values)
		{
		$dato = $values;
		
		
		
		$iaux=$iaux+1;
		


    $htmldato= '<option value="'.$iaux.'">'.$dato['comuna'].'</option>   ';
    
	$htmlaux=$htmlaux.$htmldato;
}

	$html= $htmlaux;
}
echo $html; 
?>