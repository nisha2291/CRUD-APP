<?php
include 'header.php';
session_start();
?>



<div class="container">
    <?php
    if (isset($_SESSION['success'])){ ?>
    <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">

    <strong class="me-auto text-success">Successfully User Added</strong>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body text-success">
   <?=$_SESSION['success']?>
  </div>
</div>

<?php }

?>



    <div class="card col-md-6 mx-auto mt-3">

        <div class="card-header">
            <h3 class="text-center text-secondary">Add User</h3>
        </div>

        <div class="card-body">
            <div class="form">
                <form action="cnotrollers\addUserController.php" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control"
                         placeholder="Enter name">

                         <?php if (isset($_SESSION['name_err'])){?>
                         <span class="text-danger"> <?=$_SESSION['name_err']?>  </span>

                         <?php }
                            
                            ?>
                             
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter email address">
                   
                         <?php if (isset($_SESSION['email_err'])){?>
                         <span class="text-danger"> <?=$_SESSION['email_err']?>  </span>

                         <?php }
                            
                            ?>
                    </div>

  



                        <div class="mb-3">
                        <label for="description" class="form-label ">description</label>
                        <textarea name="description" id="" class="form-control summernote" placeholder="Enter description"></textarea>
                  
                         <?php if (isset($_SESSION['description_err'])){?>
                         <span class="text-danger"> <?=$_SESSION['description_err']?>  </span>

                         <?php }
                            
                            ?> 
                    </div>









                    <div class="mb-3">
                        <label for="expreience" class="form-label ">Experience</label>
                        <textarea name="expreience" id="" class="form-control summernote" placeholder="Enter experience"></textarea>
                  
                         <?php if (isset($_SESSION['expreience_err'])){?>
                         <span class="text-danger"> <?=$_SESSION['expreience_err']?>  </span>

                         <?php }
                            
                            ?> 
                    </div>
                    <div class="mb-3">
                        <label for="project" class="form-label ">Project</label>
                        <textarea name="project" id="" class="form-control summernote" placeholder="Enter project details"></textarea>
                  
                    </div>

                    <div class="mb-3">
                        <label for="profile" class="form-label ">Profile</label>
                        <input type="file" name="profile_image" class="form-control">
                       
                    </div>




                    <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>

                </form>
            </div>
        </div>

    </div>
</div>



    </div>
    
</div>
<?php
include 'footer.php';
session_unset();
?>
<script>
    $(document).ready(function () {
        $('.summernote').summernote({
            height: 100
        });
    });
</script>