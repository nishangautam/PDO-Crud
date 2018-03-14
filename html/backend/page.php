<!DOCTYPE html>
<html lang="en">

<head>
    <title>My First Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <script src="/js/jquery-1.11.1.min.js"></script>
     <script src="/js/bootstrap.min.js"></script>







</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">College Website : Backend</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/backend">Home</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="/backend/page.php">Pages</a>
                    </li>
                   

                </ul>

            </div>
        </nav>
       
        <div class="row">
            <div class="col">
			
<table class="table table-striped table-bordered">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Last edited</th>
		<th>Published On</th>
		<th>Status</th>
	</tr>

<?php foreach($data as $k=>$value){ ?>
	<tr>
		<td><?php echo $value['page_id']; ?></td>
		<td><?php echo $value['name']; ?></td>
		<td><?php echo $value['last_modified']; ?></td>
		<td><?php echo $value['published_on']; ?></td>
		<td><?php echo $value['status']; ?></td>
	</tr>
<?php } ?>
</table>
			
			
			</div>

        </div>
        
        
        <div class="row">
            <div class="col-lg">
                <div class="alert alert-success">
                    <h6> Fotter </h6>
                </div>

            </div>

        </div>






    </div>

</body>

</html>