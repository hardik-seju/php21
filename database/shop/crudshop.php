<?php
session_start();
require_once("..//connection.php");
// echo "Success";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/4.0.0/material-components-web.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.material.min.css">
  </head>
  <body>
    <div class="container">
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
            <div class="col-12">
            <div class="col-10 offset-1">
                    <div class="card mt-3 shadow">
                         <div class="card-header bg-danger text-white h2">Shop_crud demo</div>
                         <div class="card-body">
                              <form action="insert_shop.php" method="post">
                                   <div class="form-group my-2">
                                        <label for="" class="form-label">Enter your Shop name </label>
                                        <input type="text" name="name" placeholder="Enter your shop name" class="form-control" required>
                                   </div>
                                   <div class="form-group my-2">
                                        <label for="" class="form-label">Enter your Address </label>
                                        <input type="text" name="address" placeholder="Enter your Address" class="form-control" required>
                                   </div>
                                   <div class="form-group my-2">
                                   <label for="" class="form-label">Status</label><br>
                                        <input type="radio" name="status" class="mx-2" value="0">Open
                                        <input type="radio" name="status" class="mx-2"value="1">Close
                                   </div>
                                   <div class="form-group my-2">
                                        <label for="" class="form-label">Enter your City </label>
                                        <input type="text" name="city" placeholder="Enter your City" class="form-control" required>
                                   </div>
                                   <div class="form-group my-2">
                                        <label for="" class="form-label">Enter your Mobile_no </label>
                                        <input type="text" name="contactno" placeholder="Enter your Mobile_no" class="form-control" required>
                                   </div>
                                   <div class="form-group my-2">
                                        <label for="" class="form-label">Enter your Opening_date </label>
                                        <input type="date" name="openingdate" placeholder="Enter your Opening date" class="form-control" required>
                                   </div>
                                   <div class="text-end">
                                   <input type="submit" class="btn btn-success mx-3 mt-4" value="Submit">
                                   <input type="reset" class="btn btn-danger mt-4" value="Clear All">
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
            <div class="col-10 offset-1">
                    <div class="card mt-3 shadow">
                         <div class="card-header bg-danger text-white h2">Shop_crud demo</div>
                         <div class="card-body">
                         <table id="example" class="mdl-data-table" style="width:100%">
                           <thead>
                                   <tr>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                        <th>City</th>
                                        <th>Contact_number</th>
                                        <th>Opening_date</th>
                                        <th>Operations</th>
                                   </tr>
                            </thead>
                            <?php
                                   $sql="select * from shop";
                                   $state=$db->prepare($sql);
                                   $state->setFetchMode(PDO::FETCH_ASSOC);
                                   $state->execute();
                                   $row=$state->fetchAll();
                                   // extract($row);
                                   // var_dump($row);
                                   foreach($row as $value)
                                   {
                                   ?>
                                   <tr>                         
                                        <td><?php  echo $value['name'];?></td>
                                        <td><?php  echo $value['address'];?></td>
                                        <td><?php 
                                         if($value['status']==0)
                                         {
                                             echo "Open";
                                         }
                                         if($value['status']==1)
                                         {
                                             echo "Close";
                                         }
                                         ?>
                                         </td>
                                        <td><?php  echo $value['city'];?></td>
                                        <td><?php  echo $value['contactno'];?></td>
                                        <td><?php  echo $value['openingdate'];?></td>
                                         <td>
                                         <a href="edit_shop.php?id=<?php echo $value['id'] ?>"><img src="../crud/edit.png" width="40px" alt=""></a>
                                         <a href="delete_shop.php?id=<?php echo $value['id'] ?>"><img src="../crud/delete.png" width="40px" alt=""></a>
                                         </td>
                                   </tr>
                                   <?php
                                   }
                                   ?>
                         </table
                         </div>
                    </div>
            </div>
                </form>
            </div>
        </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.material.min.js"></script>
  <script>
          $(document).ready(function () {
           $('#example').DataTable({
         autoWidth: false,
           columnDefs: [
            {
                targets: ['_all'],
                className: 'mdc-data-table__cell',
            },
        ],
    });
});
  </script>
  </body>
</html>