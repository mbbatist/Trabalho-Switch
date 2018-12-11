
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="q4.php" method="POST"> 
        <table border="1" width="25%"  height="25%" align="center">
     <tr>
         <td bgcolor="#CD5C5C" align="center"><font face="Arial" color="white"> Digite a opção: </font></td>
         <td bgcolor="#FFA07A" align="center"> <input type="text" name="opcao" size="2" maxlength="1"> </td>
    </tr>
    <tr>
    <td colspan="2" bgcolor="#FFA07A">  <center> <input type="submit" name="enviar"> </center></td>
      
    </tr>
    <tr>
        <td colspan="2" bgcolor="#FFA07A" align="center"><a href="q5.php">Proxima Questão</a></td>
      
    </tr>
       </table>
        </form>
        <?php
       if(isset($_POST['enviar']))
       {
           $resposta=$_POST['opcao'];
           switch($resposta){
               case 1:
                   echo ("Bom dia");
                   break;
               case 2:
                   echo ("Boa Tarde");
                   break;
               case 3:
                   echo("Boa Noite");
                   break;
               default:
                   echo("Opção não encontrada");
                   break;
                       }
       }
        ?>
    </body>
</html>
