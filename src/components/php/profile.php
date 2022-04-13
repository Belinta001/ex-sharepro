<?php
include 'includes/header_logged.php';
?>
    



  <main>

        <!--page-title-area end-->
        <!--join-team-area start-->
        <section class="contacts-details-area pt-20 pb-100">
            <div class="container">
 <?php               
$email=$result['email'];

if (isset($_POST['upload_now'])) {
	$productimage1=$_FILES["productimage1"]["name"];
	 $productid=$result['id'];
	$dir="profile_pictures/$productid";
if(!is_dir($dir)){
		mkdir("profile_pictures/".$productid);
	}
move_uploaded_file($_FILES["productimage1"]["tmp_name"],"profile_pictures/$productid/".$_FILES["productimage1"]["name"]);
$query=mysqli_query($conn,"UPDATE users SET  dp_name ='$productimage1',  dp_check =  1 where email = '$email'");

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
  title: 'Profile photo updated successfully'
})
         setTimeout(function(){ 
      window.location.href='profile.php'
      }, 3500); 

</script>
                                        <?php
                                        
}
?>


        <form method="POST" action=""  enctype="multipart/form-data">
                <div class="row align-items-center">
                 <div class="col-xl-5 col-lg-6 col-md-6" style="background-color: midnightblue;" >
                        <div class="get-touch-area pl-50 pr-50">
                            <div class="section-title text-center mb-30 wow fadeInUp2 animated" data-wow-delay='.1s'>
                          <?php
                          if($result['dp_check'] == 0){
                           echo '   <img height="400px" width="400px" src="profile.png">  ';
                          }
                          else{?>
                              <img height="500px" width="auto" src="profile_pictures/<?php echo $result['id']?>/<?php echo $result['dp_name'] ?>">  
                         <?php }
                          ?>
                           
                           
                            </div>
                        </div>
                          <input name="productimage1" required  id="productimage1" required type="file"  class="form-control" enctype="multipart/form-data" >
                          <hr>
                                <div class="input-btn">
                                            <button type="submit" name="upload_now" class="theme_btn theme_btn_bg large_btn">Change Profile Photo</button>
                                        </div>
                                          <hr>
                    </div>
                    
               
                                        
            </form>


                    <div class="col-xl-7 col-lg-6 col-md-6">
                        <div class="donar-information donation-form grey-bg2 mb-30 pr-50 pl-50">
                            <div class="section-title text-left mb-50 wow fadeInUp2 animated" data-wow-delay='.1s'>
                             <!--    <h6><span><i class="fas fa-heart"></i></span> Send Message</h6> -->
                                <h2>Welcome, PROFILE PAGE.</h2>
                                <p>Your personal saved info are displayed here: </p>
                            </div>
                            <div class="main-contact-area">
                           
             
                                    <div class="input-area mb-4">
                                           <label>FULL NAME </label>
                                        <input type="text" class="form-control" required="" readonly value="<?echo strtoupper($result['fullname'])?>">
                                    </div>
                                        <div class="input-area mb-4">
                                               <label>EMAIL ADDRESS </label>
                                            <input type="email" class="form-control" required="" readonly VALUE="<?echo strtoupper($result['email'])?>">
                                        </div>

                                          <div class="input-area mb-4">
                                                 <label>PHONE NUMBER </label>
                                            <input type="text" inputmode="Number" class="form-control"  readonly required="" value="<?echo strtoupper($result['phone'])?>">
                                        </div>

   <div class="input-area mb-2">
          <label>DATE OF BIRTH </label>
                                          <input type="text" id="birthday" class="form-control" readonly required="" placeholder="Date of Birth" name="birthday" value="<?echo strtoupper($result['dob'])?>">
                                        </div>
                            </div>
                        </div>
                    </div>
                    
                    
            
                                        <div  class="col-xl-7 col-lg-6 col-md-6">
                        <div class="donar-information donation-form grey-bg2 mb-30 pr-50 pl-50">
                            <div class="section-title text-left mb-50 wow fadeInUp2 animated" data-wow-delay='.1s'>
                             <!--    <h6><span><i class="fas fa-heart"></i></span> Send Message</h6> -->
                                <h2>Update Your profile.</h2>
                                <p>Add afew more details to your profile: </p>
                            </div>
                            <div class="main-contact-area">
                           
                           
                                                           
                                <?php
