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
          <a href="<?php echo base_url('book/create')?>" class="btn btn-success">Add</a>
        </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row ">
        <div class="col-md-12">
        <?php if(!empty($session->getFlashdata('success'))){
            ?>
            <div class="alert alert-success">
            <?php echo $session->getFlashdata('success');?>
            </div>
            <?php
        } ?>

<?php if(!empty($session->getFlashdata('error'))){
            ?>
            <div class="alert alert-danger">
            <?php echo $session->getFlashdata('error');?>
            </div>
            <?php
        } ?>
        </div>
            <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-purple">
                    <div class="card-header-title">Book List</div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>ISBN NO</th>
                            <th>Author</th>
                            <th>Action</th>
                        </tr>
                        <?php if(!empty($books)){ 
                            foreach($books as $book) {
                             ?>
                    <tr>
                        <td><?php echo $book['id'];?></td>
                        <td><?php echo $book['title'];?></td>
                        <td><?php echo $book['isbn_no'];?></td>
                        <td><?php echo $book['author'];?></td>
                        <td>
                            <a href="<?php echo base_url('books/edit/'.$book['id']);?>" class="btn btn-primary">Edit</a>
                            <a href="#" onclick="deleteConfirm(<?php echo $book['id']?>);" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php } 
                    }else { ?>

                                   <tr>
                                   
                                   <td colspan="5">Records not Found</td>
                                   
                                   </tr>

                               <?php }?>

                    </table>
                </div>

            </div>
            
            </div>
        </div>
    </div>
</body>
<script>
function deleteConfirm(id){
    if(confirm("Are you sure to delete this book from list")){
        window.location.href='<?php echo base_url('books/delete')?>/'+id;
    }
}
</script>
</html>