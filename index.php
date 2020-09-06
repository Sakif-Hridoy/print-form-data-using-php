<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Registration Form</title>
  </head>
  <body>
   
      <!-- form secttion Start -->
      <section>
        
          <div class="container">

            <div class="row">
              
              <div class="col-md-4 offset-md-4">

                <h2>Registration Form</h2>

                <form action="" method="POST"> 
                  
                  <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" name="name" class="form-control" required="required">
                  </div>

                  <div class="form-group">
                  <label>Email Address</label>
                  <input type="email" name="email" class="form-control" required="required">
                  </div>

                  <div class="form-group">
                  <label>Address</label>
                  <input type="text" name="address" class="form-control" required="required">
                  </div>

                  <div class="form-group">
                  <label>Phone No.</label>
                  <input type="text" name="phone" class="form-control" required="required">
                  </div>

                  <div class="form-group">
                    <input type="submit" name="register" class="btn btn-primary btn-block" value="Register">
                  </div>

          <!-- form secttion End -->

                  <!-- PHP Post Section -->
                  <?php
                    if( isset( $_POST['register'])){

                    $name     = $_POST['name'];
                    $email    = $_POST['email'];
                    $address  = $_POST['address'];
                    $phone    = $_POST['phone'];

                    echo $name . "<br>". $email ."<br>". $address . "<br>" . $phone;
                    }
                  ?>

                  <!-- PHP Post Section -->

                </form>

                
              </div>
            </div>

            <div>
              
            </div>
            

          </div>

      </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>