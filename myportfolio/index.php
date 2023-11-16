<?php
include "login.php";

if(isset($_POST['submit'])){
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $mobilenumber = $_POST['number'];
    $email = $_POST['mail'];
    $yourmessage = $_POST['message'];

    $sql = "INSERT INTO `login`( `First_Name`, `Last_Name`, `Mobile_Number`, `Email`, `Message`) VALUES ('$firstname','$lastname','$mobilenumber','$email','$yourmessage')";

    $result = mysqli_query($conn , $sql);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>My Personal Portfolio</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
</head>

<body>
    <header class="header">
        <a href="" class="logo">Param..</a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#education">Education</a>
            <a href="#skills">Skills</a>
            <a href="#contact">Contact</a>

            <span class="active-nav"></span>
        </nav>
    </header>

    <section class="home" id="home">
        <div class="intro">
            <h1>Hi <span> Everyone </span>, I'm <span>Paramjeet Yadav</span></h1>
            <div class="fintro">
                <h3>Frontend Developer</h3>
            </div>
            <p> I'm from Charkhi Dadri (Haryana). My Father Name is Mr.
                Satpal Yadav. He is in ITBP force. My Mother name is Mrs Sharda devi. She is a Housewife. I did my
                graduction B.tech from MDU University (Rohtak). My Strenght are i'm very hardworking. And my goal is to
                get a job in reputed company where i bulid my carrier and
                help the organization too. </p>
            <div class="btn-box">
                <a href="#" class="btn">Hire Me</a>
                <a href="#" class="btn">Let's Talk</a>
            </div>
        </div>
        <div class="social_media">
            <a href=""><i class='bx bxl-facebook'></i></a>
            <a href=""><i class='bx bxl-linkedin'></i></a>
            <a href=""><i class='bx bxl-instagram'></i></a>
        </div>
    </section>

    <section class="about" id="about">
        <h2 class="heading">About <span>Me</span></h2>
        <div class="about-img">
            <img src="images/bhole.jpeg" alt="">
            <span class="circle-spin"></span>
        </div>
        <div class="about_me">
            <h3>Frontend Developer</h3>
            <p> Hy everyone, my name is Paramjeet Yadav.I'm from Charkhi Dadri (Haryana).I did my graduction Btech(CSE)
                from MDU university(Rohtak).I completed my web development course from SIT HUB institute (New Delhi). I
                have deeply inerest in web development that's why i choose my carrier in
                this field .My goal is to become a successful web Developer. </p>
            <div class="btn-box first">
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </section>


    <section class="education" id="education">
        <h2 class="heading">My <span>Journey</span></h2>

        <div class="myeducation">
            <div class="myexperience">
                <h3 class="title">Education</h3>


                <div class="education_can">
                    <div class="education_detail">
                        <div class="detail">
                            <div class="year"><i class='bx bxs-calendar'></i>2012-2013</div>
                            <h3>10th class - Board</h3>
                            <p>I passed my 10th class from Sharbati Sec Sr School ,Mahendergarh from
                                Central Board of Secondary Education (New Delhi).
                            </p>
                        </div>
                    </div>

                    <div class="education_detail">
                        <div class="detail">
                            <div class="year"><i class='bx bxs-calendar'></i>2015-2016</div>
                            <h3>12th Class - Board</h3>
                            <p>I passed my 12th class from Saraswati Sec Sr School ,Majra kalan (Mahendergarh) from
                                Haryana Board of School Education (Bhiwani).
                        </div>
                    </div>


                    <div class="education_detail">
                        <div class="detail">
                            <div class="year"><i class='bx bxs-calendar'></i>2017-2021</div>
                            <h3>B.tech - University</h3>
                            <p>I passed my graducation from MDU university (Rhotak)
                        </div>
                    </div>
                </div>
            </div>



            <div class="myexperience">
                <h3 class="title">Experience</h3>
                <div class="education_can">
                    <div class="education_detail">
                        <div class="detail">
                            <div class="year"><i class='bx bxs-calendar'></i>2021-2023</div>
                            <h3></h3>
                            <p>After my Graducation i took my admission in SIT HUB Instituite ,Uttam Nagar(New
                                Delhi).where i gained a better knowledge in web development field. I worked on to make
                                website template. Now i'm looking for a company as a fresher to bulid my carrier .I have
                                a good knowledge in HTML,CSS,Bootstrap,Javascript and basic knowledge in photoshop. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="skills" id="skills">
        <h2 class="heading">My <span>Skills</span></h2>

        <div class="coding_skills">
            <div class="professional_skills">
                <h3 class="title">Coding Skills</h3>

                <div class="skills_can">
                    <div class="skills_content">
                        <div class="progress">
                            <h3>HTML <span>80%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>CSS <span>75%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>javascript <span>70%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>Bootstrap <span>75%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>PHP <span>65%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="professional_skills">
                <h3 class="title">Professional Skills</h3>
                <div class="skills_can">
                    <div class="skills_content">
                        <div class="progress">
                            <h3>Communication <span>70%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>
                        <div class="progress">
                            <h3>Problem Solving <span>80%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>
                        <div class="progress">
                            <h3>Creativity <span>75%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>
                        <div class="progress">
                            <h3>Team Work <span>72%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>
                        <div class="progress">
                            <h3>Critical Thinking <span>65%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me</span></h2>

        <form method="post">
            <div class="input_can">
                <div class="input_field">
                    <input type="text" name="fname" placeholder="First Name" required>
                    <span class="focus"></span>
                </div>

                <div class="input_field">
                    <input type="text" name="lname" placeholder="Last Name" required>
                    <span class="focus"></span>
                </div>
            </div>


            <div class="input_can">
                <div class="input_field">
                    <input type="number" name="number" placeholder="Mobile Number" required>
                    <span class="focus"></span>
                </div>
                <div class="input_field">
                    <input type="text" name="mail" placeholder="Email" required>
                    <span class="focus"></span>
                </div>
            </div>


            <div class="textarea_field">
                <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message" required></textarea>
                <span class="focus"></span>
            </div>

            <div class="btn-box first">
                <button type="submit" class="btn" name="submit">Submit</button>
            </div>
        </form>
    </section>


    <footer class="footer">
        <div class="footer_text">
            <p>copyright &copy; 2023 by Paramjeet | All Rights Reserved</p>
        </div>

        <div class="footer_icon">
            <a href=""><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>


    <script src="js/script.js"></script>
</body>

</html>