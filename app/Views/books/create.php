<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ci_4 Crud Application</title>
    <link rel="stylesheet" href="<?php echo base_url('assests/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assests/css/style.css');?>">
</head>
<body>
    <div class="container-fluid bg-purple">
    <div class="container1">
    <div>Simple CRUD Application</div>
    </div>
    </div>
    <div class="bg-white">
    <div class="container">
<div class="row">
<nav class="nav nav-underline">

<div class="nav-link">Books/view</div>

     </nav>
     </div>
    </div>
    </div>
    <div class="container mt-4">
    <div class="row ">
            <div class="col-md-12 text-right">
          <a href="<?php echo base_url('books/');?>" class="btn btn-success">Back</a>
        </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row ">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-purple">
                    <div class="card-header-title">Enter Book Details</div>
                </div>
                <div class="card-body">
                    <form name="create" id="create"  method="post"action="">
                    <div class="form-group">
                     <label for="namme">Name</label>
                     <input type="text" name="name" id="name" placeholder="Enter Book Name" class="form-control <?php echo (isset($validation)&& $validation->hasError('name')) ?'is-invalid': ''?>" value="<?php echo set_value('name');?>">
<?php if(isset($validation)&& $validation->hasError('name')){
    echo '<p class="invalid-feedback">'.$validation->getError('name').'</p>';}?>
                    </div>
                    <div class="form-group">
                     <label for="namme">Author</label>
                     <input type="text" name="author" id="author" placeholder="Enter Author of above Book" class="form-control <?php echo (isset($validation)&& $validation->hasError('author')) ?'is-invalid': ''?>" value="<?php echo set_value('author');?>">
                     <?php if(isset($validation)&& $validation->hasError('author')){
    echo '<p class="invalid-feedback">'.$validation->getError('author').'</p>';}?>
                    </div>
                    <div class="form-group">
                     <label for="namme">ISBN NO</label>
                     <input type="text" name="isbn" id="isbn" placeholder="Enter ISBN NO. of above Book" class="form-control " value="<?php echo set_value('isbn');?>">

                    </div>
<button type="submit" name="submit" class="btn btn-warning">Submit</button>
</form>
                </div>

            </div>
            
            </div>
        </div>
    </div>
</body>
</html>