<?php
     session_start();
     if(!isset($_SESSION['ADM'])):
         unset($_SESSION['ADM']);
         echo" <script>document.location.href='index.php'</script>";
     endif;
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        #myProgress {
        width: 100%;
        background-color: #ddd;
        }

        #myBar {
        width: 1%;
        height: 30px;
        background-color: #04AA6D;
        }
    </style>
    <title>Portal RS</title>
  </head>
  <body>

  <?php 
                if(isset($_SESSION['MSG_UPLOAD_IMG'])):
                    echo $_SESSION['MSG_UPLOAD_IMG'];
                    unset($_SESSION['MSG_UPLOAD_IMG']);
            endif;
   ?>
  
  <div class="alert alert-light" role="alert">
    <div class="alert alert-light" role="alert">
        <h1 class="display-2">Portal Ricarte Silva </h1>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Administrador - Cadastro de imagem</h4>
            <p>Selecione uma imagem para o portal</p>
        <form action="../model/classes/cadastro_imagem.php" enctype="multipart/form-data" method="POST" onsubmit="move()">
            <div class="mb-3">
                <input class="form-control" type="file" name="pic" required id="formFile" accept="image/*" onchange="loadFile(event)">
            </div>
            <div class="alert alert-light" role="alert">
                    <img id="output" class="img-fluid">
            </div>    
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">TITULO:</label>
            <input type="text" class="form-control" name="titulo_img" id="titulo_img" placeholder="Digite um titulo para a imagem" required maxlength="40"><br>
        </div>
            <input type="submit" class="btn btn-success" name="btn-cadastrar" value="Cadastrar"> 
            <a class="btn btn-secondary" href="index.php">Voltar para o site<br></a><hr> 
            <div id="myProgress">
                <div id="myBar"></div>
            </div>
        </div>
        </form>    
    </div>
  </div>
 
 

    <script>
        var loadFile = function(event) {
                const output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
            }; 
    </script>

    <script>
    var i = 0;
    function move() {
        if (i == 0) {
            i = 1;
            var elem = document.getElementById("myBar");
            var width = 1;
            var id = setInterval(frame, 10);
            function frame() {
            if (width >= 100) {
                clearInterval(id);
                i = 0;
            } else {
                width++;
                elem.style.width = width + "%";
            }
            }
        }
    }
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>