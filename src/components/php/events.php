<?php
include 'includes/header_logged.php';

    if($result['status'] == 0){
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
  icon: 'info',
  title: 'Update Your profile to continue.'
})
         setTimeout(function(){ 
      window.location.href='profile.php'
      }, 3500);  

</script>
                                        <?php
  }
?>

    <main>

        <!--page-title-area start-->
        <section class="page-title-area" style="">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3">
                        <div class="page-title-wrapper text-center pt-100">
                            <div class="page-title-box">
                                <h2 class="page-title">Events</h2>
                                <ul class="breadcrumb-list">
                                    <li><a href="index.php">Dashboard <i class="far fa-chevron-right"></i></a></li>
                                    <li><a href="#">Events</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page-title-area end-->
        <!--events-area start-->
        <section class="events-area events-style-1 pb-100">
            <div class="container-fluid pl-20 pr-20">
                <div class="row no-gutters align-items-center">
                    <!--<div class="col-xl-12 col-lg-12 col-md-12">-->
                    <!--    <div class="events-video-area pos-rel mb-30" style="background-image: url(assets/img/events/01.jpg);">-->
                    <!--        <div class="video-area pos-abl">-->
                    <!--            <a href="#" class="popup-video"><i class="fas fa-play"></i></a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->


                    
                    <div class="col-xl-12 col-lg-12 col-md-12 pr-70">
                        <div class="events-wrapper grey-bg2 mb-30">
                            <div class="events active pos-rel wow fadeInUp2 animated" data-wow-delay='.3s'>
                                <div class="events__back" style="background-image: url(assets/img/events/02.jpg);"></div>
                                <ul class="events__list__one align-items-center justify-content-between pl-50 pr-50">
                                    <li>
                                        <div class="events__content">
                                            <span><i class="far fa-calendar-alt"></i>  2022</span>
                                            <h3 class="mb-15"><a href="#">Pad Drive</a></h3>
                                            <p>Girls benefiting</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="events__btn text-md-center text-xl-right">
                                            <a class="theme_btn theme_btn_bg" href="#">join event <span><i class="fas fa-heart"></i></span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="events pos-rel wow fadeInUp2 animated" data-wow-delay='.5s'>
                                <div class="events__back" style="background-image: url(assets/img/events/02.jpg);"></div>
                                <ul class="events__list__one align-items-center justify-content-between pl-50 pr-50">
                                    <li>
                                        <div class="events__content">
                                            <span><i class="far fa-calendar-alt"></i> 2022</span>
                                            <h3 class="mb-15"><a href="#">Mentorship</a></h3>
                                            <p>Something new or a talent in the field</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="events__btn text-md-center text-xl-right">
                                            <a class="theme_btn theme_btn_bg" href="#">join event <span><i class="fas fa-heart"></i></span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--events-area end-->
    </main>


<?php
include 'includes/footer-rest.php';
?>



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


<!-- Mirrored from www.devsnews.com/template/enacare/enacare/team-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Aug 2021 07:08:32 GMT -->
</html>