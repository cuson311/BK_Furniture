<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false){
  //show error page
  header("Location: /login/login.php");
  exit();
}
if($_SESSION['role'] != 'customer'){
  //show error page
  echo 'This page is only for customer';
  exit();
}
// Include config file
require_once "../config/config.php";
$sql = "select * from customer where username='".$_SESSION['username']."'";
$res = $connection->query($sql);
$customer = $res->fetch_assoc();
$connection->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Change Password</title>

    <!-- Favicon -->


</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <!--<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>-->
        <!-- Spinner End -->

		<?php include("../base/header.php"); ?>

    <main>
       
        

       <!-- Navbar & Hero End -->
       <div class="container">
   <div class="alert alert-warning d-flex" id="alert-box" style="display:none !important;">
     <div class="col-10 d-flex align-self-center">
       <strong>Password change success!</strong>
     </div>
     <div class="col-2 d-flex justify-content-end">
     <button type="button" class="close" id="close-alert" aria-label="Close" style="background-color: inherit;border:none">
       <h3><span aria-hidden="true" style="color:red; font-size:15;">&times;</span></h3>
     </button>
     </div>
     
   </div>

           <div class="main-body" style="margin-top: 10px;">
                 <div class="row gutters-sm">
                   <div class="col-md-4 mb-3">
                     <div class="card">
                       <div class="card-body">
                         <div class="d-flex flex-column align-items-center text-center">
                           <img src="<?php  echo $image; ?>" alt="" class="rounded-circle" width="150">
                           <div class="mt-3">
                             
                             <p class="text-secondary mb-1"><?php echo $customer['username']; ?></p>
                           </div>
                         </div>
                       </div>
                     </div>
                     
                   </div>
                   
                         <div class="row">
                           <div class="col-sm-12 d-flex justify-content-center">
                             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal">
                               Edit
                             </button>
               <button style="margin-left:5px" id="showchangeModal" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#changepassModal">
                               Change password
                             </button>
                           </div>
                         </div>
                       </div>
                     </div>    
                   </div>
                 </div>
               </div>
           </div> 

       <!-- Modal -->
       <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title" id="updateModalLabel">Update Image Customer</h5>
             </div>
             <div class="modal-body">
               <!-- Update form goes here -->
               <form action="save.php" method="post" enctype="multipart/form-data">
                 
         <div class="form-group">
                   <label for="avatar">Upload your image</label>
                   <input type="file" class="form-control" name="avatar" value ="<?php echo $customer['image'];?>">
                 </div><br>
                 <div class="form-group">
                   <input type="button" name="exit-btn" class="btn btn-secondary" data-bs-dismiss="modal" value="Close">
                   <input type="submit" name="update-btn" class="btn btn-primary" value="Save Changes">
                 </div>
               </form>
             </div>
             <!-- <div class="modal-footer">
               
             </div> -->
           </div>
         </div>
       </div>

   <div class="modal fade" id="changepassModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title" id="updateModalLabel">Change password</h5>
             </div>
             <div class="modal-body">
               <!-- Update form goes here -->
               <form action="changepass.php" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                   <label>Old password</label>
                   <input type="password" name="old-pass" class="form-control" name="oldname">
                 </div><br>
                 <div class="form-group">
                   <label>New password</label>
                   <input type="password" name="new-pass"  class="form-control" name="newpass">
                 </div><br>
                 <div class="form-group">
                   <label>Retype new password</label>
                   <input type="password" name="retype-new-pass" class="form-control" name="retypenewpass">
                 </div><br>
         <div class="form-group">
                   <p style="display:none; color:red;" id="retype-err"></p>
                 </div>
                 <div class="form-group">
                   <input type="button" name="exit-btn-pass" class="btn btn-secondary" data-bs-dismiss="modal" value="Close">
                   <input type="button" name="change-pass-btn" class="btn btn-primary" value="Change">
                 </div>
               </form>
             </div>
             <!-- <div class="modal-footer">
               
             </div> -->
           </div>
         </div>
       </div>
        <!-- Footer Start -->
        <?php
        include("../base/footer.php");
        ?>
        <!-- Footer End -->


        <!-- Back to Top -->
</div>


<script src="check.js"></script>
    
</body>
</html>
