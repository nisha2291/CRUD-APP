<?php
include 'header.php';
session_start();
?>



<div class="container">
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

                         <?php if (isset($_SESSION['error'])){?>
                         <span class="text-danger"> <?=$_SESSION['error']?>  </span>

                         <?php }
                            
                            ?>
                             
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter email address">
                   
                         <?php if (isset($_SESSION['error'])){?>
                         <span class="text-danger"> <?=$_SESSION['error']?>  </span>

                         <?php }
                            
                            ?>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter phone number">
                   
                         <?php if (isset($_SESSION['error'])){?>
                         <span class="text-danger"> <?=$_SESSION['error']?>  </span>

                         <?php }
                            
                            ?>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label ">Description</label>
                        <textarea name="description" id="" class="form-control summernote" placeholder="Enter description"></textarea>
                   
                         <?php if (isset($_SESSION['error'])){?>
                         <span class="text-danger"> <?=$_SESSION['error']?>  </span>

                         <?php }
                            
                            ?>
                    </div>
                    <div class="mb-3">
                        <label for="expreience" class="form-label ">Experience</label>
                        <textarea name="expreience" id="" class="form-control summernote" placeholder="Enter experience"></textarea>
                  
                         <?php if (isset($_SESSION['error'])){?>
                         <span class="text-danger"> <?=$_SESSION['error']?>  </span>

                         <?php }
                            
                            ?> 
                    </div>
                    <div class="mb-3">
                        <label for="project" class="form-label ">Project</label>
                        <textarea name="project" id="" class="form-control summernote" placeholder="Enter project details"></textarea>
                  
                         <?php if (isset($_SESSION['error'])){?>
                         <span class="text-danger"> <?=$_SESSION['error']?>  </span>

                         <?php }
                            
                            ?>
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
?>
<script>
    $(document).ready(function () {
        $('.summernote').summernote({
            height: 100
        });
    });
</script>