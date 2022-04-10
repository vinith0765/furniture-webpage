<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sofas</title>
    <link rel="stylesheet" href="basic.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  </head>
  <body>
    <!--title navabar-->
    <div class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="" alt="">WOODS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="dashsofa.php">Sofas</a></li>
            <li><a class="dropdown-item" href="dashtable.php">Tables</a></li>
            <li><a class="dropdown-item" href="dashbed.php">Beds</a></li>
              <li><a class="dropdown-item" href="dashchair.php">Chairs</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="dashboard.php">Return Home</a></li>
          </ul>
        </li>
        <li><a href="cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg></a>
  </li>
   <br>
      </ul>
    </div>

    Hey, <?php echo $_SESSION['username']; ?>
    <button type="button" class="btn btn-warning"><a href="logout.php">     Logout</a></button>
      </div>
    </div>

</nav>








    <!-- trending product -->
    <section class = "trend">
      <div class = "container">
        <div class = "title">
          <h4>Trending now</h4>
          <h2>Best selling products</h2>
        </div>

        <div class = "trend-grid">
          <!-- item -->
          <div class = "trend-item">
            <img src = "https://img.edilportale.com/product-thumbs/2b_marfa-chair-with-4-spoke-base-cappellini-by-cap-design-551739-relebe69981.jpg" alt = "best product">
            <div class = "trend-item-content">
              <h4>Cappellini-MARFA</h4>
              <h4>4575/-Rs</h4>
              <div class = "stars">
                <span><i class='bx bxs-star'></i></span>
                <span><i class='bx bxs-star'></i></span>
                <span><i class='bx bxs-star'></i></span>
                <span><i class='bx bxs-star'></i></span>
                <span><i class='bx bxs-star'></i></span>
              </div>
              <div class = "featured-btns">
                <button type = "button" class = "btn">Purchase</button>
              </div>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "trend-item">
            <img src = "https://img.edilportale.com/product-thumbs/2b_baltic-remix-trestle-based-chair-mdd-567765-rel6275b8a3.jpg" alt = "best product">
            <div class = "trend-item-content">
              <h4>Comfortable Luxurious Sofa</h4>
              <h4>85000/- Rs</h4>
              <div class = "stars">
                <span><i class='bx bxs-star'></i></span>
                <span><i class='bx bxs-star'></i></span>
                <span><i class='bx bxs-star'></i></span>
                <span><i class='bx bxs-star'></i></span>
                <span><i class='bx bxs-star'></i></span>
              </div>
              <div class = "featured-btns">
                <button type = "button" class = "btn">Purchase</button>
              </div>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "trend-item">
            <img src = "https://img.edilportale.com/product-thumbs/2b_regia-chair-with-4-spoke-base-las-mobili-568121-rel851e6ab4.jpg" alt = "best product">
            <div class = "trend-item-content">
              <h4>Las Mobilla-REGIA</h4>
              <h4>6269/- Rs</h4>
              <div class = "stars">
                <span><i class='bx bxs-star'></i></span>
                <span><i class='bx bxs-star'></i></span>
                <span><i class='bx bxs-star'></i></span>
                <span><i class='bx bxs-star'></i></span>
                <span><i class='bx bxs-star'></i></span>
              </div>
              <div class = "featured-btns">
                <button type = "button" class = "btn">Purchase</button>
              </div>
            </div>
          </div>
          <!-- end of item -->
        </div>
      </div>
    </section>
    <!-- end of trending product -->

    <div class = "underline"></div>

    <!-- featured product -->
    <section class = "featured">
      <div class = "container">
        <!-- item -->
        <div class = "featured-item">
          <div class = "featured-item-img">
            <img src = "https://img.edilportale.com/product-thumbs/2b_LODOVICA-IOC-project-partners-549555-relb52c3ea7.jpg" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>Featured product </h4>
              <h2>LODOVICA-Meeting chair</h2>
              <p class = "item-price">11710/- Rs</p>
            </div>
            <p class = "text">
            LODOVICA is perfect for a range of contexts: from the working environment - meeting rooms, executive workstations or lounge areas -, to informal and domestic settings – dining areas, training or waiting rooms. The slender backrest embraces the chair's round seat to create a compact yet elegant form. The metal base can be chrome or epoxy powder-coated in black or white.
            </p>
            <div class = "featured-btns">
              <button type = "button" class = "btn">Purchase</button>
            </div>
          </div>
        </div>
        <!-- end of item -->
        <!-- item -->
        <div class = "featured-item">
          <div class = "featured-item-img">
            <img src = "https://img.edilportale.com/product-thumbs/2b_vuelta-chair-wittmann-439231-rel743e3442.jpg" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>Featured product </h4>
              <h2>VUELTA FD-Upholstered chair</h2>
              <p class = "item-price">9750/- Rs</p>
            </div>
            <p class = "text">
              Setting design, comfort and independence of form atop four legs to create an upholstered chair that unites function and aesthetics, is the height of artistic design. Featuring typical Vuelta stitching, the upholstered seat has a comfortable pocket-sprung core. The curved shape of the backrest gently tapers forward to form an armrest. Vuelta Dining Chair is supported by graceful tubular legs in a choice of black or – for a particularly refined look – satin matt brass. The metal core of the frame is clad in wood,can be coated in any colour of the rainbow.
            </p>
            <div class = "featured-btns">
              <button type = "button" class = "btn">Purchase</button>
            </div>
          </div>
        </div>
        <!-- end of item -->
        <!-- item -->
        <div class = "featured-item">
          <div class = "featured-item-img">
            <img src = "https://img.edilportale.com/product-thumbs/2b_prodotti-135513-rel6917dcaf017c4594a3bbcd48e78bab49.jpg" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>Featured product </h4>
              <h2>EXTREMIS-Captain's chair</h2>
              <p class = "item-price">11575/- Rs</p>
            </div>
            <p class = "text">
                The Captain’s chair owes its name to its shape, which draws inspiration from yacht helm chairs. Its purpose is to create a single Marina picknick table combining a comfort zone with comfortable chairs, with a budget zone with attached seating benches.The final result is a shell chair offering unrivalled seating comfort. Its wide shell offers ultimate seating pleasure, even for big or tall people. The chair’s standard colour is white, but on request it is also available in other colours.
            </p>
            <div class = "featured-btns">
              <button type = "button" class = "btn">Purchase</button>
            </div>
          </div>
        </div>
        <!-- end of item -->
        <!-- item -->
        <div class = "featured-item">
          <div class = "featured-item-img">
            <img src = "https://img.edilportale.com/product-thumbs/2b_SHOWTIME-Chair-with-castors-BD-Barcelona-Design-405814-rel5a7678b8.jpg" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>featured product </h4>
              <h2>Swivel upholstred chair with castors-Showtime chair</h2>
              <p class = "item-price">12500/- Rs</p>
            </div>
            <p class = "text">
              The Showtime Chair gives honour to the very name of this collection. Two distinct leg structures, optional armrests with a wide variety of finishes - wooden or lacquered in diverse colours and upholstered in different materials, which avails all possible combinations and contrasts. A collection in which plastics consort with upholstery, the gleam of lacquered wood and the tradition of fine ceramics.

            <div class = "featured-btns">
              <button type = "button" class = "btn">Purchase</button>
            </div>
          </div>
        </div>
        <!-- end of item -->
      </div>
    </section>
    <!-- end of featured product -->

    <!-- Future -->
    <section class = "blog">
      <div class = "container">
        <div class = "title">
          <h4>Future Launches</h4>
          <h2>Pre Bookings will be released soon</h2>
        </div>

        <div class = "blog-grid">
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-item-img">
              <img src = "https://img.edilportale.com/product-thumbs/2b_STEALTH-Chair-HOOKL-und-STOOL-240374-rel718c586f.png" alt = "blog image">
            </div>
            <div class = "blog-item-content">
              <a href = "#">Solid Wood Chair</a>
              <div>
                <span>Seesham | Design | Furniture</span>
              </div>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-item-img">
              <img src = "https://img.edilportale.com/product-thumbs/2b_HAMAR-ETRO-Home-Interiors-450900-rel4fbd6b9f.jpg" alt = "blog image">
            </div>
            <div class = "blog-item-content">
              <a href = "#">Releasing on the ocassion of Christmas</a>
              <div>
                <span>Royal | Design | Furniture</span>
              </div>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-item-img">
              <img src = "https://img.edilportale.com/product-thumbs/2b_softly-chair-olivieri-475897-rel1cd7f657.jpg" alt = "blog image">
            </div>
            <div class = "blog-item-content">
              <a href = "#">Releasing on the ocassion of New Year</a>
              <div>
                <span>Plain Royal| Design | Furniture</span>
              </div>
            </div>
          </div>
          <!-- end of item -->
        </div>
      </div>
    </section>

</section>

  </body>
</html>
