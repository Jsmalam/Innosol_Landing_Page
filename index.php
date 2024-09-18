<!DOCTYPE html>
<html lang="en">

<head>
    <title>INNOSOL</title>
    <meta charset="utf-8" />
    <link rel="icon" type="image/x-icon" href="./images/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css" />
    <!-- Include SweetAlert2 CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

</head>


<body class="container" style="overflow-x: hidden;">
    <nav class="navbar navbar-default" style="margin:0px;" id="navbar">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header1">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="images/innosol.png" alt="Logo"
                    style="margin-top:6px; max-height: 40px; object-fit: contain;" />
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#whatwedo">
                            <p>What We Do </p>
                        </a></li>
                    <li><a href="#solutions">
                            <p>Solutions</p>
                        </a></li>
                    <li><a href="#industry">
                            <p>Industries We Serve </p>
                        </a></li>
                    <li><a href="#footer">
                            <p>Contact Us</p>
                        </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="banner">
        <div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="3000">
            <!-- <ol class="carousel-indicators">
                <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel1" data-slide-to="1"></li>
                <li data-target="#myCarousel1" data-slide-to="2"></li>
            </ol> -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/section1_img.png" alt="First Slide">

                </div>
                <div class="item">
                    <img src="images/section1_img.png" alt="Second Slide">

                </div>
                <div class="item">
                    <img src="images/section1_img.png" alt="Third Slide">

                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
                <i class="fa fa-angle-left glyphicon glyphicon-chevron-left" style="font-size:24px;"></i>
            </a>
            <a class="right carousel-control" href="#myCarousel1" data-slide="next">
                <i class="fa fa-angle-right glyphicon glyphicon-chevron-right" style="font-size:24px;"></i>
            </a>
        </div>
        <div class="inquiry-form">
            <h3>Submit Your Inquiry</h3>
            <form action="" method="post">
                <input type="text" id="form1_name" name="form1_name" placeholder="Enter Your Name" required />
                <input type="email" id="form1_email" name="form1_email" placeholder="Enter Email Address" required />
                <input type="tel" id="form1_phone" name="form1_phone" placeholder="Enter Phone Number" required />
                <textarea id="form1_message" name="form1_message" placeholder="Enter Your Query"></textarea>
                <input type="submit" value="Submit" name="form1_submit" />
            </form>
        </div>
    </section>
    <section id="whatwedo" class="whatwedo container">
        <div class="boxes" style="padding: 0px 5%;">
            <div class="box1">
                <img src="images/section2_img.png" style="width: 100%;  object-fit: fill; height: 100%;" />
            </div>
            <div class="box2">
                <div class="box-bg">
                    <div>
                        <h3>What We Do</h3>
                        <p>
                            INNOSOL Lifting Private Limited specializes in solutions for the Food & Beverage,
                            Pharmaceuticals, Chemicals, Sugar & Ethanol, and Water & Wastewater Treatment industries.
                            With a strong focus on Material Handling and Refrigeration, we deliver customized services
                            designed to enhance efficiency and safety.
                            <br><br />
                            Our commitment to Total Customer Satisfaction sets us apart as a trusted partner in your
                            industrial needs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="solutions">
        <h3>Our Solutions</h3>
        <div class="solutions">

            <div id="contactCarousel" style="  display: flex; justify-content: center;" class="carousel slide"
                data-ride="carousel" data-interval="3000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#contactCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#contactCarousel" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-lg-6 col-4 mb-4">
                                    <div class="card" style="width: 100%; padding: 5% 15%;">
                                        <img class="card-img-top img-fluid" src="images/section3_img1.jpg"
                                            style="max-width: 100%; object-fit: contain; border:2px solid lightgray; border-radius:10px;"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">LT MCC Panels</h4>
                                            <p class="card-text">The policy made by the company makes us engaged in
                                                offering a quality assured range of LT MCC Panel. Well known for its
                                                remarkable features, this panel is generally used in small scale
                                                industries & large scale industries</p>
                                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6 col-4 mb-4">
                                    <div class="card" style="width: 100%; padding: 5% 15%;">
                                        <img class="card-img-top img-fluid" src="images/section3_img2.png"
                                            style="max-width: 100%; object-fit: contain; border:2px solid lightgray; border-radius:10px;"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">LT MCC Panels</h4>
                                            <p class="card-text"><b>Temperature Control Panel</b> Commonly demanded in food processing, power stations,
                                                textile and pharmaceutical industries, Furnace Control. this panel is
                                                used for effective control of the temperature. The offered control panel
                                                is available with us in various specifications in order to fulfill the
                                                different needs of the customers. </p>
                                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-lg-6 col-4 mb-4">
                                    <div class="card" style="width: 100%; padding: 5% 15%;">
                                        <img class="card-img-top img-fluid" src="images/section3_img1.jpg"
                                            style="max-width: 100%; object-fit: contain; border:2px solid lightgray; border-radius:10px;"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">LT MCC Panels</h4>
                                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing
                                                anda typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text
                                                ever since the 1500s,
                                                when an unknown printer took a galley of type.</p>
                                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6 col-4 mb-4">
                                    <div class="card" style="width: 100%; padding: 5% 15%;">
                                        <img class="card-img-top img-fluid" src="images/section3_img2.png"
                                            style="max-width: 100%; object-fit: contain; border:2px solid lightgray; border-radius:10px;"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">LT MCC Panels</h4>
                                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing
                                                anda typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text
                                                ever since the 1500s,
                                                when an unknown printer took a galley of type.</p>
                                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#contactCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#contactCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </section>
    <section id="industry" class="container">
        <h3>Industries We Serve</h3>
        <div class="row industy-row" style="padding: 0px 5%;">
            <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4 col">
                <div class="card card1">
                    <img src="images/section4_img1.png" alt="Image 1" style="height:250px">
                    <div class="card-body card-body1">
                        <h4>Food & Beverage </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4">
                <div class="card card1">
                    <img src="images/section4_img2.png" alt="Image 2" style="height:250px">
                    <div class="card-body card-body1">
                        <h4>Pharmaceuticals & Chemical</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4">
                <div class="card card1">
                    <img src="images/section4_img3.png" alt="Image 3" style="height:250px">
                    <div class="card-body card-body1">
                        <h4>Sugar & Ethanol</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4">
                <div class="card card1">
                    <img src="images/section4_img4.png" alt="Image 4" style="height:250px">
                    <div class="card-body card-body1">
                        <h4>Water & Waste water treatment </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4">
                <div class="card card1">
                    <img src="images/section4_img5.png" alt="Image 5" style="height:250px">
                    <div class="card-body card-body1">
                        <h4>Material Handling</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4">
                <div class="card card1">
                    <img src="images/section4_img6.png" alt="Image 6" style="height:250px">
                    <div class="card-body card-body1">
                        <h4>Refrigeration</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="projects" style="background-color: #e6f1f9; padding:0px 7%;">
        <h3>Our Past Projects</h3>
        <div>
            <div class="row" >
                <div class="col-md-4 col-sm-6 col-lg-4 col-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="images/section5_img.png" style="width: 100%; object-fit: contain;" />
                            <p class="card-text">Innosol Engineering Corporation specializes in Material Handling
                                catering to diverse sector delivering Safety, Quality and right Product to customers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-4 col-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="images/section5_img.png" style="width: 100%; object-fit: contain;" />
                            <p class="card-text">All our lifting chain is custom made and certified to our customer's
                                needs. You can build your chain to the exact specification you require by picking your
                                own length, hooks/shortening clutch, and how many legs you require on any chain. Also
                                available in single leg, endless, two leg, three and four leg lifting chains.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-4 col-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="images/section5_img.png" style="width: 100%; object-fit: contain;" />
                            <p class="card-text">Ratchet lashing are used for fixation cargo while transporting,
                                shifting or moving, storage. After locking, no relax during transportation, safety,
                                saving, light, easy to use, and no damage for cargo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="enquiryform">
        <div class="inquiry-form1">
            <h3>Enquiry Form</h3>

            <form method="post" action="" id="contact-form">
                <div class="row">

                    <div class="col-md-6 col-sm-6 col-6">
                        <input type="text" id="name" name="name" placeholder="Enter Your Name" required="" />
                    </div>
                    <div class="col-md-6 col-sm-6 col-6">
                        <input type="text" id="companyname" name="companyname" placeholder="Enter Company Name"
                            required="" />
                    </div>
                    <div class="col-md-6 col-sm-6 col-6">
                        <input type="email" id="email" name="email" placeholder="Enter Email Address" required="" />
                    </div>
                    <div class="col-md-6 col-sm-6 col-6">
                        <input type="tel" id="phone" name="phone" placeholder="Enter Phone Number" required="" />
                    </div>
                    <div class="col-md-12">
                        <textarea type="text" id="message" name="message" placeholder="Enter Detailed Query"></textarea>
                    </div>

                </div>
                <div class="submit-btn">
                    <input type="submit" value="Submit" name="form2_submit" />
                </div>
            </form>

        </div>
    </section>
    <section id="footer">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 footer-column">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="footer-title" href="#navbar">
                                    <img src="images/innosol.png" style="max-height:50px" />
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 footer-column">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <p class="footer-title">COMPANY</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#whatwedo">What We Do</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#solutions">Solutions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#industry">Industries We Serve</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#enquiryform">Inquiry Form</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 footer-column">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <p class="footer-title">Contact info</p>
                            </li>
                            <li class="nav-item">
                                <div class="footer-phone">
                                    <p class="">Phone :</p>
                                    <div>
                                        <p class="nav-link">+91-123-XXX-XXXX </p>
                                        <p class="nav-link">+91-987-XXX-XXXX</p>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="footer-phone">
                                    <p class="">Email :</p>
                                    <div>
                                        <p class="nav-link">sales@innosoldemo.com </p>
                                    </div>
                                </div>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </section>
