<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ABC Contacts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
  <body>
    

    <?php require __DIR__ . "/../parts/header.php"; ?>

    <div class="alert alert-success <?php if(empty($_GET['success'])) echo 'd-none'; ?>" role="alert">
      <div class="container">Successful Save!</div>
    </div>

    <div class="container my-4">

      <div class="row">
        <div class="col-md-4">      
          <a href="/edit.php" class="btn btn-secondary">Add Contact</a>
        </div>
        <div class="col-md-8">
          <?php require __DIR__ . "/../parts/search.php"; ?>
        </div>
      </div>

      <?php require __DIR__ . "/../parts/contact-list.php"; ?>

    </div>

    <?php require __DIR__ . "/../parts/delete-modal.php"; ?>

    <script src="/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>