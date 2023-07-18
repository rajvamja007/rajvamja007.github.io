<?php
include ("header.php");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Astonish</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <!--  <div class="owl-banner owl-carousel">  Salider -->
        <div class="banner-item-01 page-heading">
            <div class="text-content">
                <h4>Relaunch</h4>
                <h6 style="color:#929292;">Relaunching! Our clear, water-resistant Invisible</br>
                    SPF 40 is now available in a new look & at a </br>
                    highly affordable price. All this with the same ,</br>
                    effective formulation.</h6>
                <h2>Invisible Sunscreen SPF 40</h2>
                <button class="btn btn-dark btn-block,col-sm-6,"><a href="products.php" style="color:white;">Shop Now
                    </a></butoon>
            </div>
        </div>
        <!-- <div class="banner-item-02">
            <div class="text-content">
              <h4>Fugiat Aspernatur</h4>
              <h2>Laboriosam reprehenderit ducimus</h2>
            </div>
          </div>
          <div class="banner-item-03">
            <div class="text-content">
              <h4>Saepe Omnis</h4>
              <h2>Quaerat suscipit unde minus dicta</h2>
            </div>
          </div>-->
    </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Featured Products</h2>
                        <a href="products.php">view more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>

                <?php
    include('connection.php');
    $sql = "SELECT * FROM products ORDER BY RAND() LIMIT 4;
    ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $p_id=$row["p_id"];
            $p_name=$row["p_name"];
            $p_img=$row["p_img"];
            $p_mrp=$row["p_mrp"];
            $p_price=$row["p_price"];
            $p_desc=$row["p_desc"];
            ?>

                <div class="col-md-4">
                    <div class="product-item">
                        <a href="product-details.php?p_id=<?php echo $p_id; ?>"><img src="assets\product_img\<?php echo $p_img ?>"
                                alt=""></a>
                        <div class="down-content">
                            <a href="product-details.php?p_id=<?php echo $p_id; ?>">
                                <h4><?php echo $p_name ?></h4>
                            </a>
                            <h6><small><del>₹<?php echo $p_mrp ?></del></small> ₹<?php echo $p_price ?></h6>
                            <p><?php echo $p_desc ?></p>
                        </div>
                    </div>
                </div>

                <?php
        }
    } else {
        echo "No products found.";
    }
    mysqli_free_result($result);
    mysqli_close($conn);
?>

                <div class="best-features">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-heading">
                                    <h2>About Us</h2>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="left-content">
                                    <p>Founded in 2023 with the belief that beauty industry requires a revolution with
                                        respect to TRANSPARENCY. There is lot of inaccurate advice & incorrect claims
                                        being made by beauty brands which results in fear mongering, misconceptions and
                                        eventually consumers making wrong decisions.</p>
                                    <p>For example, the blind march towards beauty products with 'Natural' claims is
                                        really concerning. There is a misconception that 100% natural is safe &
                                        effective and anything that sounds like a chemical is unsafe. This is completely
                                        wrong.</p>
                                    <h3 style="text-align:center;">Hide <strong>Nothing.</strong></h3></br>
                                    <p>
                                    <h6>"Everything is a chemical – water is a chemical – therefore, chemical-free
                                        products don’t exist."</h6>
                                    </p>
                                    <p>We wanted to address this issue of lack of transparency through a range of
                                        products that are straightforward, honest and do what they claim to do. No
                                        unnecessary marketing fluff. And this is how <b>Astonish</b> was born.</p>

                                    <!--<ul class="featured-list">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetur an adipisicing elit</a></li>
                <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                <li><a href="#">Corporis, omnis doloremque</a></li>
              </ul>-->
                                    <a href="about-us.php" class="filled-button">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="right-image">
                                    <img src="assets/images/about-1-570x350.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="services"
                    style="background-image: url(assets/images/other-image-fullscren-1-1920x900.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-heading">
                                    <h2>Shop by concerns</h2>

                                    <a href="products.php">read more <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="service-item">
                                    <a href="#" class="services-item-image"><img src="assets/images/blog-1-370x270.jpg"
                                            class="img-fluid" alt=""></a>
                                    <div class="down-content">
                                        <h3 class="h3"><a href="cleanser.php" style="color:black;">Cleanse</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="service-item">
                                    <a href="#" class="services-item-image"><img src="assets/images/blog-2-370x270.jpg"
                                            class="img-fluid" alt=""></a>
                                    <div class="down-content">
                                        <h3><a href="serum.php" style="color:black;">Treat</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="service-item">
                                    <a href="#" class="services-item-image"><img src="assets/images/blog-3-370x270.jpg"
                                            class="img-fluid" alt=""></a>
                                    <div class="down-content">
                                        <h3><a href="sunscreen.php" style="color:black;">Protect</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="happy-clients">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-heading">
                                    <h2>Happy Clients</h2>

                                    <a href="testimonials.php">read more <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="owl-clients owl-carousel text-center">
                                    <?php
    include('connection.php');
    $sql = "SELECT * FROM testimonial limit 6;
    ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $name=$row["name"];
            $testimonial_data=$row["testimonial_data"];
            ?>

                                    <div class="service-item">
                                        <div class="icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="down-content">
                                            <h4><?php echo $name; ?></h4>
                                            <p class="n-m"><em>"<?php echo $testimonial_data; ?>"</em></p>
                                        </div>
                                    </div>


                                    <?php
        }
    } else {
        echo "No testimonial found.";
    }
    mysqli_free_result($result);
    mysqli_close($conn);
  ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="center-contact">
                    <div class="call-to-action">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="inner-content">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h4>Astonish</h4>
                                                <p>Welcome to <b>Astonish</b>. For any questions or queries, listed
                                                    below are ways in which you can reach us.</p>
                                            </div>
                                            <div class="col-lg-4 col-md-6 text-right">
                                                <a href="contact.php" class="filled-button">Contact Us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include ("footer.php") ?>
                </div>
                <!-- Bootstrap core JavaScript -->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


                <!-- Additional Scripts -->
                <script src="assets/js/custom.js"></script>
                <script src="assets/js/owl.js"></script>
</body>

</html>