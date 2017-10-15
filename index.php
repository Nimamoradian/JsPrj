<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="ISO-8859-1">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Nima Moradianzadeh</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="style.css" >
	<link
  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"
  rel="stylesheet"  type='text/css'>
</head>
<body class="search">

<!-- ------------------------------------------	 MENU BAR  ---------------------------------------------- -->
	<nav  class="navbar navbar-inverse navbar-fixed-top"  id="hideBar">
	  <div class="container-fluid" >
		  	<ul class="nav navbar-nav">
			   <li><a onclick="myFunction()"><i class="fa fa-list-ul" aria-hidden="true"></i></a></li>
			  <li class="hideMenu"><a href="#home">Home</a></li>
			  <li class="hideMenu"><a href="#education">Education</a></li>
			  			  <li class="hideMenu"><a href="#skills">Skills</a></li>

			  <li class="hideMenu"><a href="#prjs">Projects and Publications</a></li>
			</ul>
	   <form class="navbar-form navbar-right hideMenu" action="http://google.com/search" method="get">

		        <input type="text" class="form-control" id="searchtxt" placeholder="Search"  >


		          <button class="btn btn-default" type="submit">
		            <i class="glyphicon glyphicon-search" ></i>
		          </button>


	    </form>
	   </div>
	 </nav>
<!--  --------------------------------------------------SLIDESHOW --------------------------------------->
	<header id="home" class="jumbotron text-center header col-pull">
		<div class="container">
		   <div id="slideshow" class="carousel slide" data-ride="carousel">

		    <ol class="carousel-indicators">
		      <li data-target="#slideshow" data-slide-to="0" class="active"></li>
		      <li data-target="#slideshow" data-slide-to="1"></li>
		      <li data-target="#slideshow" data-slide-to="2"></li>
		    </ol>


		    <div class="carousel-inner">

		      <div class="item active">
		        <img src="img/me1.jpg" alt="Programmer" style="width:100%;">
		        <div class="carousel-caption">
		          <h2>Object Oriented Programmer</h2>
		          <p> <small> +2 years of experience in computer programming using Java, C# and Visual Basic.</small></p>
		           <p> <small> Strong knowledge of OOP, POP, Cloud-based, and scripting programming.</small></p>
		        </div>
		      </div>

		      <div class="item">
		        <img src="img/me2.jpg" alt="Network" style="width:100%;">
		        <div class="carousel-caption">
		          <h2>NETWORK EXPERT</h2>
		          <p><small> +3 years of experience in computer networks and troubleshooting.</small></p>
		        </div>
		      </div>
		      <div class="item">
		        <img src="img/me3.jpg" alt="Communication" style="width:100%;">
		        <div class="carousel-caption">
		          <h2> Excellent communication and team work skills</h2>
		          <p><small> 1 year experience as a graduate teaching assistant of &quot;	Introduction to Internet  &quot; course in the University of Windsor. (Client/Server architecture, TCP/IP, HTML/XHTML, CSS and java script)</small></p>
		        </div>
		      </div>

		    </div>
		    <a class="left carousel-control" href="#slideshow" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#slideshow" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
		</div>
	</header>


