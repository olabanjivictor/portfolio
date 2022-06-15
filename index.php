<?php
if(isset($_POST['process'])){

     $host="localhost";
     $database="PORTFOLIO";
     $user="root";
     $password="";
     $connect=MYSQLI_CONNECT($host, $user, $password, $database);


    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $subject=$_POST['subject'];

    $sql="INSERT INTO users(id, name, email, number, subject ) VALUES ('', '$name', '$email', '$number', '$subject')";
    $run=$connect->query($sql);





}


?>
<!DOCTYPE html>
<html lang="en">
<head>

    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font/css/all.css">
</head>
<body>
    


    <ul class="nav_bar">
        <div class="pics"></div>
        <li class="active"><a href=""><i class="fa-solid fa-house-chimney fa-4x"></i><br>home</a></li>
        <li><a href="#about"><i class="fa-solid fa-image-portrait fa-4x"></i><br>about</a></li>
        <li><a href="#pics"><i class="fa-solid fa-images fa-4x"></i><br>photos</a></li>
        <li><a href="#contact"><i class="fa-solid fa-envelope fa-4x"></i><br>contact</a></li>
    </ul>

    <div class="container">

        <h1 style=" text-align: center;
                    color: #fff;">
        I'm Olabanji Mosope</h1>

        <h4 style=" text-align: center;
                    color: #fff;">
        Historian, Photographer and Web Designer</h4>

        <div class="profile_picture"></div>

        <h2 id="about" style=" width:140px;
                    margin-left: 20px;
                    padding-bottom: 20px;
                    border-bottom: 2px solid #fff;
                    box-sizing: border-box;
                    color: #fff;">
        My Name</h2>

        <p style="  color: #fff;
                    margin: 20px;">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et facilis consectetur delectus eius veritatis placeat dignissimos! Officiis aperiam placeat nostrum quo deleniti totam assumenda consectetur dicta, deserunt est harum sequi.</p>

        <h2 style=" width:140px;
                    margin-left: 20px;
                    padding-bottom: 20px;
                    box-sizing: border-box;
                    color: #fff;">
        My skill</h2> 


        <h4 style=" margin-left: 20px;
                    color: #fff;">
        Historian</h4>
        <div class="skill_one"></div>

        <h4 style=" margin-left: 20px ;
                    color: #fff;">
        Photographer</h4>
        <div class="skill_two"></div>

        <h4 style=" margin-left: 20px ;
                    color: #fff;">
            Web Designer</h4>
        <div class="skill_three"></div>


        <ul class="stats">
            <li><span style="font-size: 30px;">11+</span><br>Partners</li>
            <li><span style="font-size: 30px;">55+</span><br>Project Done</li>
            <li><span style="font-size: 30px;">89+</span><br>Happy Clients</li>
            <li><span style="font-size: 30px;">150+</span><br>Meetings</li>
        </ul>
    
        <button class="b1"><i class="fa-solid fa-cloud-arrow-down" style="margin-right: 10px;"></i>Download CV</button>


        
        <h2 style=" width:140px;
                    margin-left: 20px;
                    padding-bottom: 20px;
                    box-sizing: border-box;
                    color: #fff;">
        My skill</h2> 

        <div class="packages">
            <ul class="basic">
                <li style="height: 90px; font-size: xx-large; padding-top: 30px;">BASIC</li>
                <li style="padding-top: 30px;">web design</li>
                <li style="padding-top: 30px;">photography</li>
                <li style="padding-top: 30px;">5GB storage</li>
                <li style="padding-top: 30px;">mail support</li>
                <li><span style="font-size: 40px;">$10</span><br>per month</li>
                <li  style="padding-top: 30px;"><a href="">sign up</a></li>
            </ul>

            <ul class="pro">
                <li style="height: 90px; font-size: xx-large; padding-top: 30px;">PRO</li>
                <li style="padding-top: 30px;">web design</li>
                <li style="padding-top: 30px;">photography</li>
                <li style="padding-top: 30px;">50GB storage</li>
                <li style="padding-top: 30px;">mail support</li>
                <li><span style="font-size: 40px;">$25</span><br>per month</li>
                <li style="padding-top: 30px;"><a href="">sign up</a></li>
            </ul>

        </div>

        <h2 style=" margin-left: 20px;
                    padding-bottom: 5px;
                    box-sizing: border-box;
                    color: #fff;">
        My Reputation</h2> 
        <div class="person">
            <div class="p"></div>
            <div class="t">Olabanji Mosope</div>
        </div>
        <div class="person">
            <div class="p"></div>
            <div class="t">Olabanji Mosope</div>
        </div>

        <h2 style="width:140px;
                    margin-left: 20px;
                    padding-bottom: 20px;
                    border-bottom: 2px solid #fff;
                    box-sizing: border-box;
                    color: #fff;">
        Gallery</h2>

        <div class="gallery_grid" id="pics">
            <div class="img_1"><img src="images/img1.jpg" class="image-responsive resp1" ></div>
            <div class="img_2"><img src="images/img2.jpg" class="image-responsive resp2"></div>
            <div class="img_3"><img src="images/img3.jpg" class="image-responsive resp3"></div>
            <div class="img_4"><img src="images/img4.jpg" class="image-responsive resp4"></div>
            <div class="img_5"><img src="images/img5.jpg" class="image-responsive resp5"></div>
            <div class="img_6"><img src="images/img6.jpg" class="image-responsive resp6"></div>
            <div class="img_7"><img src="images/img7.jpg" class="image-responsive resp7"></div>
            <div class="img_8"><img src="images/img8.jpg" class="image-responsive resp8"></div>
            <div class="img_9"><img src="images/img8.jpg" class="image-responsive resp9"></div>
        </div>

        <h2 id="contact" style=" width:140px;
                    margin-left: 20px;
                    padding-bottom: 20px;
                    border-bottom: 2px solid #fff;
                    box-sizing: border-box;
                    color: #fff;">
        Contact Me</h2>

        <h4 style="margin-left: 20px; color: #fff;"><i class="fa-solid fa-location-dot" style="margin-right: 10px;"></i>asa dam</h4>
        <h4 style="margin-left: 20px; color: #fff;"><i class="fa-solid fa-phone" style="margin-right: 10px;"></i>+234 9053846877</h4>
        <h4 style="margin-left: 20px; color: #fff;"><i class="fa-solid fa-envelope" style="margin-right: 10px;"></i>olabanjimosope@gmail.com</h4>

        <h4 style="color: white;
                    margin-left: 10px;
                    margin-bottom:10px;">let's get in touch. send me a message</h4>


        <form action="" method="POST">
            <fieldset style="border-radius: 10px;">
                <legend>NAME</legend>
                    <input type="text" name="name" value="">
            </fieldset>

            <fieldset style="border-radius: 10px;">
                <legend>EMAIL</legend>
                    <input type="email" name="email" value="">
            </fieldset>

            <fieldset style="border-radius: 10px;">
                <legend>NUMBER</legend>
                    <input type="tel" name="number" value="">
            </fieldset>

            <fieldset style="border-radius: 10px; width:50px;">
                <legend>SUBJECT</legend>
                   
                    <textarea name="subject" id="subject"  value="subject   " cols="50" rows="10"></textarea>
            </fieldset>

            <input type="submit" name="process">

        </form>

        <div class="footer">&copy; olabanji 2022</div>
         


























    </div>






<!--
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
-->

</body>
</html>