<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHK TOURS | CONTACT US</title>
    <link rel="icon" href="../resoursers/img/logo.png" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../header.css" />
    <link rel="stylesheet" href="../footer.css" />
    <link rel="stylesheet" href="../_resources/Bootstrap/bootstrap.css">
</head>

<body>

    <!-- Header -->
    <?php include "../header.php"; ?>
    <!-- Header -->

    <section class="con--sec01" id="about">
        <div class="con--sec01--div01">
            <div class="con--sec01--div02">
                <span class="con--sec01--span01">About Us</span>
            </div>
            <div class="con--sec01--div03">
                <div class="con--sec01--div20">
                    <img class="con--sec01--aboutimg" src="../resoursers/img/1.png" alt="">
                </div>

                <div class="con--sec01--div21">
                    <span class="con--sec01--span02">KHK Tours is a premier travel company based in Sri Lanka,
                        dedicated to providing exceptional tourism services. Specializing in personalized and
                        customizable travel experiences, KHK Tours offers a range of services including guided
                        sightseeing tours, excursions, and comprehensive travel packages. The company's mission is to
                        showcase Sri Lanka's rich cultural, historical, and natural attractions, ensuring every traveler
                        enjoys a seamless and memorable journey.
                    </span>
                </div>

            </div>
        </div>
    </section>

    <section class="con--sec02" id="contact">
        <div class="con--sec02--div01">
            <div class="con--sec02--div16">
                <span class="con--sec02--span01">Contact Us</span>
            </div>
            <div class="con--sec02--div02">
                <span class="con--sec02--span02">
                    We value your feedback and are here to assist you with any questions or concerns you may have.
                    Whether you're looking for more information about our services, need assistance with a product,
                    or just want to share your thoughts, we're here to help. You can reach us via email at
                    or call us at. Our team is also available on social media platforms, including Facebook,
                    Twitter, and Instagram. We strive to respond to all inquiries promptly and appreciate your patience.
                    Thank you for choosing to connect with us.
                </span>
            </div>

            <div class="con--sec02--div03">
                <div class="con--sec02--div04">
                    <img class="con--sec02--icon" src="../resoursers/img/phone.png" alt="">
                    <span class="con--sec02--icon--text">+94773614654</span>
                </div>
                <div class="con--sec02--div17">
                    <img class="con--sec02--icons" src="../resoursers/img/email.png" alt="">
                    <span class="con--sec02--icon--text">khktours@gmail.com</span>
                </div>
                <div class="con--sec02--div05">
                    <img class="con--sec02--icons con1" src="../resoursers/img/home.png" alt="">
                    <span class="con--sec02--icon--text contxt1">No 16/A, 2nd cross road, Uyanwatta, Matara</span>
                </div>
            </div>
            <div class="con--sec02--div06">
                <span class="con--sec02--span03">Send Message</span>
            </div>
            <div class="con--sec02--div07">
                <div class="con--sec02--div08">
                    <span class="con--sec02--subtopic">First Name</span>
                    <input class="con--sec02--inputs" id="fname" type="text">
                </div>
                <div class="con--sec02--div09">
                    <span class="con--sec02--subtopic">Last Name</span>
                    <input class="con--sec02--inputs" id="lname" type="text">
                </div>
            </div>
            <div class="con--sec02--div10">
                <div class="con--sec02--div11 div002">
                    <span class="con--sec02--subtopic">Email</span>
                    <input class="con--sec02--inputs" id="email" type="text">
                </div>
                <div class="div001 con--sec02--div11">
                    <span class="con--sec02--subtopic">Mobile</span>
                    <input class="con--sec02--inputs" id="mobile" type="text">
                </div>
            </div>
            <div class="con--sec02--div13">
                <span class="con--sec02--subtopic">Message</span>
                <textarea class="con--sec02--texteria" name="" id="message"></textarea>
            </div>
            <div class="con--sec02--div15">
                <button class="con--sec02--button01" onclick="sendmassage();">SEND</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include "../footer.php"; ?>
    <!-- Footer -->

    <script src="../header.js"></script>
    <script src="script.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>