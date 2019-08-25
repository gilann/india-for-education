<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Resource</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styletemp.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- Custom Theme files -->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
  	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<!-- font-awesome icons -->
	<link href="css/fontawesome-all.min.css" rel="stylesheet">
	  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }
    .select-css {
        display: block;
        font-size: 16px;
        font-family: sans-serif;
        font-weight: 700;
        color: #444;
        line-height: 1.3;
        padding: .6em 1.4em .5em .8em;
        width: 100%;
        max-width: 100%; 
        box-sizing: border-box;
        margin: 0;
        border: 1px solid #aaa;
        box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
        border-radius: .5em;
        -moz-appearance: none;
        -webkit-appearance: none;
        appearance: none;
        background-color: #fff;
    }
    .select-css::-ms-expand {
        display: none;
    }
    .select-css:hover {
        border-color: #888;
    }
    .select-css:focus {
        border-color: #aaa;
        box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
        box-shadow: 0 0 0 3px -moz-mac-focusring;
        color: #222; 
        outline: none;
    }
    .select-css option {
        font-weight:normal;
    }
  </style>
</head>
<body>
<div class="container-main-wrapper">
		<header class="header-wrapper">
			<div class="container">
				<div class="header-menu-wrapper" >
					<div class="brand-logo">
						<img class="img-responsive" width="150px" height="100px" src="images/loop1.png" alt="image">
					</div>
					<div class="main-menu">
						<ul class="nav navbar-nav " style = "display:inline;">
							<li ><a href="main.php">HOME</a></li>

							<li ><a href="schools.php">SCHOOLS</a></li>
							
							<li> <a href = "bar_graph.php"> REPORT </a></li>

							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
								CLUSTERS
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="viewclusters.php">VIEW CLUSTERS</a>
								<a class="dropdown-item" href="addcluster.php">ADD CLUSTER</a>
								</div>
							</li>
              
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
								RESOURCE
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="addAvailable.php">ADD RESOURCE</a>
								<a class="dropdown-item" href="searchresource.php">SEARCH RESOURCE</a>
								</div>
							</li>
								
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
								EVENTS
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="addEvent.php">ADD EVENT</a>
								<a class="dropdown-item" href="checkevent.php">CHECK EVENTS</a>
								</div>
							</li>

							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
								VOLUNTEER
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="beVolunteer.php">BECOME VOLUTEER</a>
								<a class="dropdown-item" href="searchVolunteer.php">SEARCH VOLUNTEER</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>
        <div class="content-main-wrapper">
			<div class="w3-content w3-section" style="max-width:500px"></div>
			<h1 align=center>education is right</h1>
			<img  src="images/img1.png" style="width:100%" >
			<div class="content-main-wrapper1">
			<div class="container1">
		</div>
		<footer class="footer-main-wrapper">
			<div class="footer-links-wrapper">
				<div class="container">
					<div class="footer-links">
						<h2>Contact Details</h2><br>
						<ul>
							<li class="special">India for Education</li>
							<li class="special">Hyderabad,Telangana</li>
							<li class="special">Call us: +91 1233211234</li>
							<li class="special">Email:conatact@indiaforeducation.org</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copy">
				<div class="container">
					<p>Copyright &copy; Domain <span> TEAM 13<span></p>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>
