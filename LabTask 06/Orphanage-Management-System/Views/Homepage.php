<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1" id="wixDesktopViewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Wix.com Website Builder" />
    <style>
    .font60 {
        font-size: 60px;
    }

    .font35 {
        font-size: 35px;
    }

    .font20 {
        font-size: 20px;
    }

    .center-align {
        text-align: center;
    }

    .content {
        /* Use This Class for every div, It will prevent the footer to get over the page contents or prevent to page content hide */
        margin-top: 30px;
        margin-bottom: 130px;
    }

    .image-div {
        flex: 1;
        text-align: center;
    }

    .offered-program-div {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 30px;
        margin-bottom: 120px;
    }

    .text-div {
        flex: 1;
        padding-right: 20px;
    }

    .container {
        display: flex;
        justify-content: center;
        gap: 10px;
        width: 100%;
    }

    .form {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 50%;
        margin: 0 auto;
        text-align: center;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 16px;
        font-weight: bold;
        width: 50%;
        font-size: 1.2em;
        cursor: hand;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        height: 30px;
        margin: 8px 0;
        box-sizing: border-box;
        border: none;
        border-bottom: 2px solid #ccc;
    }

    label {
        font-size: 1.2em;
        font-weight: bold;

    }

    #message {
        font-size: 1.2em;
        width: 300px;
        height: 150px;
    }
    </style>
</head>

<body>

    <?php require('../Layout/Homepage/Header.php');?>


    <!-- First Home Image -->
    <div class="">
        <p class="center-align"> <img src="../images/1.png" alt="Orphanage Homepage Photo" height="440px" width="940px">
        </p>
    </div>

    <div class="content">
        <p class="font60 center-align">HOPE HEAVEN GIVES BACK </p>
        <p class="font35 center-align" id="aboutUs">ABOUT </p>
        <p>
            Welcome to Hope Haven, a safe haven for orphans across the globe. We believe that every child deserves a
            loving family and a place they can call home. Our mission is to
            provide shelter, education, and support to children who have lost their parents or have been abandoned. At
            Hope Haven, we create a nurturing environment that fosters
            growth, learning, and happiness. Our dedicated staff is committed to providing love, care, and support to
            each child in our care. We believe that every child has the
            potential to succeed and we strive to provide them with the tools and resources they need to reach their
            full potential. Join us in our mission to make a difference
            in the lives of children and help them build a brighter future.
        </p>
        <p class="font35 center-align">OUR PROGRAMS</p>
        <p class="font20 center-align">Education and Tutoring Programs</p>

        <div class="offered-program-div">
            <div class="text-div">
                <p>
                    Orphanages can offer a range of educational opportunities to children in their care. This can
                    include tutoring services to help children catch up in school, after-school programs that provide
                    academic support and enrichment activities, and vocational training to help children develop skills
                    that will be useful in the workforce. Education is a critical aspect of child development, and
                    orphanages can play a vital role in ensuring that children have access to the resources they need to
                    succeed
                </p>
            </div>
            <div class="image-div">
                <p><img src="../images/edu_tutor_program_orphan.jpg" alt="Program Image"></p>
            </div>
        </div>


        <p class="font20 center-align">Medical and Health-Care Services</p>

        <div class="offered-program-div">
            <div class="image-div">
            </div>
            <div class="text-div">
                <p><img src="../images/medical_healthCare_orphans.jpg" alt="Program Image"></p>
            </div>
            <p>
                Children in orphanages may have a range of physical, mental, and emotional health needs. Orphanages
                can provide access to medical professionals, counseling services, and other resources to ensure that
                children receive the care they need. This can include routine check-ups, vaccinations, mental health
                counseling, and treatment for chronic conditions. By providing comprehensive health care services,
                orphanages can help ensure that children in their care are healthy and able to thrive.
            </p>
        </div>

        <p class="font20 center-align">Recreational and Extracurricular Activities</p>


        <div class="container">
            <div class="">
                <p><img src="../images/extracurricular_orphan_1.jpg" alt="Program Image"></p>
            </div>
            <div class="">
                <p><img src="../images/extracurricular_orphan_2.jpeg" alt="Program Image"></p>
            </div>
        </div>
        <div>
            <p>
                Orphanages can provide opportunities for children to engage in recreational activities such as sports,
                arts and crafts, and other hobbies. These activities can help children develop new skills, build
                self-confidence, and form positive relationships with their peers. Additionally, extracurricular
                activities can provide a sense of structure and routine that is important for children's emotional and
                social well-being.
            </p>
        </div>



        <div class="contact-Us form" id="contactUs">
            <p class="font35 center-align">CONTACT US</p>
            <form action="" method="POST">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name"><br><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email"><br><br>
                <label for="subject">Subject:</label><br>
                <input type="text" id="subject" name="subject"><br><br>
                <label for="message">Message:</label><br>
                <textarea id="message" name="message"></textarea><br><br>
                <input type="submit" value="Submit">
            </form>

        </div>




    </div>




    <?php require('../Layout/Homepage/Footer.php');?>
</body>

</html>