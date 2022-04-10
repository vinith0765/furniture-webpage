<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

  <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Woods</title>
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
            <img src = "https://img.edilportale.com/products/BAIA-DE-CASTELLI-540239-relb56bf0bf.jpg?1641443716366" alt = "best product">
            <div class = "trend-item-content">
              <h4>DE CASTAELLI</h4>
              <h4>6021/-Rs</h4>
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
            <img src = "https://img.edilportale.com/product-thumbs/2b_less-table-materia-540203-relf15eebd4.jpg" alt = "best product">
            <div class = "trend-item-content">
              <h4>SOFTLINE 1979</h4>
              <h4>7179/- Rs</h4>
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
            <img src = "https://img.edilportale.com/product-thumbs/2b_table-ditre-italia-465287-rel34f0e365.jpg" alt = "best product">
            <div class = "trend-item-content">
              <h4>CENTRAL PARK</h4>
              <h4>6863/- Rs</h4>
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
            <img src = "https://f1af951e8abcbc4c70b9-9997fa854afcb64e87870c0f4e867f1d.lmsin.net/1000008224936-1000008224936-1612_01-750-1.jpg" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>Featured product </h4>
              <h2>Montoya Brown Wood 4 Seater Dining Table with 4 chairs</h2>
              <p class = "item-price">33,526/- Rs</p>
            </div>
            <p class = "text">
  This set which comes with 6 chairs and a table is tailor-made for your house furniture collection. It is made of engineered wood with a smooth surface with no grain makes it easier to work and paint. It is resistant to termite and wood borers. Rubberwood is durable, strong, tough, and resilient. It is easy to take care of and is stain-resistant. Montoya chair is made of rubberwood. The chair seat is Polyester which is synthetic and easily recyclable material with high tensile strength and durability and lasts much longer. High-quality High-resilient foam is used in chair seats.
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
            <img src = "https://img.edilportale.com/product-thumbs/2b_asolo-agapecasa-371967-relfa196368.jpg" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>Featured product </h4>
              <h2>ASOLO-Rectangular marble table</h2>
              <p class = "item-price">10200/- Rs</p>
            </div>
            <p class = "text">
              The Asolo table series explores the exceptional resistance quality of stone material, utilized here as the sole material. Tables in various sizes in white Carrara marble, black Marquina marble, grey Carnico marble, green Alpi marble and Emperador dark marble, with two sloping trapezoidal legs. Tables with special sizes and finishes are also available. All Agapecasa products are designed and manufactured for internal use. They cannot be placed outside unless otherwise indicated.

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
            <img src = "https://empire-s3-production.bobvila.com/slides/29888/original/Large_diy-Dining_Table.jpg?1547877705" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>Featured product </h4>
              <h2>SCHIFFINI-LEPIC Rectangular dining table</h2>
              <p class = "item-price">22,000/- Rs</p>
            </div>
            <p class = "text">
              Lepic is a table with a complete solid natural oak structure and top made of plated oak slats with mat protective surface varnish. A project that reflects the creative philosophy of the designer Jasper Morrison based on the concept of super normal that, in the case of Lepic, translates into the refinement of every single detail and the essentiality of the design. Lepic is in fact a seemingly simple and straightforward system but full of details, carefully thought combinations of different materials and endless compositional variants.


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
            <img src = "https://img.edilportale.com/product-thumbs/2b_prodotti-132252-rel4ae1021ac4b24800bd231dea2c34aae8.jpg" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>featured product </h4>
              <h2>Rectangular glass dining table</h2>
              <p class = "item-price">18500/- Rs</p>
            </div>
            <p class = "text">
              An elegant dining room table, a multi-functional conference table or an ergonomic workspace - the USM Haller Table fulfills every function with various forms, materials and accessories. Useful accessories that are attached to the table expand its functionality and provide space for a variety of uses. An optional hinged cover on the table offers a clean solution for easy network access. Using a patented height adjustment feature, the tables can be freely adjusted from 680 to 860 mm, thus adjusting to the individual needs of its users. This makes it ideally suited to desk sharing.


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
              <img src = "https://img.edilportale.com/product-thumbs/2b_vibrante-arredamenti-mariani-di-morazzoni-maurizio-c-565671-rel128baacb.jpg" alt = "blog image">
            </div>
            <div class = "blog-item-content">
              <a href = "#">Mariani Collection Vibrante</a>
              <div>
                <span>Seesham | Design | Furniture</span>
              </div>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-item-img">
              <img src = "https://img.edilportale.com/product-thumbs/2b_FE-FE-Oval-table-Opinion-Ciatti-114068-reld7428fcd.jpg" alt = "blog image">
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
              <img src = "https://img.edilportale.com/product-thumbs/2b_T2209-O-SIGMA-L2-568791-rel2db56251.jpg" alt = "blog image">
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