if (isset($_POST['update_now'])) {
    
$email=$result['email'];

$photography=$_POST['photography'];
$curving=$_POST['curving'];
$athlete=$_POST['athlete'];
$computer=$_POST['computer'];

$biligual=$_POST['biligual'];
$crotcheting=$_POST['biligual'];
$musical=$_POST['musical'];
$influential=$_POST['influential'];


$course=$_POST['courses'];
$bio=$_POST['bio'];


   $insertSkills= "INSERT INTO `skills`(`email`, `skillset1`, `skillset2`,`skillset3` ,`skillset4` ,`skillset5` ,`skillset6` ,`skillset7`,`skillset8`)
   VALUES ('$email','$photography','$curving','$athlete','$computer','$biligual','$crotcheting', '$musical','$influential') ";
  mysqli_query($conn,$insertSkills);
  
$query=mysqli_query($conn,"UPDATE users SET  course ='$course', skills ='$bio', status = 1 where email = '$email'");
    if(!$query){
            die("error:" .mysqli_error($conn));
           }else{
           
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
  title: 'Profile updated successfully'
})
         setTimeout(function(){ 
      window.location.href='dashboard.php'
      }, 3500); 

</script>
                                        <?php
                                        
           }
               
}
?>


                           <form action="" method="post"> 
                                    <div class="input-area mb-4">
                                          
  <label style="font-size:20px; font-weight:bold;"> SKILLS / HOBBIES</label>   <br>
  <?php
  
