<?php require ('config.php');?>
<!DOCTYPE html>
<html lang="en">

<html>
<head>
	<meta charset="ISO-8859-1">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Teaching Page</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="style.css" >
	<link
  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"
  rel="stylesheet"  type='text/css'>
  <script type="text/javascript" src="functions.js"></script>

<!-- -------------------------------------MENU -------------------------------------  -->
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
</head>
<body class="search">



	<footer class="footer">
		<p>	Copy right by Nima Moradianzadeh &copy; 2010-<?php	echo date( "Y");

		?></p>

	</footer>

</body>
</html>
