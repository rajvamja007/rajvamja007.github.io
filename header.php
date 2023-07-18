    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <h2>Astonish</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="products.php" role="button"
                                aria-haspopup="true" aria-expanded="false">Products</a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="cleanser.php">Clenser</a>
                                <a class="dropdown-item" href="toner.php">Toner</a>
                                <a class="dropdown-item" href="serum.php">Serum</a>
                                <a class="dropdown-item" href="moisturizer.php">Moisturizer</a>
                                <a class="dropdown-item" href="sunscreen.php">Sunscreen</a>
                                <a class="dropdown-item" href="products.php">All Products</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">More</a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="about-us.php">About Us</a>
                                <!--<a class="dropdown-item" href="blog.php">Blog</a>-->
                                <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                                <a class="dropdown-item" href="terms.php">Terms</a>
                            </div>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="checkout.php">Checkout</a></li>

                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                    </ul>

                    <a href="addTocart.php" class="text-decoration-none">
                        <span class="position-relative">
                            <span class="bi bi-cart"></span>
                            <span class="material-icons"
                                style="font-size:23px; position:relative; left:23px; bottom:7px;">&#x1F6D2;</span>
                        </span>
                    </a>
                    <?php
                    include('connection.php');
                    $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
                    $row_count = mysqli_num_rows($select_rows);

                    ?>
                    <span class="text-decoration-none">
                        <span class="position-relative">
                            <span class="bi bi-cart"></span>
                            <span class="material-icons"
                                style="font-size:20px; color:grey; position:relative; left:23px; bottom:7px;"><?php echo $row_count ?></span>
                        </span>
                    </span>
                    <div class="text-decoration-none">
                        <span class="position-relative">
                            <i id="user-btn" class="fa fa-user"
                                style="color:grey;font-size:23px;position:relative; left:38px; bottom:7px; cursor: pointer;"></i>
                        </span>
                    </div>
                    <div class="user-box">
                        <a href="logout.php" class="btn btn-dark btn-block delete-btn" style="margin-bottom:5px;">Login</a>
                        <a href="logout.php" class="btn btn-dark btn-block delete-btn">Register</a>
                        <!-- <p><b>Username : </b><span>fvfv</span></p>
                        <p><b>Email : </b><span>sdfvv></span></p>
                        <a href="logout.php" class="btn btn-dark btn-block delete-btn">logout</a>-->
                    </div>
                </div>
            </div>
        </nav>
    </header>