<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ABC Contacts - Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
  <body>
    

    <?php require __DIR__ . "/../parts/header.php"; ?>


    <form id="edit-form" action="">
      <div class="container">

        <p class="h1 my-4"><?php echo empty($data['id']) ? "Create" : "Edit"; ?> Contact</p>

        <div class="alert alert-danger d-none" role="alert" id="alert"></div>

        <input type="hidden" name="id" value="<?php echo $data['id'] ?? 0; ?>">
        <input type="hidden" name="a" value="save">

        <div class="row">
          <div class="col-md-3">

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">First Name</label>
              <input type="text" class="form-control" name="first_name" value="<?php echo $data['first_name'] ?? ''; ?>" placeholder="">
            </div>

          </div>


          <div class="col-md-3">

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Lasts Name</label>
              <input type="text" class="form-control" name="last_name" value="<?php echo $data['last_name'] ?? ''; ?>" placeholder="">
            </div>

          </div>


          <div class="col-md-3">
            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Middle Name</label>
              <input type="text" class="form-control" name="middle_name" value="<?php echo $data['middle_name'] ?? ''; ?>" placeholder="">
            </div>

          </div>


          <div class="col-md-3">
          
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email</label>
              <input type="text" class="form-control" name="email" value="<?php echo $data['email'] ?? ''; ?>" placeholder="">
            </div>

          </div>


          <div class="col-md-3">

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Title</label>
              <input type="text" class="form-control" name="title" value="<?php echo $data['title'] ?? ''; ?>" placeholder="">
            </div>

          </div>


          <div class="col-md-3">

            <label for="" class="form-label">Prefix</label>
            <select name="prefix" id="" class="form-select">
              <option <?php if(!empty($data['prefix']) && $data['prefix'] == 'Mr.') echo ' selected'; ?>>Mr.</option>
              <option <?php if(!empty($data['prefix']) && $data['prefix'] == 'Mrs.') echo ' selected'; ?>>Mrs.</option>
              <option <?php if(!empty($data['prefix']) && $data['prefix'] == 'Miss') echo ' selected'; ?>>Miss</option>
              <option <?php if(!empty($data['prefix']) && $data['prefix'] == 'Ms.') echo ' selected'; ?>>Ms.</option>
            </select>

          </div>

          <div class="col-md-3">

            <label for="" class="form-label">Suffix</label>
            <select name="suffix" id="" class="form-select">
              <option <?php if(!empty($data['suffix']) && $data['suffix'] == 'Jr.') echo ' selected'; ?>>Jr.</option>
              <option <?php if(!empty($data['suffix']) && $data['suffix'] == 'Sr.') echo ' selected'; ?>>Sr.</option>
              <option <?php if(!empty($data['suffix']) && $data['suffix'] == 'I') echo ' selected'; ?>>I</option>
              <option <?php if(!empty($data['suffix']) && $data['suffix'] == 'II') echo ' selected'; ?>>II</option>
              <option <?php if(!empty($data['suffix']) && $data['suffix'] == 'III') echo ' selected'; ?>>III</option>
            </select>

          </div>

          <div class="col-md-3">

          <?php if(empty($data['id'])) : ?>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
              <input type="text" class="form-control" name="phone_number" value="<?php echo $data['number'] ?? ''; ?>" placeholder="1231231234">
            </div>

          <?php endif; ?>

          </div>

        </div>

        <?php if(!empty($data['id'])) : ?>

          <div class="row">
            <div class="col-md-3">
              <p class="h3">Phone Numbers</p>
              <div class="border p-3">
                <p><b>Number: </b><?php echo $data['number'] ?? ''; ?></p>
                <p><b>Type: </b><?php echo $data['type'] ?? ''; ?></p>
                <p><b>Default: </b><?php echo $data['default_number'] ?? ''; ?></p>
              </div>
            </div>
            <div class="col-md-9"></div>
          </div>

        <?php endif; ?>
        
        <button onclick="saveFormSubmit()" type="button" class="btn btn-secondary btn-lg float-end">Save</button>
        <div class="clearfix"></div>
      </div>
    </form>



    <script src="/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>