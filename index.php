<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/e04c4a51a8.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="logo.png">
    <title>Caesar Cipher</title>
</head>


<body style="display:flex;min-height: 100vh;flex-direction: column;">
<main style="flex: 1 0 auto;">
    <div class="container">
        <h1 class="center-align"><img src="logo.png" width="50" height="50" alt="">Caesar Cipher</h1>
        <form method="post">
        <div class="row">
            <div class="input-field col offset-s4 s4">
                <input type='text' name='text' id='text' class="validate"/>
                <label for="text">Text</label>
            </div>
            <div class="input-field col offset-s5 s2">
                <input type='number' name='casas' id='casas' class="validate"/>
                <label for="casas">Shift</label>
            </div>
        </div>
        <div class="row">
            <button class="btn waves-effect waves-light col offset-s5 s2" name='btn' value='cipher' type='submit'>Cipher</button>
            <p class="col offset-s4 s4"></p>
            <button class="btn waves-effect waves-lightbtn col offset-s5 s2" name='btn' value='decipher' type='submit'>Decipher</button>
        </div>
        </form>

        <?php if (isset($_POST['text']) ) : ?>
            <?php if ($_POST['text'] != null && $_POST['casas'] != null) : ?>
                <div class="container">
                <code style="display:block;overflow-x:auto;padding:0.5em;color:#333;background:#f8f8f8"><?php include 'cypher.php' ?></code>
                </div>
            <?php endif ?>
        <?php endif ?>
    </div>
  

</main>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('select').attr("class", "browser-default");
        });
    </script>

</body>

<footer class="page-footer grey lighten-5">
    <div class="container" style="margin-bottom:5px;">
    <a class="grey-text text-darken-4"> © 2019 Carlos Correa</a>
    
    <a class="grey-text text-darken-4 right" style='margin-left:10px;' href="https://github.com/carlosedcr" target="_blank"><i class="fab fa-github fa-lg"></i></a>
    <a class="grey-text text-darken-4 right" style='margin-left:10px;' href="https://www.linkedin.com/in/carlos-eduardo-corr%C3%AAa-7744a493/" target="_blank"><i class="fab fa-linkedin-in fa-lg"></i></a>
    <a class="grey-text text-darken-4 right" href="mailto:carlosedcorrea2@gmail.com"><i class="far fa-envelope fa-lg"></i></a>
    
    </div>
</footer>

</html>
