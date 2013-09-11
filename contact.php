
<!DOCTYPE html>
<!--[if IE 7]><html class="ie7" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if lte IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"><!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" href="css/styles.css" type="text/css"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->   
</head>

<body>
<?php include('includes/header.php') ?>

<div class="internal-splash clearfix">
	<div class="services clearfix wrap">
		<p class="lato size-42"><i>my <span class="bold">meineke</span> gets me... <span class="bold yellow">back to my life.</span></i></p>

		<select name="" class="right oil-change"><option>I Need To Change My Oil</option></select>
	</div>
</div>

<div class="wrap clearfix">
	<aside class="locations left">
		<h2>Your Meineke Location</h2>
		<span>Meineke Car Care Center of Glendale</span>
		<p>7105 N 51st Ave. Glendale, AZ <br />(480)446-8776</p>
		<a href="">meineke.com</a>
		

		<a href=""><img src="img/facebook.png" alt="" class="fb"></a>
		<p>*To Receive special offers only our Facebook memebers have access to.</p>
	</aside>

	<section class="contact-content right">
		<h2>Have a question or comment?</h2>
		<p>Please fill out the form below and a qualified representative will connect with you as soon as possible. Please indicate the best course to reach you, and explain what we can help you with. Thank you.   -  Meineke Glendale Staff</p>
		<form action="">
			<input type="text" placeholder="enter your full name">
			<input type="text" placeholder="enter your phone number">
			<input type="text" placeholder="enter your email address">
			<select name="" id=""><option>what's the best way to reach you?</option</select>
			<textarea name="" id="" cols="30" rows="10" placeholder="question/comment/concern"></textarea>
			<input type="checkbox" class="checkbox">&nbsp;I would also like to schedule an appointment <br />
			<submit><a href="">Submit Form</a></submit>
		</form>
	</section>
</div>

<?php include('includes/bottom-content.php') ?>
<?php include('includes/footer.php') ?>

</body>

</html>
