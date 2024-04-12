<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <titleSLV Prasad Hospital</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/favicon.svg">

   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/meanmenu.min.css">
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet" href="assets/css/swiper.min.css">
   <link rel="stylesheet" href="assets/css/slick.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/fontawesome-pro.css">
   <link rel="stylesheet" href="assets/css/spacing.css">
   <link rel="stylesheet" href="assets/css/main.css">
   <style>
    /* Your existing CSS styles */
    /* ... */
    .tiler {
      display: inline-block;
      cursor: pointer;
      visibility: hidden;
      width: 33.3%;
      margin: auto;
      padding: 5px;
    }
    .tiler img {
      display: block;
      margin: auto;
      max-width: 100%;
      height: auto;
      visibility: visible;
    }
    .tiler .cell-grid {
      background-position: center center;
      margin: auto;
      position: fixed;
      top: 1em;
      bottom: 1em;
      left: 1em;
      right: 1em;
      z-index: 10;
      max-width: 1000px;
      max-height: 600px;
      perspective: 30px;
    }
    .tiler .cell {
      pointer-events: none;
      opacity: 0;
      transform: translateZ(-15px);
      transform-style: preserve-3d;
      transition-property: transform, opacity;
      transition-duration: 0.5s, 0.4s;
      transition-timing-function: cubic-bezier(0.65, 0.01, 0.15, 1.33);
      /* The center character index */
      --center-x: calc((var(--col-total) - 1) / 2);
      --center-y: calc((var(--row-total) - 1) / 2);
      /* Offset from center, positive & negative */
      --offset-x: calc(var(--col-index) - var(--center-x));
      --offset-y: calc(var(--row-index) - var(--center-y));
      /* Absolute distance from center, only positive */
      --distance-x: calc((var(--offset-x) * var(--offset-x)) / var(--center-x));
      /* Absolute distance from center, only positive */
      --distance-y: calc((var(--offset-y) * var(--offset-y)) / var(--center-y));
      transition-delay: calc(0.1s * var(--distance-y) + 0.1s * var(--distance-x));
    }
    .tiler-overlay {
      z-index: 2;
    }
    .tiler:hover .cell {
      transform: scale(1);
      opacity: 1;
    }
 
    .main {
      display: flex;
      flex-wrap: wrap;
      /* max-width: 800px; */
      padding: 2em;
      margin: auto;
    }
    .preview-overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      z-index: 1000;
    }
    .preview-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
    .preview-image {
      display: block;
      margin: auto;
      max-width: 100%;
      max-height: 70vh;
    }
    .preview-navigation {
      text-align: center;
      margin-top: 10px;
    }
    .preview-navigation button {
      background-color: #333;
      color: #fff;
      border: none;
      padding: 8px 16px;
      margin: 0 5px;
      cursor: pointer;
    }
  </style>
</head>

