<!DOCTYPE html>
<html>

<?php include "head.php"?>

<body>
  <div class="hero_area">
    <header class="header_section">
      <div class="container-fluid">
        
      </div>
    </header>
    <section class=" slider_section position-relative">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                  <div> <br><br><br><br><br><br><br><br><br><br>
                     
                     <h1>
                       Goal-Pro
                     </h1>
                     
                     <div class="">
                       <a href="goals.php">
                       Your Goals
                       </a>
                     </div><br><br><br><br><br><br><br><br><br><br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                  <div> <br><br><br><br><br><br><br><br><br><br>
                     
                     <h1>
                       Goal-Pro
                     </h1>
                     
                     <div class="">
                       <a href="goals.php">
                       Your Goals
                       </a>
                     </div><br><br><br><br><br><br><br><br><br><br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                  <div> <br><br><br><br><br><br><br><br><br><br>
                     
                     <h1>
                       Goal-Pro
                     </h1>
                     
                     <div class="">
                       <a href="goals.php">
                       Your Goals
                       </a>
                     </div><br><br><br><br><br><br><br><br><br><br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
  </div>



  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 0,
      navText: [],
      center: true,
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        1000: {
          items: 3
        }
      }
    });
  </script>

</body>

</html>
