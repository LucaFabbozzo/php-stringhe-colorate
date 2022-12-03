<?php


$psw_corretta = "Boolean";

if (!empty($_GET['psw'])) {
  if ($psw_corretta === $_GET['psw']) {
    $class = 'green';
    $output = 'Password corretta';
  } else {
    $class = 'red';
    $output = 'Password sbagliata';
  }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
      .red {
        color: red;
      }

      .green {
        color: green;
      }
    </style>



    <title>Cerca Parola</title>
</head>
<body>

<div class="container py-5">

  <?php if(empty($_GET['psw'])) : ?>
    <div>
      <h1>Verifica la password</h1>
      <!-- invio il form alla stessa pagina -->
        <form method="GET">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Verifica la password</label>
            <input type="text" name="psw" class="form-control" id="exampleFormControlInput1" placeholder="Scrivi password">
            </div>
            <div class="mb-3">
              <button class="btn btn-primary" type="submit">Invia</button>
            </div>
        </form>
    </div>
  <?php else: ?> 
    <div>
      <h1 class="<?php echo $class ?>"><?php echo $output; ?></h1>
    </div>
  <?php endif; ?>


</div>


</body>
</html>