//   get user email
     $email= $result['email'];
    $trans = "SELECT * FROM `skills` WHERE `email` = '$email'";
    $transRes = mysqli_query($conn,$trans);
    
  if($result['status'] == 1 ){
      
    if(mysqli_num_rows($transRes) > 0){
             foreach ($transRes as $transRe) {
  
   if($transRe['skillset1'] == 'photography'  ){
      echo ' <input  type="checkbox" checked id="photography" class="form"  name="photography" value="photography">  
  <label for="photography"> Photography </label>   <br>  ';
  }
  if($transRe['skillset2'] == 'curving'  ){
  echo ' <input type="checkbox" checked id="curving" class="form"  name="curving" value="curving"> 
  <label for="curving"> curving </label> <br>   ';
  }
    if($transRe['skillset3'] == 'athlete'  ){
  echo '   <input type="checkbox" checked id="athlete" class="form"  name="athlete" value="athlete"> 
  <label for="athlete"> Athlete </label> <br>  ';
  }
    if($transRe['skillset4'] == 'computer'  ){
  echo '   <input type="checkbox" checked id="computer" class="form"  name="computer" value="computer"> 
  <label for="computer"> Coding </label> <br>   ';
  }
    if($transRe['skillset5'] == 'biligual'  ){
  echo '   <input type="checkbox" checked id="biligual" class="form"  name="biligual" value="biligual"> 
  <label for="biligual"> Biligual </label> <br>  ';
  }
    if($transRe['skillset6'] == 'crotcheting'  ){
      echo '  <input type="checkbox" checked id="crotcheting" class="form"  name="crotcheting" value="crotcheting"> 
  <label for="crotcheting"> Crotcheting </label> <br>  ';
  }
      if($transRe['skillset7'] == 'musical'  ){
  echo '  <input type="checkbox" checked id="musical" class="form"  name="musical" value="musical"> 
  <label for="musical"> Musical </label> <br>  ';
  }
  
        if($transRe['skillset8'] == 'influential'  ){
  echo '      <input  type="checkbox" checked id="influential" class="form"  name="influential" value="influential"> 
  <label for="influential"> Influential </label> <br>  ';
             }
             
                     ?> </div>
  <label style="font-size:20px; font-weight:bold;"> COURSE</label>   <br>                     
                                                                                            <div class="select-area mb-10">
                                <select required disabled name="courses" id="courses">
                                    <option value="<?php echo $result['course'];?>"><?php echo $result['course'];?></option>

                                                        
                                </select>
                            </div>
             <div class="input-area mb-2">
                                              <label style="font-size:20px; font-weight:bold;"> BIO</label>   <br>
                                            <textarea  disabled name="bio" id="bio" required="" cols="30" rows="10" value="<?php echo $result['skills'] ?>" 
                                            placeholder="Got more something interesting to write ? Add bio"><?php echo $result['skills'] ?></textarea>
                                        </div> <?php
                                        
  
}//close for each statement
    }
  }//   end of checking status of profile
  
  else{
    echo '
<input type="checkbox" id="photography" class="form"  name="photography" value="photography">  
  <label for="photography"> Photography </label> <br>  
  
<input type="checkbox" id="curving" class="form"  name="curving" value="curving"> 
  <label for="curving"> curving </label> <br> 
  
  <input type="checkbox" id="athlete" class="form"  name="athlete" value="athlete"> 
  <label for="athlete"> Athlete </label> <br> 
  
  <input type="checkbox" id="computer" class="form"  name="computer" value="computer"> 
  <label for="computer"> Coding </label> <br> 
  
  <input type="checkbox" id="biligual" class="form"  name="biligual" value="biligual"> 
  <label for="biligual"> Biligual </label> <br> 
  
  <input type="checkbox" id="crotcheting" class="form"  name="crotcheting" value="crotcheting"> 
  <label for="crotcheting"> Crotcheting </label> <br> 
  
  <input type="checkbox" id="musical" class="form"  name="musical" value="musical"> 
  <label for="musical"> Musical </label> <br> 
  
    <input type="checkbox" id="influential" class="form"  name="influential" value="influential"> 
  <label for="influential"> Influential </label> <br> 
  
                                      </div>
                                    
                                                                                            <div class="select-area mb-10">
                                <select required name="courses" id="courses">
                                    <option value="">--------CHOOSE YOUR COURSE--------</option>
                                      <option value="HEALTH">HEALTH</option>
                                      <option value="ENGINEERING">ENGINEERING</option>
                                           <option value="LAW">LAW</option>
                                      <option value="HOSPITALITY">HOSPITALITY</option>
                                         <option value="CAPENTRY">CAPENTRY</option>
                                            <option value="PLUMBING">PLUMBING</option>
                                             <option value="CONSTRUCTION">CONSTRUCTION</option>
                                              <option value="CLEANING">CLEANING</option>
                                                 <option value="COMMERCE">COMMERCE</option>
                                                    <option value="COMPUTER">COMPUTER</option>
                                                       <option value="BEAUTY AND COSMETICS">BEAUTY AND COSMETICS</option>
                                                        <option value="EDUCATION">EDUCATION</option>
                                                         <option value="FIRST AID">FIRST AID</option>
                                                        
                                </select>
                            </div>
                            
                            
             <div class="input-area mb-2">
                                              <label style="font-size:20px; font-weight:bold;"> BIO</label>   <br>
                                            <textarea name="bio" id="bio" required="" cols="30" rows="10"  
                                            placeholder="Got more something interesting to write ? Add bio">  </textarea>
                                        </div>
                                        
  
  ';  
             }
 ?>
 


                                        
                                                              
              
                            
                                        
                                        <?php if ($result['status'] == 0) {
                                          echo '  <div class="input-btn">
                                            <button type="submit" name="update_now" class="theme_btn theme_btn_bg large_btn">UPDATE</button>
                                        </div>';
                                        }
                                        ?>
</form>
                   
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