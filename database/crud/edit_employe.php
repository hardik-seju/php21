<?php
session_start();
require_once("..//connection.php");
?>
<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Bootstrap demo</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
</head>

<body>

     <div class="container mt-10">
          <div class="row">
          <?php
               if (isset($_SESSION['message']) == true) {
               ?>
                    <div class="col-10 offset-1 mt-4">
                         <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <?php echo $_SESSION['message'];  ?>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                              </button>
                         </div>
                    </div>
               <?php
               }
               unset($_SESSION['message']);
               ?>
               <div class="col-10 offset-1">
                <?php
                    $sql="select * from employe where id=?";
                    $statement=$db->prepare($sql);
                    $statement->bindparam(1,$_REQUEST['id']);
                    $statement->setFetchMode(PDO::FETCH_ASSOC);
                    $statement->execute();
                    $row=$statement->fetch();
                    // var_dump($row);
                ?>
                    <div class="card mt-5 shadow">
                         <div class="card-header bg-danger text-white h2">Update_Form</div>
                         <div class="card-body">
                              <form action="update_employe.php" method="post">
                                   <div class="form-group my-2">
                                   <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <label for="" class="form-label">Enter your name </label>
                                        <input type="text" name="name" value=<?php echo $row['name'] ?> placeholder="Enter your name" class="form-control" required>
                                   </div>
                                   <div class="form-group my-2">
                                        <label for="" class="form-label">Enter your Email </label>
                                        <input type="email" name="email" placeholder="Enter your email" value=<?php echo $row['email'] ?> class="form-control" required>
                                   </div>
                                   <div class="form-group my-2">
                                        <label for="" class="form-label">Select date of joining </label>
                                        <input type="date" name="doj" placeholder="Enter your doj" value=<?php echo $row['doj'] ?> class="form-control" required>
                                   </div>
                                   <div class="form-group my-2">
                                        <label for="" class="form-label">Select Gender </label>
                                        <br>
                                        <input type="radio" class="form-radio" name="gender" value="0"
                                        <?php
                                        if($row['gender']==0)
                                        {
                                             echo "checked";
                                        }
                                        ?>  
                                        >Female</input>
                                        <input type="radio" class="form-radio" name="gender" value="1"
                                        <?php
                                        if($row['gender']==1)
                                        {
                                             echo "checked";
                                        }
                                        ?>  
                                        >Male</input>
                                   </div>
                                   <div class="text-end">
                                   <input type="submit" value="Update" class="btn btn-success">
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
          
     </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">

     </script>
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
     <script>
          $(document).ready(function () {
               $('#example').DataTable();
          });
     </script>

</body>

</html>