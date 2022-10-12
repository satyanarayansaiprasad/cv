<?php


	if(isset($_POST['btn_send'])){
		
		$userName = $_POST['user_name'];
		$userEmail = $_POST['user_email'];
		$userSub = $_POST['user_sub'];
		$userMsg = $_POST['user_msg'];
		
		$to="tkdsaiprasad@gmail.com";
		$sub="intrested";
		$mailContent ="user name:" . $userName . "\r\n" . "user email:" . $userEmail . "\r\n" . "user sub:" . $userSub .  "\r\n" .  "user msg:" .  $userMsg;
		
		if(mail($to,$sub,$mailContent)){
			
			echo "<script>";
			echo "alert('mail has been sent!')";
			echo "</script>";
		}
		else{
			
			echo "<script>";
			echo "alert('something went wrong!')";
			echo "</script>";
			
			
		}
		
		
	}

?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNSP | profile</title>
	<link rel="icon" href="imgs/fav.png" type="imgs/png">
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="social.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
   <!-- <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
		
    </div>-->
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">SN<span>$aiprasad.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Teams</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Welcome To My World</div>
                <div class="text-2">Satyanarayan Saiprasad</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <script src="https://apps.elfsight.com/p/platform.js" defer></script>
				<div class="elfsight-app-a484afad-98bc-41ce-aee4-5a0265b0bbe6"></div>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="imgs/06.png" alt="">
                </div>
                <div class="column right">
                    <div class="text">Hi, This is Satyanarayan<span class="typing-2"></span></div>
                    <p> An immense desirous web developer. Currently, I am pursuing my B.Tech in Computer Science. I am the kind of individual who is fueled by high energy levels and boundless enthusiasm, I’m easily inspired and more than willing to follow my fascinations wherever they take me and cherish to deliver the same also I prefer to keep learning, continue challenging myself and do interesting things that matter. I am focusing on the young emerging talents who are passionate to build their career in web development. Currently, working as a freelancer and are open to new opportunities. 
