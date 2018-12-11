
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <form action="q5.php" method="POST"> 
        <table border="1" width="25%"  height="25%" align="center">
     <tr>
         <td bgcolor="#CD5C5C" align="center" colspan="2"><font face="Arial" color="white"> Calculadora em Switch </font></td>
     </tr>
     <tr>
         <td bgcolor="#CD5C5C" align="center"><font face="Arial" color="white">Primeiro valor</font></td>
         <td bgcolor="#FFA07A" align="center"><input name="a" type="number" value="v1>"></td>
     </tr>
      <tr>
          <td bgcolor="#CD5C5C" align="center"><font face="Arial" color="white">Segundo valor</font></td>
         <td bgcolor="#FFA07A" align="center"><input name="b" type="number" value="v2>"></td>
     </tr><tr>
          <td bgcolor="#CD5C5C" align="center"><font face="Arial" color="white">Escolha a operação:</font></td>
         <td bgcolor="#FFA07A" align="justify"> 
   <input name="operacao" type="radio" value="Soma" />Soma<br />
   <input name="operacao" type="radio" value="Subtração" />Subtração<br />
   <input name="operacao" type="radio" value="Multiplicação" />Multiplicação<br />
   <input name="operacao" type="radio" value="Divisão" />Divisão
   <input type="hidden" name="oculto" value="efetuar"/>
         </td>
     </tr>
    
    <tr>
    <td colspan="2" bgcolor="#FFA07A">  <center> <input name="calcular" type="submit" value="Calcular"/> </center></td>
      
    </tr>
       
      <?php
       if ($_POST && $_POST["oculto"] == "efetuar"){
   $a     = $_POST["a"];
   $b     = $_POST["b"];
   $sinal = $_POST["operacao"];
   switch ($sinal){
      case $sinal == "Soma":
	$total = $a + $b;
	break;
      case $sinal == "Subtração":
	$total = $a - $b;
	break;
      case $sinal == "Multiplicação":
	$total = $a * $b;
	break;
      case $sinal == "Divisão":
	$total = $a / $b;
	break;
       }
       echo "Valor Total da operação: ".$total;
       
   }
        ?>
 </body>
</html>
