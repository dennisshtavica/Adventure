<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adventure</title>
    <link rel="shortcut icon" href="./assets/images/favicon-32x32.png" type="image/x-icon" />
    <!-- Boxicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="./CSS/style.css" />
</head>

<body>
    <!-- HEADER -->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="/" class="nav__logo"> Adventure </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="/" class="nav__link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">Activities</a>
                    </li>
                    <li class="nav__item">
                        <a href="AboutUs.html" class="nav__link nav__about">About Us</a>
                    </li>
                    <li class="nav__item">
                        <a href="/register" class="nav__link nav__register">Sign In</a>
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

    <!-- MAIN -->
    <main class="main">
        <div>
            <section class="home">
                <img src="/assets/images/HomeBg.png" alt="" class="home-bg" />
                <div class="home__container container">
                    <div class="home__data">
                        <h1>Live Your Adventure</h1>
                        <p>
                            Dont wait until tomorrow, discover your adventure and feel the
                            sensation of closeness to nature around you
                        </p>
                    </div>
                    <div class="home__links grid">
                        <div class="home__links-button">
                            <a href="" style="color: black">Learn More</a>
                        </div>
                        <div class="home__links-button" style="background-color: black; color: white">
                            <a href="" style="color: white">Popular places</a>
                        </div>
                    </div>
                    <div class="search__bar">
                        <div class="fa fa-search"></div>
                        <input type="search" placeholder="Search" />
                    </div>
                </div>
            </section>
        </div>
    </main>

    <section class="section winter">
        <div class="winter-container container">
            <div class="winter__title">
                <h1>
                    <span style="color: #65ffff">WINTER</span>
                    <span style="color: white">IS HERE</span>
                </h1>
            </div>
            <div class="frame1__flex">
                <div class="cards">
                    <img src="/assets/images/rugova-snowmobile3.png" alt="" />
                </div>
                <div class="cards">
                    <img src="/assets/images/brezovica.png" alt="" />
                </div>
            </div>
            <div class="cards">
                <img src="/assets/images/rugova-mountains2.png" alt="" />
            </div>
        </div>
    </section>

    <section class="section destinations">
        <div class="d__title container">
            <h1>find <span style="color: #ff6554"> popular </span>destinations</h1>
        </div>
        <div class="swiper destinations-swiper">
            <div class="swiper-wrapper">
                <!-- Destinations slider 1-->
                <div class="swiper-slide">
                    <div class="d-card container section">
                        <a href="/Liqenati.html"><img src="/assets/images/Liqenati2.png" alt="" /></a>
                    </div>
                </div>
                <!-- Destinations slider 2-->
                <div class="swiper-slide">
                    <div class="d-card container section">
                        <a href="/ViaFerrata.html"><img src="/assets/images/via-ferrata2.png" alt="" /></a>
                    </div>
                </div>
                <!-- Destinations slider 3-->
                <div class="swiper-slide">
                    <div class="d-card container section">
                        <a href="/KanioniDrinit.html"><img src="/assets/images/kanioni.png" alt="" /></a>
                    </div>
                </div>
                <!-- Destinations slider 4-->
                <div class="swiper-slide">
                    <div class="d-card container section">
                        <a href="/Radoniqi.html"><img src="/assets/images/Radoniqi2.png" alt="" /></a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="4__cards destinations container section">
        <div class="grid__cards grid">
            <div class="camp__fire">
                <img src="/assets/images/camping.png" alt="" />
                <h3>Camp fire</h3>
                <div class="arrow">
                    <img src="/assets/images/arrow.png" alt="" />
                </div>
            </div>
            <div class="camp__fire">
                <img src="/assets/images/camera.png" alt="" />
                <h3>Photography</h3>
                <div class="arrow">
                    <img src="/assets/images/arrow.png" alt="" />
                </div>
            </div>
            <div class="camp__fire">
                <img src="/assets/images/turntable.png" alt="" />
                <h3>Dj Night</h3>
                <div class="arrow">
                    <img src="/assets/images/arrow.png" alt="" />
                </div>
            </div>
            <div class="camp__fire">
                <img src="/assets/images/bonfire.png" alt="" />
                <h3>Woods</h3>
                <div class="arrow">
                    <img src="/assets/images/arrow.png" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="destinations container section">
        <div class="condition condition1 section">
            <img src="/assets/images/cloudy.png" alt="" />
            <h2>In Every Condition</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem
                harum aspernatur sapiente error, voluptas fuga, laudantium ullam magni
                fugit. Qui!
            </p>
        </div>
        <div class="condition condition2 section">
            <img src="/assets/images/backpack.png" alt="" />
            <h2>Professional team</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem
                harum aspernatur sapiente error, voluptas fuga, laudantium ullam magni
                fugit. Qui!
            </p>
        </div>
        <div class="condition condition1 section">
            <img src="/assets/images/hiker.png" alt="" />
            <h2>Expert Instructors</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem
                harum aspernatur sapiente error, voluptas fuga, laudantium ullam magni
                fugit. Qui!
            </p>
        </div>
    </section>

    <section class="comments container section">
        <div class="comment__content grid">
            <div class="skate">
                <img src="/assets/images/skate.png" alt="" />
            </div>
            <div class="adventurers">
                <h2>
                    What adventurers say <span style="color: #ff6554">about us</span>
                </h2>
                <p class="f__p">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam..
                </p>
                <div class="comment__table">
                    <p class="f__p">
                        ??????Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam..??????
                    </p>

                    <div class="stars">
                        <img src="/assets/images/favourite.png" alt="" />
                        <img src="/assets/images/favourite.png" alt="" />
                        <img src="/assets/images/favourite.png" alt="" />
                        <img src="/assets/images/favourite.png" alt="" />
                        <img src="/assets/images/favourite.png" alt="" />
                    </div>
                    <p style="font-weight: 800">Alise</p>
                </div>
            </div>
        </div>
    </section>

    <section class="stories container section">
        <div class="stories__content grid">
            <div class="stories__data">
                <h2>
                    Our stories with <span style="color: #ff6554">adventurers</span>
                </h2>
                <p class="first__p f__p">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam..
                </p>
                <p class="first__p f__p">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt.
                </p>
            </div>

            <div class="stories__group">
                <img src="/assets/images/adventurer.png" alt="" />
            </div>
        </div>

        <div class="little__cards f__p">
            <div class="little__card">
                <h1>12K+</h1>
                <p>Succes journey</p>
            </div>
            <div class="little__card-middle">
                <h1>16K+</h1>
                <p>Awards winning</p>
            </div>
            <div class="little__card">
                <h1>12K+</h1>
                <p>Succes journey</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer__content">
            <div class="adv__footer">
                <h3>Adventure</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusdidunt magna aliqua.
                </p>
            </div>
            <div>
                <h3>About</h3>
                <p>
                    Lorem <br />
                    Lorem
                </p>
            </div>
            <div>
                <h3>Contact</h3>
                <div class="socials">
                    <img src="/assets/images/facebook.png" alt="" />
                    <img src="/assets/images/instagram.png" alt="" />
                    <img src="/assets/images/twitter.png" alt="" />
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Reveal -->
    <script src="/JS/scrollreveal.min.js"></script>
    <!-- Swiper CSS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- MAIN JS -->
    <script src="/JS/main.js"></script>
</body>

</html>