<html lang="en">
<style>
    @import url("https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Russo+One&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Hanalei+Fill&display=swap");
</style>

<head>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Noxmourth || All About Gaming</title>
</head>
<header>
    <?php include("nav.php"); ?>
</header>
<nav class="line"></nav>

<body class="homepage">
    <div style="padding: 60px"></div>
    <h1 style="padding-top: 10px" class="title neonText">Hot In Gaming</h1>
    <!-- Body 1:Card Section -->
    <div class="cardBg">
        <div style="padding-top: 10px" class="container-fluid text-center">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                <div style="padding-left: 58px" class="col">
                    <div class="card anim" style="color: white; background-color: #333333; width: 18rem">
                        <img style="
                  padding-top: 15px;
                  padding-left: 20px;
                  width: 270px;
                  height: 200px;
                " src="ValorantLogo.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Valorant</h5>
                            <p class="card-text">
                                With pro play heading into the offseason after the completion
                                of an amazing Game Changers Championship, we're taking...
                            </p>
                            <a href="https://playvalorant.com/id-id/news/" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card anim" style="color: white; background-color: #333333; width: 18rem">
                        <img style="
                  padding-top: 15px;
                  padding-left: 20px;
                  width: 280px;
                  height: 180px;
                " src="CsGo Logo.png" class="card-img-top" alt="..." />
                        <div style="padding-bottom: 22px"></div>
                        <div class="card-body">
                            <h5 class="card-title">CS-GO</h5>
                            <p class="card-text">
                                With the new Map Rotation, Anubis has been added to Active
                                Duty while Dust II has been removed, Players...
                            </p>
                            <a href="https://csgo.com/" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card anim" style="color: white; background-color: #333333; width: 18rem">
                        <img style="
                  padding-top: 15px;
                  padding-left: 20px;
                  width: 270px;
                  height: 200px;
                " src="https://images.bisnis.com/posts/2020/05/30/1246547/games-pubg.jpg" class="card-img-top"
                            alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">PUBG</h5>
                            <p class="card-text">
                                (PC) The FPP queue for Solo, Duo, and Squad will no longer be
                                available in KR/JP regions. Not only have we needed to...
                            </p>
                            <a href="https://www.pubgmobile.com/id/home.shtml" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Body Section 2: Carusel Section -->
    <div class="container-fluid" style="padding: 10px"></div>
    <h1 style="padding-top: 10px" class="anim-fadeIn title-1 neonText">
        Upcoming Games
    </h1>
    <div style="padding: 10px"></div>
    <div id="carouselExampleCaptions" class="carousel slide carusel anim-fadeIn" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images8.alphacoders.com/124/thumb-1920-1247192.png" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="
                color: rgb(255, 255, 255);
                text-shadow:/* White glow */ 0 0 7px rgba(142, 142, 142, 0.682),
                  0 0 10px rgba(142, 142, 142, 0.682),
                  0 0 21px rgba(142, 142, 142, 0.682);
              ">
                        Minecraft Legends
                    </h5>
                    <p style="
                color: rgba(255, 255, 255, 0.825);
                text-shadow:/* White glow */ 0 0 7px rgba(142, 142, 142, 0.682),
                  0 0 10px rgba(142, 142, 142, 0.682),
                  0 0 21px rgba(142, 142, 142, 0.682);
              ">
                        A New Rising Game From Mojang, Where it takes place in the
                        Minecraft universe during an invasion by the piglins from the
                        Nether.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://i.ytimg.com/vi/t5BhVeSVYXQ/maxresdefault.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="
                color: rgba(255, 255, 255, 0.825);
                text-shadow:/* White glow */ 0 0 7px rgba(142, 142, 142, 0.682),
                  0 0 10px rgba(142, 142, 142, 0.682),
                  0 0 21px rgba(142, 142, 142, 0.682);
              ">
                        Half Life 3
                    </h5>
                    <p style="
                color: rgba(255, 255, 255, 0.825);
                text-shadow:/* White glow */ 0 0 7px rgba(142, 142, 142, 0.682),
                  0 0 10px rgba(142, 142, 142, 0.682),
                  0 0 21px rgba(142, 142, 142, 0.682);
              ">
                        An Ongoing Developing Game by Valve, Where the progress is still a
                        mystery.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://wallpapers.com/images/hd/starfield-planets-u6g3sbnjxbeokrfz.jpg" class="d-block w-100"
                    alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="
                color: rgba(255, 255, 255, 0.825);
                text-shadow:/* White glow */ 0 0 7px rgba(142, 142, 142, 0.682),
                  0 0 10px rgba(142, 142, 142, 0.682),
                  0 0 21px rgba(142, 142, 142, 0.682);
              ">
                        Starfield
                    </h5>
                    <p style="
                color: rgba(255, 255, 255, 0.825);
                text-shadow:/* White glow */ 0 0 7px rgba(142, 142, 142, 0.682),
                  0 0 10px rgba(142, 142, 142, 0.682),
                  0 0 21px rgba(142, 142, 142, 0.682);
              " class="carusel-color">
                        Starfield is the first new universe in 25 years from Bethesda Game
                        Studios, the award-winning creators of The Elder Scrolls V: Skyrim
                        and Fallout 4. In this next generation role-playing game set
                        amongst the stars, create any character you want and explore with
                        unparalleled freedom as you embark on an epic journey to answer
                        humanity’s greatest mystery.
                    </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div style="padding: 40px"></div>
    <!-- Section 3: Community Featured -->
    <h1 style="padding-top: 10px" class="title neonText">Featured Community</h1>
    <section>
        <div style="padding: 4px" class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <a href="community.php">
                        <img src="Noxmourth.png" class="card-img-top" alt="..." />
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Noxmourth</h5>
                        <p class="card-text">
                            A fun-loving community with friendly faces. Filled with casual
                            players from all sorts of games hanging together for good ol'
                            fun. Game night every other day, don't forget to join us!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a href="community.php">
                        <img src="Dreamland.png" class="card-img-top" alt="..." />
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Dreamland</h5>
                        <p class="card-text">
                            A loving community that become home to artist and voice actor,
                            dedicated to make your stay as comfortable as possible, Talk
                            with other in voice call, or share your arts here.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a href="https://discord.gg/8nDhenwq">
                        <img src="Basement.png" class="card-img-top" alt="..." />
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Basement</h5>
                        <p class="card-text">
                            A friendly gaming community from people all around Asia, from
                            competitive game like Valorant, to calm game like Minecraft,
                            Come and Join us! Movie night every Saturday.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a href="https://discord.gg/asagao">
                        <img src="Asago.png" class="card-img-top" alt="..." />
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Asago</h5>
                        <p class="card-text">
                            Asagao is a genuinely down to earth anime community, accompanied
                            by great server members. With many events, great roles for our
                            members in our server shop, staff team dedicated to handling
                            issues.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div style="padding: 40px"></div>
</body>
<!-- Section 4: Footer -->
<footer class="bg-dark text-center text-white">
    <?php include("footer.php"); ?>
</footer>

</html>