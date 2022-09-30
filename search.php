<?php
    include 'database.php';
    include 'function.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HomePage</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
            	<!-- Navbar -->
      
	<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
 <!--     <span class="material-symbols-outlined" style="margin-left: 20px">menu</span> -->
	  <div class="collapse navbar-collapse " id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active"> 
	        <a class="nav-link" href="search.php">Search Engine</a>
	      </li>
	      <!--  <li class="nav-item">
	        <a class="nav-link disabled" href="#">Disabled</a>
	      </li> -->
	    </ul>

	      <!-- Search Form -->

		  <form class="form-inline d-flex justify-content-around w-100" method="post" action="">
	      <input class="form-control mr-sm-2" name="keywords" type="search" placeholder="Search" aria-label="Search" style="width: 600px;"> 
	      <input type="submit" name="submit" value="Search" class="btn btn-info"/>
	      </form>
	  </div>
	</nav>

        <!-- Main Body -->

         <?php
	             if(isset($_POST['submit']))
                 {
    	             $keywords=($_POST['keywords']);
    	             if(empty($keywords))
    	             {
    	             	echo "You did not enter any search term";
    	             }
    	             else
    	             {
    	              $results=search_res($keywords);
    	             	$ro_num=count($results);
    	             	echo "Your search for $keywords produced $ro_num results";
    	             	foreach ($results as $result) 
    	             	{
    	             		echo "<h3>".$result['title']."</h3>";
    	             		echo "<p>".$result['description']."</p>";
    	             		echo "<a href=\"".$result['url']."\">".$result['url']."</a>";
    	             	}
    	              }
    	           }
         ?>
         

	    <!-- Footer -->    

<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top fixed-bottom">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
    </ul>
  </footer>

</body>
</html>