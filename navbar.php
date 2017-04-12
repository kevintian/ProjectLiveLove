<nav id="topNav" class="navbar static-top navbar-toggleable-sm navbar-inverse bg-inverse">
    <div class="navbar-collapse collapse">
        <!--Hack to center navbar brand relatively-->
    </div>
    <a class="navbar-brand mx-auto font-bold" href="home.php">
        <img src="img/mylivelovewhite.png" class="d-inline-block align-middle" width="50" height="50" alt="">
    </a>
    <button class="navbar-toggler navbar-toggler-right navbar-drawer-expand" type="button" data-toggle="collapse"
            data-target="#profileOptions">
        <span class="navbar-toggler-icon"></span>
    </button>

<?php if (isset($_SESSION['username']) && isset($_SESSION['user_type'])) : ?>
    <div id="profileOptions" class="navbar-collapse collapse">
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $_SESSION['username']?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo "profile.php?id=".$_SESSION['username']?>">Edit Profile</a>
                    <a class="dropdown-item" id = "logout" onclick="logout()" href="#">Logout</a>
                </div>
            </li>
        </ul>
    </div>

<?php else : ?>
    <div id="windowsLogin" class="navbar-collapse collapse">
        <ul class="nav navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link mylivelove-font" style="color:whitesmoke;" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mylivelove-font" style="color:#C11D1F;" href="registration.html">Sign up</a>
            </li>
        </ul>
    </div>

    <div id="profileOptions" class="collapse">
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Signup</a>
            </li>
        </ul>
    </div>
<?php endif; ?>
</nav>

