<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light navigation">
                    <a class="navbar-brand" href="index.php">
                        <img src="images/wheelXchange(1).png" alt="logo" style="height: 40px ; width: 150px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black" class="bi bi-person"
                            viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                        </svg>


                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav main-nav ">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="cars.php">Buy
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#!">Sell
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="Service.php">Service
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-slide @@dashboard">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#!">Dashboard<span><i
                                            class="fa fa-angle-down"></i></span>
                                </a>

                                <!-- Dropdown list -->
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item " href="dashboard.html">Dashboard</a>
                                    </li>
                                    <li><a class="dropdown-item @@dashboardMessages" href="dashboard-my-ads.html">My
                                            Cars</a></li>
                                    <li><a class="dropdown-item @@dashboardFavouriteAds"
                                            href="dashboard-favourite-ads.html"> Favourite Car</a></li>
                                    <li class="dropdown dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Sub Menu</a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                                            <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                                            <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        
                        <?php        
                        if ($_SESSION['email'] == null){
                            echo "Hello User" . $_SESSION['email'];
                            ?>
                            <ul class="navbar-nav ml-auto mt-10">
                                <li class="nav-item">
                                    <a class="nav-link login-button" href="login.php">Login</a>
                                </li>
                            </ul>
                            <?php }
                        else {
                            echo "Welcome: " . $_SESSION['email'];
                            echo '<ul class="navbar-nav ml-auto mt-10">';
                            echo '<li class="nav-item">';
                            echo '   <a class="nav-link login-button" href="logout.php">Logout</a>';
                            echo '</li>';
                            echo  '</ul>';
                        }
                        ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>