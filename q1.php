<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <form action="q1.php" method="POST"> 
        <table border="1" width="25%"  height="25%" align="center">
     <tr>
         <td bgcolor="#CD5C5C" align="center"><font face="Arial" color="white"> Digite o código do estado civil: </font></td>
         <td bgcolor="#FFA07A" align="center"> <input type="text" name="opcao" size="2" maxlength="1"> </td>
    </tr>
    <tr>
    <td colspan="2" bgcolor="#FFA07A">  <center> <input type="submit" name="enviar"> </center></td>
      
    </tr>
    <tr>
        <td colspan="2" bgcolor="#FFA07A" align="center"><a href="q2.php">Proxima Questão</a></td>
      
    </tr>
       </table>
        </form>
        <?php
        if(isset($_POST['enviar']))
       {
           $resposta=$_POST['opcao'];
           switch($resposta){
               case 1:
                   echo ("Solteiro");
                   break;
               case 2:
                   echo ("Casado");
                   break;
               case 3:
                   echo("Separado");
                   break;
               default:
                   echo("Código inválido");
                   break;
                       }
       }
        ?>
    </body>
</html>
