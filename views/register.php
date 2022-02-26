<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="/CSS/style.css" />
    <link rel="stylesheet" type="text/css" href="CSS/loginStyle.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/assets/images/favicon-32x32.png" type="image/x-icon" />
    <!-- Boxicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="./CSS/fontello.css" />
    <link rel="stylesheet" href="./CSS/loginStyle.css" />
</head>

<body>
    <!-- HEADER -->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="index.html" class="nav__logo"> Adventure </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.html" class="nav__link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">Activities</a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link nav__about">About Us</a>
                    </li>
                    <li class="nav__item">
                        <a href="register.html" class="nav__link nav__register">Sign In</a>
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
        <div class="card" id="card">
            <form action="#" class="front">
                <h1>Sign in</h1>

                <div class="group">
                    <i class="icon-mail-alt"></i>
                    <input class="email1" type="email" placeholder="Email" />
                </div>
                <div class="group">
                    <i class="icon-lock"></i>
                    <input class="password1" type="password" placeholder="Password" />
                </div>

                <input type="submit" value="Login" />

                <h2 id="register">Register</h2>
            </form>

            <form action="#" class="back" id="form">
                <h1>Register</h1>

                <div class="group" id="user-form">
                    <i class="icon-user"></i>
                    <input id="user" type="text" placeholder="Name" oninput="userValidation()" />
                    <i class="fas fa-check-circle move-circle"></i>
                    <i class="fas fa-exclamation-circle move-circle"></i>
                </div>
                <div class="group" id="email-form">
                    <i class="icon-mail-alt"></i>
                    <input id="email" type="email" placeholder="Email" oninput="emailValidation()" />
                    <i class="fas fa-check-circle move-circle"></i>
                    <i class="fas fa-exclamation-circle move-circle"></i>
                </div>
                <div class="group" id="pass-form">
                    <i class="icon-lock"></i>
                    <input class="password2" id="pass" type="password" placeholder="Password"
                        oninput="passwordValidation()" />
                    <i class="fas fa-check-circle move-circle"></i>
                    <i class="fas fa-exclamation-circle move-circle"></i>
                </div>
                <div class="group" id="confirm-pass-form">
                    <i class="icon-lock"></i>
                    <input class="password3" id="confirm-pass" type="password" placeholder="Confirm password"
                        oninput="confirmPassValidation()" />
                    <i class="fas fa-check-circle move-circle"></i>
                    <i class="fas fa-exclamation-circle move-circle"></i>
                </div>

                <!-- <button id="btn" type="submit">Register</button> -->
                <input type="submit" id="btnR" value="Register" />

                <h2 id="Login">Login</h2>
            </form>
        </div>
    </div>

    <script src="/JS/event.js"></script>
    <script src="/JS/main.js"></script>
</body>

</html>