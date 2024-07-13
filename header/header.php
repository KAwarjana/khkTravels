<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>KHK TOURS</title>
    <link rel="icon" href="../resoursers/logo.png" />
    <link rel="stylesheet" href="header.css" />
</head>

<body class="header--body">
    <!-- mobile -->
    <section class="header--sec1">
        <div class="header--sec1--div1">
            <div class="header--sec1--div2">

                <img src="../resoursers/img/toggle.png" onclick="toggle();" class="header--toggle" />


            </div>

            <div class="header--sec1--div3">
                <img src="../resoursers/img/logo.png" class="header--logo" />
            </div>
        </div>

        <div class="dropdown" id="dropdown">
            <span class="dropdown--item hide" id="drpItem"><a href="../index.php" class="header--a">HOME</a></span>
            <span class="dropdown--item hide" id="drpItem1">
                <dl>
                    <a href="#" class="header--a">
                        TOUR PACKAGES
                        <dd>
                            <a href="../package/tour.php#CITY" class="header--a">
                                CITY TOURS
                            </a>
                        </dd>
                        <dd>
                            <a href="../package/tour.php#DAY" class="header--a">
                                DAY TOURS
                            </a>
                        </dd>
                        <dd>
                            <a href="../package/tour.php#ANIMAL" class="header--a">
                                SAFARI TOURS
                            </a>
                        </dd>
                        <dd>
                            <a href="../package/tour.php#ANIMAL" class="header--a">
                                ANIMAL TOURS
                            </a>
                        </dd>
                    </a>
                </dl>
            </span>
            <span class="dropdown--item hide" id="drpItem2"><a href="../contact/contact.php" class="header--a">CONTACT US</a></span>
        </div>

        <div class="call--now--btn">
            <span class="call--now--txt"><a href="tel:+94 77 361 4654" class="call--now--txt">CALL NOW!</a></span>
        </div>

    </section>

    <!-- large screen -->
    <section class="header--sec2">
        <div class="header--sec2--div1">
            <div class="header--sec2--div2">
                <img src="../resoursers/img/logo_lg.png" class="header--logo" />
            </div>
            <div class="header--sec2--div3">
                <div class="header--sec2--div4 dropdown--item--large">
                    <a href="../Home/index.php" class="header--a">HOME</a>
                </div>
                <div class="header--sec2--div5 dropdown--item--large  dropdown--lg">
                    <select class="header--sec2--div5 dropdown--lg" id="headerSelectLarge" onchange="toggleHeaderSelectLarge();">
                        <option class="header--sec2--div5 dropdown--item--lg" value="../package/tour.php">TOUR PACKAGES</option>
                        <option class="header--sec2--div5 dropdown--item--lg" value="../package/tour.php#CITY">CITY TOURS</option>
                        <option class="header--sec2--div5 dropdown--item--lg" value="../package/tour.php#DAY">DAY TOURS</option>
                        <option class="header--sec2--div5 dropdown--item--lg" value="../package/tour.php#ANIMAL">SAFARI TOURS</option>
                        <option class="header--sec2--div5 dropdown--item--lg" value="../package/tour.php#ANIMAL">ANIMAL TOURS</option>
                    </select>
                </div>
                <div class="header--sec2--div6 dropdown--item--large">
                    <a href="../contact/contact.php" class="header--a">CONTACT US</a>
                </div>
            </div>
        </div>

        <div class="call--now--btn--lg">
            <span class="call--now--txt"><a href="tel:+94 77 361 4654" class="call--now--txt">CALL NOW!</a></span>
        </div>

    </section>

    <div class="header--spaceDiv">

    </div>

    <script src="header.js"></script>
</body>

</html>