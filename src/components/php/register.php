<?php
ob_start();
include "connection.php";
session_start();
#include 'includes/header.php';




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
                                <h2>Welcome, REGISTER NOW.</h2>
                            </div>
                            <div class="main-contact-area">
                                
                                
                                
                                 <?php
    if(isset($_POST['register_now'])){
         $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $phone = mysqli_real_escape_string($conn,$_POST['phone']);
        $dob = mysqli_real_escape_string($conn,$_POST['dob']);
        $password =mysqli_real_escape_string($conn,$_POST['password']);
        // $confirm_password =mysqli_real_escape_string($conn,$_POST['confirm_password']);
        $gender = mysqli_real_escape_string($conn,$_POST['gender']);
        $education  = mysqli_real_escape_string($conn,$_POST['education']);
        $date_joined  =  date('d-m-Y H:i:s') ;
        
        if(empty($fullname)||empty($email)||empty($password)||empty($phone) ||empty($dob) || empty($gender) || empty($education) ){ 
                                        ?>
                                        
                                                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                            
                                                 
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
                            }else{

        $usersU_nameinDbQuery = "SELECT * FROM `users` WHERE `phone` = '$phone'";
        $usersU_nameinDbQueryResult = mysqli_query($conn,$usersU_nameinDbQuery);
          if(mysqli_num_rows($usersU_nameinDbQueryResult)>0){
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
  title: 'Phone already in use.'
})

</script>
                                        <?php
                                        


          }
          $usersemailinDbQuery = "SELECT * FROM `users` WHERE `email` = '$email'";
          $usersemailinDbQueryResult = mysqli_query($conn,$usersemailinDbQuery);
          if(mysqli_num_rows($usersemailinDbQueryResult)>0){

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
  title: 'Email already in use.'
})

</script>
                                        <?php
                                        
          }
          
   if((mysqli_num_rows($usersU_nameinDbQueryResult) == 0) AND (mysqli_num_rows($usersemailinDbQueryResult) == 0)){
        //   $hashfomat = "$2y$10$";
        //   $salt = "iusesomecrazystrings22";
        //   $hash_salt = $hashfomat.$salt;
        //   $password = crypt($password,$hash_salt);
          
           $query = "INSERT INTO `users`(`fullname`, `email`,`phone`,`dob`, `gender`, `password`, `date_joined`, `education_level`) VALUES ('$fullname','$email','$phone','$dob','$gender','$password','$date_joined','$education')";
           $result = mysqli_query($conn,$query);
           if(!$result){
            die("error:" .mysqli_error($conn));
           }else{
              $_SESSION['email'] = $email;

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
  title: 'Account created successfully.'
})

</script>
                                        <?php
                                ?>
                                <script type="text/javascript">
        setTimeout(function(){ 
       window.location.href='dashboard.php'
      }, 3500);  
</script>
                                <?php
       }
    
   }
                            }
 }
?>


                                
                                
                                
                                <form action="" method="post" autocomplete="OFF">
                                    <div class="input-area mb-2"> 
                                        <input type="text" class="form-control"  name="fullname" required="" autofocus="on" placeholder="Your Full Name">
                                    </div>
                                        <div class="input-area mb-2" >
                                            <input type="email" class="form-control"  name="email" required=""  placeholder="Your Email Address">
                                        </div>

                                          <div class="input-area mb-2">
                                            <input type="text" inputmode="Number" name="phone" class="form-control" required="" placeholder="Your Phone Number">
                                        </div>
                                        
                                                                      <div class="select-area mb-10">
                                <select required name="education" id="education">
                                    <option value="">--------HIGHEST EDUCATION LEVEL--------</option>
                                      <option value="POSTGRADUATE">PRIMARY</option>
                                      <option value="UNDER GRADUATE">HIGH SCHOOL</option>
                                           <option value="DIPLOMA">DIPLOMA</option>
                                      <option value="CERTIFICATE">BACHELORS</option>
                                         <option value="CERTIFICATE">MASTERS</option>
                                            <option value="CERTIFICATE">POST DOCTO</option>
                                      
                                
                                </select>
                            </div>
                        
   <div class="input mb-2">
        <label>Date Of Birth </label>
                                          <input type="date" id="birthday" name="dob" class="form-control" required="" autocomplete="OFF" placeholder="Date of Birth" name="birthday">
                                        </div>

                  

                            <!--<ul class="nav nav-tabs mb-15" id="myTab" role="tablist">-->
                            <!--        <li class="nav-item">-->
                            <!--            <a class="nav-link active"  data-toggle="tab"  role="tab"-->
                            <!--                aria-controls="home" aria-selected="true">MALE</a>-->
                            <!--        </li>-->
                            <!--        <li class="nav-item">-->
                            <!--            <a class="nav-link" data-toggle="tab"  role="tab"-->
                            <!--                aria-controls="profile" aria-selected="false">FEMALE</a>-->
                            <!--        </li>-->
                            <!--    </ul>-->
                                
                                                                  <div class="select-area mb-10">
                                <select required name="gender" id="gender">
                                    <option value="">------------SELECT GENDER------------</option>
                                      <option value="MALE">MALE</option>
                                      <option value="FEMALE">FEMALE</option>
                                
                                </select>
                            </div>
                            
                            

                            <!--                       <div class="select-area mb-10">-->
                            <!--    <select required name="region" id="region">-->
                            <!--        <option value="">------------SELECT REGION------------</option>-->
                            <!--          <option value="MALE">MALE</option>-->
                            <!--          <option value="FEMALE">FEMALE</option>-->
                                
                            <!--    </select>-->
                            <!--</div>-->
                                           <div class="input-area mb-2">
                                            <input type="password" name="password"  class="form-control" required="" placeholder="Your Password">
                                        </div>

                                 
                                        <div class="input-btn">
                                            <button type="submit" name="register_now" class="theme_btn theme_btn_bg large_btn">REGISTER</button>
                                        </div>
                                </form>

                                <h4 class="pt-15">ALready have an account? <a style="color: deepskyblue;" href="login.php">Login Now</a></p>
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