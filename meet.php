<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container bg-secondary text-white">
        <div class="row">
            <div class="col-12">
                <div class="card-header my-3 h3">Meetanshi_Form  </div>
                    <div class="card-body">
                    <form action="" method="post">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">Email FirstName</label>
                                <input type="text" name="fname" class="form-control" id="firstname" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="mobileno" class="form-label">Enter Mobile_no</label>
                                <input type="number" name="mobile"  class="form-control" id="mobileno"  aria-describedby="emailHelp" required>
                                <?php 
                                    if(strlen($_POST['mobile']!=10))
                                    {
                                      ?>
                                        <span class="alert alert-danger">echo "Plz Enter 10 Digit";</span>
                                      <?php
                                    }
                                ?>

                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Enter Email_Id</label>
                                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                                
                            </div>
                            <div class="mb-3">
                                <label for="sub1" class="form-label">Enter Maths_mark</label>
                                <input type="number" name="sub1" class="form-control" id="sub1" aria-describedby="emailHelp" required>
                                <?php 
                                    if(strlen($_POST['sub1']>=0) && strlen($_POST['sub1']<=100))
                                    {
                                      ?>
                                        <span class="alert alert-danger">echo "Plz Enter Mark Between 0 and 100";

                                        </span>
                                      <?php
                                    }
                                ?>
                            </div>
                            <div class="mb-3">
                                <label for="sub2" class="form-label">Enter Science_mark</label>
                                <input type="number" name="sub2" class="form-control" id="sub2" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="sub3" class="form-label">Enter English_mark</label>
                                <input type="number" name="sub3" class="form-control" id="sub2" aria-describedby="emailHelp" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-danger">Clear</button>
                            </form>
                    </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>