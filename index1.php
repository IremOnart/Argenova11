<?php 
       
    include "includes/header.php";

?>


    <img class="resim" src="Screenshot_1.jpg" alt="resim">
    <br><br><br>


    </div class="container-fluid">
    <div class="row">
        <div class="col">
            <br><br><br>
            <form action="panelgiris.php" method="post">
                <div class="form-group1">
                    <h1>Login</h1><br>
                  <label for="exampleInputEmail1">Username or email address*</label>
                  <input type="email" name="email1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group1">
                  <label for="exampleInputPassword1">Password*</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div> <br>
                <div class="form-group1">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label><br><br>
                    <button type="submit" class="btn btn-primary">Login</button><br><br>
                    <a class="a" href="#">Lost your password?</a>
                  </div>
                
                
              </form>
            
            </div>
            <div class="col-12 col-sm-6 col-md-3">
            <br><br><br>
            <form action="panelgiris.php" method="post">
                
                <div class="form-group2">
                    <h1>Register</h1><br>
                  <label for="exampleInputEmail1">Email address*</label>
                  <input type="email" name="email2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
                  <small id="emailHelp" class="form-text text-muted">A password will be sent to your email <br>
                    Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a class="a" href="#"> privacy policy.</a></small><br><br>

                    <button type="submit" class="btn btn-primary">Register</button>
                </div>

                
              </form>
        </div>


        </div>

        

    </div>

    </div>
    <br><br><br><br><br><br><br><br><br>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.077407232642!2d90.4225270359951!3d23.780257730747458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7572b23f4e5%3A0xe26372e73a6832e7!2sRSTheme!5e0!3m2!1str!2str!4v1623823453473!5m2!1str!2str"
        width=100% height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        <script src="javas.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
<?php 

    include "includes/footer.php";
    include "baglanti.php";

    if(isset($_POST["email2"])){
      $email = $_POST["email2"];
   
      $ekle="INSERT INTO users(email) VALUES ('".$email."')";
    }
    
    session_start();

        if(isset($_POST["email1"] ,$_POST["password"] )){
  
        if($_POST["email1"]==$email && $_POST["password"]=="12345"){
          $_SESSION["users"]==$_POST["email1"];
          header("location:yonetimsistemi/panel.php");
  }
  else{
    echo "<script>alert('email ya da şifre yanlış')</script> ";
  }
        }

         
?> 