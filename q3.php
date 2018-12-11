<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="q3.php" method="POST"> 
        <table border="1" width="40%"  height="40%" align="center">
     <tr>
         <td bgcolor="#CD5C5C" align="center"><font face="Arial" color="white"> Digite o dia: </font></td>
         <td bgcolor="#FFA07A" align="center"> <input type="text" name="dia" size="2" maxlength="1"> </td>
         <td rowspan="3" bgcolor="#CD5C5C" align="center"><font face="Arial" color="white">Códigos de resposta<br>
             1-Domingo<br>2-Segunda<br>3-Terça<br>4-Quarta<br>5-Quinta<br>6-Sexta<br>7-Sábado   </font></td>
    </tr>
    <tr>
    <td colspan="2" bgcolor="#FFA07A">  <center> <input type="submit" name="enviar"> </center></td>
      
    </tr>
    <tr>
        <td colspan="2" bgcolor="#FFA07A" align="center"><a href="q4.php">Proxima Questão</a></td>
      
    </tr>
       </table>
        </form>
        <?php
       if(isset($_POST['enviar']))
       {
           $resposta=$_POST['dia'];
           switch($resposta){
               case 1:
                   echo ("fim de semana");
                   break;
               case 2:
                   echo ("dia de semana");
                   break;
               case 3:
                   echo("dia de semana");
                   break;
               case 4:
                   echo("dia de semana");
                   break;
               case 5:
                   echo("dia de semana");
                   break;
               case 6:
                   echo("dia de semana");
                   break;
               case 7:
                   echo("fim de semana");
                   break;
               default:
                   echo("dia inválido");
                   break;
                       }
       }
        ?>
    </body>
</html>
