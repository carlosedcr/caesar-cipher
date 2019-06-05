<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="imageedit_4_4244413588.png">
    <title>Caesar Cipher</title>
</head>

<body>
    <div class="container">
        <h1 class="center-align"><img src="imageedit_4_4244413588.png" width="50" height="50" alt="">Caesar Cipher</h1>
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

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('select').attr("class", "browser-default");
        });
    </script>
</body>

</html>