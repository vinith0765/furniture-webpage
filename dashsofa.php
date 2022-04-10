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
            <img src = "https://infinite-sushi.com/wp-content/uploads/1-3-1.jpg" alt = "best product">
            <div class = "trend-item-content">
              <h4>Royal Brown Sofa With Pillows</h4>
              <h4>60000/-Rs</h4>
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
            <img src = "https://media.istockphoto.com/photos/modern-living-room-interior-3d-render-picture-id1293762741?b=1&k=20&m=1293762741&s=170667a&w=0&h=2RI8SmBN4MrEZuTvdwRzaeB887x-dukFcQBpyQ-qwS4=" alt = "best product">
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
            <img src = "https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZnVybml0dXJlfGVufDB8fDB8fA%3D%3D&w=1000&q=80" alt = "best product">
            <div class = "trend-item-content">
              <h4>Stylish Blue Sofa Chair</h4>
              <h4>30000/- Rs</h4>
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
            <img src = "https://i.pinimg.com/originals/ac/b2/c4/acb2c4d0fc417b5a092a7b6bf577f6b7.jpg" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>Featured product </h4>
              <h2>Red sofa with pillows</h2>
              <p class = "item-price">55000/- Rs</p>
            </div>
            <p class = "text">
              Color	Red
  Size	As per requirement
  Minimum Order Quantity	10 Set
  Product Description
  Our presented series of Designer Red Sofa is enormously demanded in the market for their long-lasting nature and superior finish.
  Specifications:
  Condition	Like-new
  Type	Sofa Set
  Colour	Red
  Frame Material	Sal wood
  Dimensions	8 ft * 6 ft
  Sitting Height	18 in.
  Foam Type	Royal Foam (32 density)
          Cloth Type	Rexine
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
            <img src = "https://cpimg.tistatic.com/06244283/b/4/Wooden-Single-Sofa-Chair.jpg" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>Featured product </h4>
              <h2>Single comfort sofa chair</h2>
              <p class = "item-price">10200/- Rs</p>
            </div>
            <p class = "text">
              Durable metal springs in the seat give the sofa a springy comfort, allowing you to sit, relax and enjoy it for many years.
              Seat cushions filled with high resilience foam and polyester fibre wadding give comfortable support for your body, and easily regain their shape when you get up.
              Back cushions filled with polyester fibres for soft comfort.
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
            <img src = "https://images.dfs.co.uk/i/dfs/brown-sofa-hero.jpg" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>Featured product </h4>
              <h2>Warm brown sofa</h2>
              <p class = "item-price">22000/- Rs</p>
            </div>
            <p class = "text">
                Lean into an organic look by pairing a brown sofa with earth tones. Colors like olive green, watery blue, terra-cotta, and rusty red all work well with brown because they're often seen together in nature. Choose an earthy wall color and decorate your brown sofa with neutral pillows or throws for a warm, inviting living room.
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
            <img src = "https://images.woodenstreet.de/image/cache/data%2Fwooden-sofa%2Falanis-wooden-sofa%2Frevised%2Fhoney%2Ffront-3-1-1-574x396.jpg" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>featured product </h4>
              <h2>wide comfortable sofa</h2>
              <p class = "item-price">29500/- Rs</p>
            </div>
            <p class = "text">
              The section sofa is a multi-piece sofa. Common number of pieces are 3 and 5. It can be arranged in a number of configurations. The more pieces, the more configurations. Ideally, any sectional you purchase will include fixtures that connect the pieces to keep them from separating.
              Due to the massive and growing popularity of sectionals, there are many, many styles, designs and materials to choose  from. Some are huge and can span large rooms while others are much smaller.
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
              <img src = "https://i.pinimg.com/originals/b4/c8/ee/b4c8eebfd6dc215cf19b5fc4ccbbf18f.jpg" alt = "blog image">
            </div>
            <div class = "blog-item-content">
              <a href = "#">Sofa Couch</a>
              <div>
                <span>Seesham | Design | Furniture</span>
              </div>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-item-img">
              <img src = "https://rukminim1.flixcart.com/image/416/416/kbxzbm80/sofa-set/y/c/6/brown-synthetic-light-brown01-3-1-1-furniq-brown-original-imaft5tyxvqz84ru.jpeg?q=70" alt = "blog image">
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
              <img src = "https://cdn2.sofadreams.com/media/catalog/product/cache/fe87a6ed959c6b0916207c228b60792b/s/o/sofa_wohnlandschaft_leder_ragusa_u_form_beleuchtung_beige_1_1.jpg" alt = "blog image">
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