<!-- ------------------------------------------ EDUCATION PAGE	-------------------------------------------- -->

    <article id="education" class="educationsty">

			<h1 class="col-xs-12"> MY EDUCATION </h1>
				<div class="col-xs-4  ">
					<dl>
						<dt >
							<i class="fa fa-graduation-cap" aria-hidden="true"></i> Jan 2016 to May 2017 : MSc. in Computer Science (GPA: 91/100)
						</dt>
						<dd>Supervisor: Dr. Ziad Kobti,	</dd>
						<dd><a href="http://www.uwindsor.ca/"> University of Windsor</a>  Canada</dd>
					</dl>
			  </div>

			  <div class="col-xs-4 ">
				   <dl>
					  	<dt >
						   	<i class="fa fa-graduation-cap" aria-hidden="true"></i> Sep 2012 to Sep 2013 : Pre-MBA
					  	</dt>
						  <dd><a href="https://www.thehagueuniversity.com/"> The Hague University of Applied Sciences</a>  The Netherlands</dd>
				   </dl>
				</div>
			  <div class="col-xs-4 ">
				  <dl>
						<dt >
							<i class="fa fa-graduation-cap" aria-hidden="true"></i> Sep 2009 to Jan 2012 : Computer Technology Engineering (Software)
						</dt>
						<dd><a href="http://payamgolp.ac.ir/"> Payam Golapayegan Higher Education Institute </a>  Iran</dd>
		      </dl>
				</div>

				<h1 class="col-xs-12"> CERTIFICATES </h1>
				<div class="col-xs-12 ">
			  	<dl>
					   <dt> <i class="fa fa-certificate" aria-hidden="true"></i> NodeRED: basic to bots, IBM, August 2017 </dt>
	 		  			<dd>Skills: Cloud, Node-RED, REST API </dd>
				  		<dt><i class="fa fa-certificate" aria-hidden="true"></i> Bluemix Essentials, IBM, July 2017</dt>
  						<dt><i class="fa fa-certificate" aria-hidden="true"></i> Ethnic Conduct for Research Involving Humans Course on Research Ethics (TCPS 2: Core), Panel on Research Ethics, March 2017</dt>
	  					<dt><i class="fa fa-certificate" aria-hidden="true"></i> Cloud Developer Bootcamp, IBM, June 2016</dt>
							<dd>	Skills: Big Data, Analytics, Mobile, Internet of Things</dd>
		  				<dt><i class="fa fa-certificate" aria-hidden="true"></i> Workplace Hazardous Materials Information System (WHMIS), University of Windsor - Office of Health and Safety, May 2016</dt>
	   					<dt><i class="fa fa-certificate" aria-hidden="true"></i> C#.NET(Beginner), Metaco Training Center, Iran, Feb 2015</dt>
	  		   </dl>
  			</div>

    </article>
<!-- ------------------------------------------ SKILLS PAGE	-------------------------------------------- -->
	<article id="skills" class="skillsty">

		<div>
			<h1> MY TECHNICAL SKILLS </h1>

		  <ul>
			<li>Programming: Java, C#, C++, SQL, Visual Basic, </li>
			<li>Web Technology: JavaScript, PHP, HTML(5), XSLT, CSS, AspectJ</li>
			<li>Web Services: JSON, RESTful API, XML</li>
			<li>Cloud Technology: IBM Bluemix, Git hub, Internet of Things/li>
			<li>Tools and Frameworks: Eclipse, Visual Studio, Node-Red, Raspberry PI, MS Office Suite</li>
			<li>Research: Artificial Intelligence, Body Area Network, Health Informatics, Big Data, 3D-Modeling, Animation,<br> Agent-Based Modeling, Computer Simulation, Social Networks</li>
			</ul>
		</div>
		<div>
				<h3>If you like to learn some of these skills you click on bellow button</h3>
				<a class="btn btn-primary"  href="learning.php"> Go to Learning Page</a>

		</div>
    </article>