<body>

   <!-- preloader start -->
   <div id="preloader">
      <div class="bd-loader-inner">
         <div class="bd-loader">
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
         </div>
      </div>
   </div>
   <!-- preloader start -->

   <!-- Back to top start -->
   <div class="backtotop-wrap cursor-pointer">
      <svg class="backtotop-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- Back to top end -->

   <!-- search area start -->
   <div class="df-search-area">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="df-search-form">
                  <div class="df-search-close text-center mb-20">
                     <button class="df-search-close-btn df-search-close-btn"></button>
                  </div>
                  <form action="#">
                     <div class="df-search-input mb-10">
                        <input type="text" placeholder="Search for product...">
                        <button type="submit"><i class="flaticon-search-1"></i></button>
                     </div>
                     <div class="df-search-category">
                        <span>Search by : </span>
                        <a href="#">Healthline, </a>
                        <a href="#">COVID-19, </a>
                        <a href="#">Surgery, </a>
                        <a href="#">Surgeon, </a>
                        <a href="#">Medical research</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- search area end -->

    <!-- Offcanvas area start -->
    <div class="fix">
      <div class="offcanvas__info">
         <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo">
                     <a href="dashboard.html">
                        <img src="assets/imgs/logo/slvlogo.jpg" alt="logo not found" style="width:100px !important">
                     </a>
                  </div>
                  <div class="offcanvas__close">
                     <button>
                        <i class="fal fa-times"></i>
                     </button>
                  </div>
               </div>

               <div class="mobile-menu fix mb-40"></div>
               <div class="offcanvas__contact mt-30 mb-20">
                  <h4>Contact Info</h4>
                  <ul>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                           <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a target="_blank"
                              href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">SLV Prasad Hospital, 4/38, 1st Main Rd, opposite Inland Edilon Apartment, Industrial Area, 4th Phase, Yelahanka New Town</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                           <i class="far fa-phone"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a href="tel:+08042042435">08042042435</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                           <i class="fal fa-envelope"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a href="mailto:prasadhospitalyel@gmail.com."><span>prasadhospitalyel@gmail.com.</span></a>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="offcanvas__social">
                  <ul>
                     <li><a href="https://www.facebook.com/hospital.slvprasad/"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="https://www.instagram.com/slv_prasad_hospital/"><i class="fab fa-instagram"></i></a></li>
                     <li><a href="https://www.linkedin.com/company/slv-prasad-hospital/"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="offcanvas__overlay"></div>
   <div class="offcanvas__overlay-white"></div>
   <!-- Offcanvas area start -->

   <!-- Header area start -->
   <?php include 'header.php'; ?>
   <!-- Header area end -->

   <!-- Body main wrapper start -->
   <main>

      <!-- Breadcrumb area start  -->
      <div class="breadcrumb__area theme-bg-1 p-relative z-index-11 pt-95 pb-95">
         <div class="breadcrumb__thumb" data-background="assets/imgs/banner/aboutbreadcrumb-bg.jpg"></div>
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xxl-12">
                  <div class="breadcrumb__wrapper text-center">
                     <h2 class="breadcrumb__title">Our Gallery</h2>
                     <div class="breadcrumb__menu">
                        <nav>
                           <ul>
                              <li><span><a href="index.html">Home</a></span></li>
                              <li><span>Gallery</span></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Breadcrumb area start  -->

      <div class="main">
    <div class="tiler">
      <img style="width: 100% ;height: 100% !important ;" src="assets/imgs/Gallery/img1.jpg" onclick="showPreview(0)" />
    </div>
    
    <div class="tiler">
      <img  style="width: 100% ;height: 100% !important ;"src="assets/imgs/Gallery/ICU.jpg" onclick="showPreview(1)" />
    </div>
    
    <div class="tiler">
      <img style="width: 100% ;height: 100% !important ;" src="assets/imgs/Gallery/ICU2.jpg" onclick="showPreview(2)" />
    </div>
    <div class="tiler">
      <img  style="width: 100% ;height: 100% !important ;" src="assets/imgs/Gallery/Reception2.jpg" onclick="showPreview(3)" />
    </div>
    
    <div class="tiler">
      <img src="assets/imgs/Gallery/OT-1.jpg" onclick="showPreview(4)" />
    </div>
    
    <div class="tiler">
      <img  style="width: 100% ;height: 100% !important ;" src="assets/imgs/Gallery/Ventilator2.jpg" onclick="showPreview(5)" />
    </div>
    <div class="tiler">
      <img   style="width: 100% ;height: 100% !important ;" src="assets/imgs/Gallery/LAB2.jpg" onclick="showPreview(6)" />
    </div>
    <div class="tiler">
      <img   style="width: 100% ;height: 100% !important ;" src="assets/imgs/Gallery/LabourRoom_OT2.jpg" onclick="showPreview(7)" />
    </div>
    <div class="tiler">
      <img   style="width: 100% ;height: 100% !important ;" src="assets/imgs/Gallery/SemiDelux2.jpg" onclick="showPreview(8)" />
    </div>
    
    <!-- Repeat for other images... -->
    
    <div class="preview-overlay" id="previewOverlay">
      <div class="preview-container">
        <span id="closeButton" style="cursor: pointer; position: absolute; top:-32px; right: -12px; font-size: 30px;color: white;"><i class="fa-regular fa-circle-xmark"></i></span>
        <img class="preview-image" id="previewImage" src="" alt="Preview Image">
        <div class="preview-navigation">
          <button onclick="changePreview(-1)"><i class="text-warning fa-solid fa-backward"></i></button>
          <button onclick="changePreview(1)"><i class="text-warning fa-solid fa-forward"></i></button>
        </div>
      </div>
    </div>
  </div>
  
 
 


     

   </main>
   <!-- Body main wrapper end -->

   <!-- Footer area start -->
   <?php include 'footer.php'; ?>
   <!-- Footer area end -->

   <!-- JS here -->
   <script src="assets/js/jquery-3.6.0.min.js"></script>
   <script src="assets/js/waypoints.min.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/meanmenu.min.js"></script>
   <script src="assets/js/swiper.min.js"></script>
   <script src="assets/js/slick.min.js"></script>
   <script src="assets/js/magnific-popup.min.js"></script>
   <script src="assets/js/counterup.js"></script>
   <script src="assets/js/wow.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/beforeafter.jquery-1.0.0.min.js"></script>
   <script src="assets/js/main.js"></script>
   <script>
    var images = [
      "assets/imgs/Gallery/img1.jpg",
      "assets/imgs/Gallery/ICU.jpg",
      "assets/imgs/Gallery/ICU2.jpg" ,
      "assets/imgs/Gallery/Reception2.jpg" ,
      "assets/imgs/Gallery/OT-1.jpg" , 
      "assets/imgs/Gallery/Ventilator2.jpg",
      "assets/imgs/Gallery/LAB2.jpg",
      "assets/imgs/Gallery/LabourRoom_OT2.jpg",
      "assets/imgs/Gallery/SemiDelux2.jpg",

    ];

    var currentIndex = 0;

    function showPreview(index) {
      currentIndex = index;
      var previewOverlay = document.getElementById('previewOverlay');
      var previewImage = document.getElementById('previewImage');

      previewImage.src = images[index];
      previewOverlay.style.display = 'block';
    }

    function changePreview(offset) {
      currentIndex += offset;
      if (currentIndex < 0) {
        currentIndex = images.length - 1;
      } else if (currentIndex >= images.length) {
        currentIndex = 0;
      }
      showPreview(currentIndex);
    }

    document.getElementById('closeButton').addEventListener('click', function() {
      document.getElementById('previewOverlay').style.display = 'none';
    });
  </script>
</body>

</html>