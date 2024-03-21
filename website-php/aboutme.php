<!DOCTYPE html>
<html lang="en">
<style>
    @import url("https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Russo+One&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Hanalei+Fill&display=swap");
</style>

<head>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="style-aboutme.css" rel="stylesheet" />
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
<div style="padding: 120px"></div>
<h1 style="padding-top: 10px" class="title neonText">About Me</h1>

<body class="aboutMe-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 boxpage">
                <div class="container-fluid"></div>
                <div class="container-fluid">
                    <h2><u>Who Am I?</u></h2>
                    <p class="text">
                        Hey, my name is Andreas Matthew. Iam currently 19 Years Old
                        <br />
                        <br />
                        Iam one of the Informatic Students in, Universitas Krida Wacana
                        for their 2020 Class, Currently taking the third semester, in the
                        course.
                        <br />
                        Iam making this website as an assignment for my final project in
                        Web Developing course, as requirement to pass the final bar.
                        <br />
                        <br />
                        Hope you Enjoy Your Stay
                    </p>
                </div>
                <a href="somethingfun.php" class="goLink">Thank you For Visiting</a>
            </div>
            <div class="col-4 boxpage">
                <h1 class="neonText-Update">My Potrait</h1>
                <br />
                <img class="potrait" src="Andreas-Potrait.png" />
            </div>
        </div>
    </div>
</body>
<div style="padding: 40px"></div>
<footer class="bg-dark text-center text-white">
    <?php include("footer.php"); ?>
</footer>

</html>