</body>

</html>

<script>
(function() {
    $('.carousel-showmanymoveone .item').each(function() {
        var itemToClone = $(this);

        for (var i = 1; i < 6; i++) {
            itemToClone = itemToClone.next();
            if (!itemToClone.length) {
                itemToClone = $(this).siblings(':first');
            }

            itemToClone.children(':first-child').clone()
                .addClass("cloneditem-" + (i))
                .appendTo($(this));
        }
    });
}());
$(document).ready(function() {
    $('a[href^="#"]').on('click', function(event) {
        event.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing', function() {
            window.location.hash = target;
        });
    });
});
</script>
<?php

if (isset($_POST['form1_submit'])) {
	
	$email = $_POST['form1_email'];
	$name = $_POST['form1_name'];
	$phone = $_POST['form1_phone'];
	$message= $_POST['form1_message'];
	
	$EmailTo =  "@gmail.com" ; // Here add your email
	$Subject = "EMAIL SUBJECT"; // add your email subject

	$Content ="
		<html>
		<body style='box-sizing: border-box;margin: 0;padding: 0;background: #F5F6F7;margin: 0 auto;'>
			<p>name : $name</p>
			<p>phone : $phone</p>
			<p>message : $message</p>
		</body>
		</html>";

	$MailHeaders = "MIME-Version: 1.0"."\r\n";
	$MailHeaders .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
	$MailHeaders .= 'From:'.$email."\r\n";
		
	$success = mail($EmailTo, $Subject, $Content, $MailHeaders);	
	if($success == true ) {
			echo "<script>
			Swal.fire(
				'Success!',
				'Thank you for Contact!',
				'success'
			).then(function() {
				window.location = 'index.php';
			});
		</script>";
	}else{
			echo "<script>
			Swal.fire(
				'Success!',
				'Thank you for Contact!',
				'success'
			).then(function() {
				window.location = 'index.php';
			});
		</script>";
	}
	
}
if (isset($_POST['form2_submit'])) {
	
	$email = $_POST['email'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$companyname = $_POST['companyname'];
	$message= $_POST['message'];
	
	$EmailTo =  "@gmail.com" ; // Here add your email
	$Subject = "EMAIL SUBJECT"; // add your email subject

	$Content ="
		<html>
		<body style='box-sizing: border-box;margin: 0;padding: 0;background: #F5F6F7;margin: 0 auto;'>
			<p>name : $name</p>
			<p>phone : $phone</p>
			<p>company name : $companyname</p>
			<p>message : $message</p>
		</body>
		</html>";

	$MailHeaders = "MIME-Version: 1.0"."\r\n";
	$MailHeaders .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
	$MailHeaders .= 'From:'.$email."\r\n";
		
	$success = mail($EmailTo, $Subject, $Content, $MailHeaders);	
	if($success == true ) {
			echo "<script>
			Swal.fire(
				'Success!',
				'Thank you for Contact!',
				'success'
			).then(function() {
				window.location = 'index.php';
			});
		</script>";
	}else{
			echo "<script>
			Swal.fire(
				'Success!',
				'Thank you for Contact!',
				'success'
			).then(function() {
				window.location = 'index.php';
			});
		</script>";
	}
	
}
?>