<?php
ob_start();
include "db/dbconn.php";
session_start();

include 'includes/header.php';
?>




  <main>

        <!--page-title-area end-->
        <!--join-team-area start-->
        <section class="contacts-details-area pt-20 pb-100">
            <div class="container">
                <div class="row align-items-center">
                 <div class="col-xl-5 col-lg-6 col-md-6" style="background-color: midnightblue;" >
                        <div class="get-touch-area pl-50 pr-50">
                            <div class="section-title text-center mb-30 wow fadeInUp2 animated" data-wow-delay='.1s'>
                             <img  src="fav.png">
                            </div>
                        </div>
                    </div>





                    <div class="col-xl-7 col-lg-6 col-md-6">
                        <div class="donar-information donation-form grey-bg2 mb-30 pr-50 pl-50">
                            <div class="section-title text-left mb-50 wow fadeInUp2 animated" data-wow-delay='.1s'>
                             <!--    <h6><span><i class="fas fa-heart"></i></span> Send Message</h6> -->
                                <h2>LOGIN INTO YOUR ACCOUNT.</h2>
                            </div>
                            <div class="main-contact-area">


 <?php
      if(isset($_POST['login_now'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        
        if (empty($email) || empty($password)){
                                        ?>
                                
                                    <script type="text/javascript">
    const Toast = Swal.mixin({
  toast: true,
  position: 'center',
  showConfirmButton: true,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'error',
  title: 'All fields must be filled.'
})

</script>
                                        <?php
        }
        
        
        // $hashfomat = "$2y$10$";
        // $salt = "iusesomecrazystrings22";
        // $hash_salt = $hashfomat.$salt;
        // $password = crypt($password,$hash_salt);
        $query = "SELECT * FROM `users` WHERE `email` = '$email'";
        $results = mysqlI_query($conn,$query);
        if(!$results){
          die ("Error: ".mysqli_error($conn));
        }
          $userCount = mysqli_num_rows($results);
          if($userCount == 0){
                                                                                ?>
                                    <script type="text/javascript">
    const Toast = Swal.mixin({
  toast: true,
  position: 'center',
  showConfirmButton: true,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'error',
  title: 'The user you have entered does not exist..'
})

</script>
                                        <?php
                                        
            ?>
      <?php
         }else{
           foreach($results as $user){
             if ($password == $user['password']) {
               $dbEmail = $user['email'];
               $_SESSION['email'] = $dbEmail;

                                                                                ?>
                                    <script type="text/javascript">
    const Toast = Swal.mixin({
  toast: true,
  position: 'center',
  showConfirmButton: true,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Login successful. Re-directing to dashboard...'
})
            setTimeout(function(){ 
      window.location.href='dashboard.php'
      }, 3500);   
</script>
<?php
            

             } else {
                                                                                ?>
                                    <script type="text/javascript">
    const Toast = Swal.mixin({
  toast: true,
  position: 'center',
  showConfirmButton: true,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'error',
  title: 'Invalid username or password.'
})

</script>
                                        <?php
                                        
             }

           }

          }
        }
       ?>
       


                                <form action="" method="post">
                                 
                                        <div class="input-area mb-10">
                                            <input type="text" name="email" autofocus="" class="form-control" placeholder="Your Email Address">
                                        </div>

                                          <div class="input-area mb-10">
                                            <input type="password" name="password" class="form-control" placeholder="Your password">
                                        </div>

                               
                                    
                                        <div class="input-btn">
                                            <button type="submit" name="login_now" class="theme_btn theme_btn_bg large_btn" href="dashboard.php">LOGIN</button>
                                        </div>
                                </form>
                                


                                 <h4 class="pt-15">Don't have an account? <a style="color: deepskyblue;" href="register.php">Register Now</a></h4>
                                 
                                                                  <h4 class="pt-15">Forgot password? <a style="color: deepskyblue;" href="forgot_password.php">Reset Now</a></h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--join-team-area end-->
    


        <!--cta-area end-->
    </main>




    <!-- JS here -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.nice-select.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.easypiechart.js"></script>
    <script src="assets/js/tilt.jquery.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from www.devsnews.com/template/enacare/enacare/donation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Aug 2021 07:08:32 GMT -->
</html>