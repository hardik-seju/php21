<?php
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
            <div class="col-12">
            <div class="col-10 offset-1">
            <?php
                                  $sql="select * from shop where id=?";
                                   $state=$db->prepare($sql);
                                   $state->bindparam(1,$_REQUEST['id']);
                                   $state->setFetchMode(PDO::FETCH_ASSOC);
                                   $state->execute();
                                   $row=$state->fetch();
                                //    var_dump($row);
            ?>
                    <div class="card mt-3 shadow">
                         <div class="card-header bg-danger text-white h2">Update Form</div>
                         <div class="card-body">
                              <form action="update.php" method="post">
                                   <div class="form-group my-2">
                                        <label for="" class="form-label">Enter your Shop name </label>
                                        <input type="hidden" name="id" value=<?php echo $row['id']; ?>>
                                        <input type="text" name="name" value=<?php echo $row['name'] ?> placeholder="Enter your shop name" class="form-control" required>
                                   </div>
                                   <div class="form-group my-2">
                                        <label for="" class="form-label">Enter your Address </label>
                                        <input type="text" name="address" value=<?php echo $row['address'] ?> placeholder="Enter your Address" class="form-control" required>
                                   </div>
                                   <div class="form-group my-2">
                                   <label for="" class="form-label">Status</label><br>
                                        <input type="radio" name="status" class="mx-2" value="0"
                                        <?php
                                         if($row['status']==0)
                                         {
                                            echo "checked";
                                         }
                                         ?>
                                        >Open</input>
                                        <input type="radio" name="status" class="mx-2"value="1"
                                        <?php
                                         if($row['status']==1)
                                         {
                                            echo "checked";
                                         }
                                         ?>
                                        >Close</input>
                                   </div>
                                   <div class="form-group my-2">
                                        <label for="" class="form-label">Enter your City </label>
                                        <input type="text" name="city" value=<?php echo $row['city'] ?> placeholder="Enter your City" class="form-control" required>
                                   </div>
                                   <div class="form-group my-2">
                                        <label for="" class="form-label">Enter your Mobile_no </label>
                                        <input type="text" name="contactno" value=<?php echo $row['contactno'] ?> placeholder="Enter your Mobile_no" class="form-control" required>
                                   </div>
                                   <div class="form-group my-2">
                                        <label for="" class="form-label">Enter your Opening_date </label>
                                        <input type="date" name="openingdate" value=<?php echo $row['openingdate'] ?> placeholder="Enter your Opening date" class="form-control" required>
                                   </div>
                                   <div class="text-end">
                                   <input type="submit" class="btn btn-success mx-3 mt-4" value="Update">
                                   
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>