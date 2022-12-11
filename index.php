<!DOCTYPE HTML>

<html>

  <link rel="stylesheet" href="style.css">

  <head>


    <meta charset="utf-8">
    <title>Chat</title>
    <script type = "text/javascript">  
    function ajax(){
        var req = new XMLHttpRequest();
        req.onreadystatechange = function(){
            if (req.readyState == 4 && req.status == 200){
                document.getElementById('chat').innerHTML = req.responseText;
            }
        }
        req.open('GET', 'chat.php', true);
        req.send();
    }

    setInterval(function(){ajax();}, 1000);

    </script>

  </head>

  <body>

    <div id = "chat-container">

    <div id='chat'>
    
    </div>

        <form method="post" action="index.php" >
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name = "mensagem" placeholder="mensagem">
        <input type="submit" value="Enviar" onclick="">
        </form>
    
    </div>

        
    <div id='foo'>
    
    </div>
        <?php       
          include("bd_conect.php");
          $nome = $_POST["nome"];
          $mensagem = $_POST["mensagem"];
          $pdo->query("INSERT INTO chat1 SET nome= '$nome', mensagem = '$mensagem'");
        ?>



  </body>
</html>