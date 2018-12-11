
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="q2.php" method="POST"> 
        <table border="1" width="25%"  height="25%" align="center">
     <tr>
         <td bgcolor="#CD5C5C" align="center"><font face="Arial" color="white"> Digite o mês: </font></td>
         <td bgcolor="#FFA07A" align="center"> <input type="text" name="mes" size="10"> </td>
    </tr>
    <tr>
    <td colspan="2" bgcolor="#FFA07A">  <center> <input type="submit" name="enviar"> </center></td>
      
    </tr>
    <tr>
        <td colspan="2" bgcolor="#FFA07A" align="center"><a href="q3.php">Proxima Questão</a></td>
      
    </tr>
       </table>
        </form>
        <?php
        if(isset($_POST['enviar']))
       {
           $resposta=$_POST['mes'];
           switch($resposta)
           {
               case 'dezembro':
                   echo ("alta temporada");
                   break;
               case 'fevereiro':
                   echo ("alta temporada");
                   break;
               case 'junho':
                   echo("alta temporada");
                   break;
                case 'julho':
                   echo("alta temporada");
                   break;
               case 'janeiro':
                   echo("baixa temporada");
                   break;
               case 'março':
                   echo("baixa temporada");
                   break;
               case 'abril':
                   echo("baixa temporada");
                   break;
               case 'maio':
                   echo("baixa temporada");
                   break;
               case 'agosto':
                   echo("baixa temporada");
                   break;
               case 'setembro':
                   echo("baixa temporada");
                   break;
               case 'outubro':
                   echo("baixa temporada");
                   break;
               case 'novembro':
                   echo("baixa temporada");
                   break;
               default:
                   echo("nenhum mês enquadrado");
                   break;
           }
       }
        ?>
    </body>
</html>
