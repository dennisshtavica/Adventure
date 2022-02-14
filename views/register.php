<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="/CSS/style.css" />
    <link rel="stylesheet" type="text/css" href="CSS/loginStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="shortcut icon" href="/assets/images/favicon-32x32.png" type="image/x-icon">
    <!-- Boxicons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <link rel="stylesheet" href="./CSS/fontello.css" />
    <link rel="stylesheet" href="./CSS/loginStyle.css" />
  </head>

  <body>
    <!-- HEADER -->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="indexasdfas.html" class="nav__logo"> Adventure </a>
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="indexasdfas.html" class="nav__link">Home</a>
            </li>
            <li class="nav__item">
              <a href="#" class="nav__link">Activities</a>
            </li>
            <li class="nav__item">
              <a href="#" class="nav__link nav__about">About Us</a>
            </li>
            <li class="nav__item">
              <a href="register.php" class="nav__link nav__register"
                >Sign In</a
              >
            </li>
          </ul>

          <div class="nav__close" id="nav-close">
            <i class="bx bx-x"></i>
          </div>
        </div>
        <div class="nav__toggle" id="nav-toggle">
          <img src="/assets/images/burger-bar.png" alt="" />
          <!-- <i class='bx bx-menu'></i> -->
        </div>
      </nav>
    </header>
    <div class="center">
<!--      <img class="login-bg" src="assets/images/test1.webp">-->
      <div class="card" id="card">
        <form action="/login" method="POST" class="front">
          <h1>Sign in</h1>
          <div class="group"><i class="icon-mail-alt"></i><input class="email"  name="email" type="email" placeholder="Email"></div>
          <div class="group"><i class="icon-lock"></i><input class="password" name="password" type="password" placeholder="Password"></div>
          <input type="submit" id="btn" value="Login">

          <h2 id="register">Register</h2>
        </form>

        <form action="/register" method="POST" class="back">
          <h1>Register</h1>
          <div class="group"><i class="icon-user"></i><input class="name" name="name" type="text" placeholder="Name"></div>
          <div class="group"><i class="icon-mail-alt"></i><input class="email" name="email" type="email" placeholder="Email"></div>
          <div class="group"><i class="icon-lock"></i><input class="password" name="password" type="password" placeholder="Password"></div>
          <div class="group"><i class="icon-lock"></i><input class="password" name="confirm_password" type="password" placeholder="Confirm password"></div>
          <input type="submit" id="btnR" value="Register">

          <h2 id="Login">Login</h2>
        </form>

      </div>
    </div>


    <script type="text/javascript" src="event.js"></script>
 </div>
    <script src="/JS/event.js"></script>
    <script src="/JS/main.js"></script>
  </body>
</html>