<!-- ------------------------------------------ PROJECT AND PUBLICATON PAGE	-------------------------------------------- -->

    <article id="prjs"  class="prjsty" >
		<div class="container col-xs-12 opback">
			<div class="col-xs-6 ">

					<h1> MY PROJECTS </h1>
					<dl>
						<dt >
							<i class="glyphicon glyphicon-cog"></i> Jan 2017 to May 2017 : Project: Simulation of Palliative Care Social Networks	<br>
						</dt>
						<dd>Technology: Java
							<ul>
								<li>Simulating and analyzing a healthcare social networks</li>
								<li>Provide a novel algorithm to support patients needs</li>
							</ul>
						</dd>
				    </dl>
				    	<dl>
						<dt >
							 <i class="glyphicon glyphicon-cog"></i> May 2016to Aug 2016 : Project: Triggers identification for PTSD treatment<br>
						</dt>
						<dd>Technology: JavaScript, JSON, Node.js, Node-Red, IBM Bluemix<br>
							Hardware: Raspberry PI, E-Health V2.0 sensors for Arduino.
							<ul>
								<li> Setting up an IoT service in IBM Bluemix which transfers data from sensors to the cloud and process them in real time	</li>
								<li> Collaboration with other team members (2) in data analysis, UI design and IoT setup.</li>
								<li> Documentation and preparing a technical report.</li>
							</ul>
						</dd>
				    </dl>


				</div>
				<div class="col-xs-6 ">

				    <h1> MY PUBLICATIONS </h1>
					<dl>
						<dt >
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Title of Paper :<i>	Extending the External Agents Capabilities in Healthcare Social Networks</i>	<br>
						</dt>
						<dd>MSc Thesis, School of Computer Science, University of Windsor, Canada, May 2017 </dd>
						<dd><a class="btn btn-primary btn-sm" href="http://scholar.uwindsor.ca/etd/6001/"> Read This Article Here</a></dd>
				    </dl>
				    <dl>
						<dt >
							 <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Title of Paper :<i>	An Agent Model to Support Social Network-Based Palliative Care</i>	<br>
						</dt>
						<dd>2nd IEEE ICTS4eHealth Workshop in conjunction with the 22nd IEEE Symposium on Computers and Communications, Heraklion, Crete, Greece, July 2017 </dd>
						<dd><a class="btn btn-primary btn-sm" href="http://ieeexplore.ieee.org/abstract/document/8024546/"> Read This Article Here</a></dd>
				    </dl>
				</div>
		</div>
    </article>
<!-- ------------------------------------------ CONTACT PAGE	-------------------------------------------- -->

	<article id="contact" class="contactSty">
		   <form name="contactF" action="mailto:nima.moradian@gmail.com" method="post" enctype="text/plain" onsubmit="return validation();">
			   <div>
			      <h1><b> CONTACT INFORMATION </b> </h1>
			      <h2> Nima Moradianzadeh </h2>
				  <p>You can choose One of the following ways to contact me for more information </p>
				  <div class="col-xs-6">
					 	<p>Your Name: <span id="Verrn" class="text-danger">(required)  </span> </p>
					 	<input class="form-control" type="text"  name="namef" placeholder="Your Name">
					 	<br>
					 	<p>Your Email: <span id="Verrm" class="text-danger">(required) </span> </p>
					 	<input class="form-control" type="text" name="mail" placeholder="Your E-Mail">
				  </div >
				  <div class="col-xs-6 ">
						<p>Your Comment:</p>
						<textarea class="form-control" rows="6" cols="50" placeholder="Your Comment..."></textarea>
				  </div>
			   </div>
			   <input class="btn btn-info btn-sm gapafter botsize" type="submit" name="submit" value="Submit">
			</form>
			<hr>
		<h2>Other Methods</h2>
		<div>
				  <div class="col-xs-3"><a class="btn btn-info btn-sm " href="https://www.linkedin.com/in/nimamoradianzadeh">Tel:  (289) 779-8330</a></div>
				  <div class="col-xs-3"><a class="btn btn-info btn-sm  " href="https://www.linkedin.com/in/nimamoradianzadeh"> <i class="fa fa-linkedin-square" aria-hidden="true"></i> My Linkedin</a></div>
   		  		  <div class="col-xs-3"><a class="btn btn-info btn-sm  " href="mailto:nima.moradian@gmail.com"> <i class="fa fa-envelope" ></i>  Email Me</a></div>
			 	  <div class="col-xs-3"><a class="btn btn-info btn-sm  	" href="https://www.facebook.com/nima.moradian1"><i class="fa fa-facebook-square" aria-hidden="true"></i> My Facebook</a></div>
			</div>
    </article>


<!-- ------------------------------------------ FOOTER	-------------------------------------------- -->

	<footer class="footer">

		<p id="date"></p>



	</footer>
<script type="text/javascript" src="functions.js"></script>
</body>
</html>
