<!DOCTYPE html>
<html lang="en">
<head>
    <title>News Site</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">News Site</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="home.php">Insert data</a></li>
            <li><a href="viewdata.php">View data</a></li>
            <li class="active"><a href="listdata.php">List Data</a></li>
            <li><a href="#">category 3</a></li>
        </ul>
    </div>
</nav>
<div class="container">
<h3><a href='convertxml.php' style='float:right;' class='btn btn-info'>Export as Xml</a></h3><br/><br/>
	<table class="table table-striped table-bordered table-condensed">
		<tr>
        <th>News ID</th>
        <th>Headline</th>
        <th>Posting Date and Time</th>
		</tr>
        <?php
                $xml=simplexml_load_file("1531949574.xml") or die("Error: Cannot create object");
                  
                   foreach ($xml as $p) {
                       # code...
                   
                    echo "<tr>"; 
					echo "<td>".$p->id."</td>";
					echo "<td>".$p->headline."</td>";
					echo "<td>".$p->creationTime."</td>";
				
					echo "</tr>";
                }
			
            
          ?>
		</table>
</div>
</body>
</html>