</p>
                    <a href="sn_cv.pdf" target="_blank">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Development</div>
                        <p>Make a fastest and beautiful website for your business here.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa fa-building" aria-hidden="true"></i>
                        <div class="text">Affilate Your Product</div>
                        <p>we support you to grow your business with us by affilitae marketing. </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                        <div class="text">Fitness Trainer</div>
                       <p>I can instruct you how to do and where to do it in a proper way .</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p> I’m a fast learner, able to pick up new skills. Highly passioned about Taekwondo. I have a dynamic personality having technical skills and analytical techniques. Prompt at affiliate marketing and blogging. I am following the motto is that if you give some learnings to someone, then you will get the best outcomes also.</p>
                    <a href="#m">Follow me</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>Taekwondo</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Affiliate marketing</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>HTML, CSS, JavaScript, PHP, MySQL (web development)</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>coding (c, java, python, Github,etc.)</span>
                            <span>50%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Blogging</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My teams</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="imgs/06.png" alt="">
                        <div class="text">SN Saiprasad</div>
                        <p>MD</p>
                    </div>
					<a href="#">Click Here</a>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="imgs/anil.png" alt="">
                        <div class="text">Anil Kumar Singh</div>
                        <p>HEAD DESIGNER</p>
                    </div>
					<a href="http://zebaqgreen.com/intern/anil/" target="_blank">Click Here</a>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="imgs/sexoo.png" alt="">
                        <div class="text">Satyanarayan</div>
                        <p>DEVELOPER CUM DESIGNER</p>
                    </div>
					<a href="http://zebaqgreen.com/intern/satya" target="_blank">Click Here</a>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="imgs/bhagya.jpg" alt="">
                        <div class="text">Bhagyashree Routray</div>
                        <p>CEO</p>
                    </div>
					<a href="http://zebaqgreen.com/intern/bhagyashree/" target=_blank>Click Here</a>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="imgs/itu.png" alt="">
                        <div class="text">I.Arpita Mohapatra</div>
                        <p>DEVELOPER</p>
                    </div>
					<a href="http://zebaqgreen.com/intern/itu/" target="_blank">Click Here</a>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
   <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>
						Trust and belive is the best keyword for success. If you know yourself and utilizing your 100% effort on your work then successs will find automatically. Hard work is the best keyword for success. Join with me and increase your skill, capacity and etc.IF you have any project for me you can freely contact with us or if you search for job then contact with i will provide you.</br>


						lots of love from heart.</br>
						Thank you
					</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-phone"></i>
                            <div class="info">
                                <div class="head">Phone:</div>
                                <div class="sub-title" style="color:#000;"><a href="tel:+916372844347"><b>+91 63728 44347</b></a></div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address:</div>
                                <div class="sub-title">Dhenkanal, Odisha</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email:</div>
                               <div class="sub-title">satyanarayansaiprasad@gmail.com</div>
								
								<!--<a href="mailto:satyanarayanasaiprasad@gmail.com"<p class="mb-0"><strong><i class="fa fa-envelope" aria-hidden="true"></i> Email</strong></p></a>-->
								
								
                            </div>
							
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="#"method="POST">
                        <div class="fields">
                            <div class="field name">
                           <span  class="focus-border"> <input type="text" name="user_name" placeholder="Name" required></span>
                            </div>
                            <div class="field email">
                              <span  class="focus-border">   <input type="email" name="user_email" id="emailId" onkeydown="validateEmail()"  placeholder="Email" required></span>
                            </div>
                        </div>
                        <div class="field">
                           <span  class="focus-border">  <input type="text" name="user_sub" placeholder="Subject" required></span>
                        </div>
                        <div class="field textarea">
                          <span  class="focus-border">   <textarea cols="30" rows="10" name="user_msg" placeholder="Message.." required></textarea></span>
                        </div>
						<div>
									<p id="sysMsg"></p>
						</div>

                        <div class="button">
                            <button type="submit" name="btn_send">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

	
	
	<div class= "follow" style="text-align:center;">
    <div class="m" id="m" >
      <a href="https://www.facebook.com/lucky.gahan.1" rel="noopener noreferrer" target="_blank">
        <div class="l">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span class="fab fa-facebook-f"></span>
        </div>
<div class="t">
Facebook</div>
</a>
      <a href="https://twitter.com/satyana87239257" rel="noopener noreferrer" target="_blank">
        <div class="l">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span class="fab fa-twitter"></span>
        </div>
<div class="t">
Twitter</div>
</a>
      <a href="https://www.instagram.com/satya_narayan_sai_prasad" rel="noopener noreferrer" target="_blank">
        <div class="l">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span class="fab fa-instagram"></span>
        </div>
<div class="t">
Instagram</div>
</a>
      <a href="https://www.linkedin.com/in/satyanarayan-saiprasad-13289a1a7/" rel="noopener noreferrer" target="_blank">
        <div class="l">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span class="fab fa-linkedin-in"></span>
        </div>
<div class="t">
Linkedin</div>
</a>
      <a href="https://www.youtube.com/channel/UCskqSR7zX3hbzkcvQ37tYnQ" rel="noopener noreferrer" target="_blank">
        <div class="l">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span class="fab fa-youtube"></span>
        </div>
<div class="t">
YouTube</div>
</a>
    </div>
</div>

	<script>
var msg=  document.getElementById("sysMsg");

function validateEmail() 
{
	var umail =  document.getElementById("emailId");
	var mailValue =  umail.value;
	msg.innerHTML = "some value " + mailValue;
}
</script>
	
	

    <!-- footer section start -->
    <footer>
        <span>Created By :- <a href="http://www.tkdsaiprasad.blogspot.com" target="_blank">satya_narayan_sai_prasad</a> <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>
</html>