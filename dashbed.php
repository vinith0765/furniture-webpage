<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>WOODS</title>
        <link rel="stylesheet" href="basic.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="icon" href="https://img.icons8.com/ios-filled/344/wood.png">

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
            <img src = "https://www.royaloakindia.com/uploads/dmfimvcmfvnrvnruvnujnfvjnrvjn800.webp" alt = "best product">
            <div class = "trend-item-content">
              <h4>Royaloak Atria King Size Bed </h4>
              <h4>35000/-Rs</h4>
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
            <img src = "https://m.media-amazon.com/images/I/91QRnD-BsNL._SL1500_.jpg" alt = "best product">
            <div class = "trend-item-content">
              <h4>Aarsun Royal Bed </h4>
              <h4>20000/- Rs</h4>
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
            <img src = "https://www.royaloakindia.com/thumbimages/ROYIND-royaloak-leon-king-bed-web-thumb.webp" alt = "best product">
            <div class = "trend-item-content">
              <h4>Malaysian Queen Size</h4>
              <h4>19000/- Rs</h4>
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
            <img src = "https://5.imimg.com/data5/SELLER/Default/2020/9/HS/HK/JU/40412555/queen-size-bed-500x500.jpg" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>Featured product </h4>
              <h2>Multicolour Queen Size Bed</h2>
              <p class = "item-price">34000/- Rs</p>
            </div>
            <p class = "text">
              Bring home the teak finish solid wood king bed that includes a sturdy, stylish, modern king bed that’s a perfect addition to your bedroom. The best part? It’s neutral shade suits almost every bedroom décor. You spend a third of your life in your bed so why not go for the best
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
            <img src = "https://www.royaloakindia.com/thumbimages/ROYIND-royaloak-leon-king-bed-web-thumb.webp" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>Featured product </h4>
              <h2>Royaloak Penang Queen Size</h2>
              <p class = "item-price">19000/- Rs</p>
            </div>
            <p class = "text">
  Bring home this quintessential queen-sized hydraulic storage bed with a sturdy, wooden frame that is made to last. It features amocha-coloured cushioned headboard with a leather-like finishing and grainy texture. The Eden Queen Bed - Leatherette comes with a timeless design to give your bedroom a sumptuous touch.
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
            <img src = "https://www.hometown.in/media/product/11/5763/26335/1-catalog_360.jpg" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>Featured product </h4>
              <h2>Alex Engineered Wood King bed</h2>
              <p class = "item-price">20,000/- Rs</p>
            </div>
            <p class = "text">
              Take home our beautiful queen-sized bed with a sturdy, wooden frame made of European Steam Beechwood that is made to last. It features a berry-coloured headboard with plush upholstery that gives it linen and a jute-like texture. The Eden Queen Bed - Berry is designed to give you the utmost comfort and become your very own paradise.

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
            <img src = "https://www.decornation.in/wp-content/uploads/2020/03/solid-wood-double-bed-2.jpg" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>featured product </h4>
              <h2>RSheesham Wood storage Bed</h2>
              <p class = "item-price">30000/- Rs</p>
            </div>
            <p class = "text">
            Bring home this quintessential queen-sized hydraulic storage bed with a sturdy, wooden frame that is made to last. It features a mocha-colored cushioned headboard with a leather-like finishing and grainy texture. The Eden Queen Bed - Fabric comes with a timeless design to give your bedroom a sumptuous touch.

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
              <img src = "https://upload.wikimedia.org/wikipedia/commons/0/04/2008-04-12_Freilichtmuseum_Detmold_%2811%29.jpg" alt = "blog image">
            </div>
            <div class = "blog-item-content">
              <a href = "#">Collection Vibrante</a>
              <div>
                <span>Seesham | Design | Furniture</span>
              </div>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-item-img">
              <img src = "https://www.homestratosphere.com/wp-content/uploads/2018/03/Bed-with-headboard-storage.jpg" alt = "blog image">
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
              <img src = "https://images.ctfassets.net/q5lwz1whkyct/73SiEkPgIWi3f0XtP6lNyc/58e5c1d2bfcfdb68eaaa427f1157a93c/11-bookcase-bed.jpg" alt = "blog image">
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
