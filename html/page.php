<!DOCTYPE html>
<html lang="en">

<head>
    <title>My First Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery-1.11.1.min.js"></script>
     <script src="js/bootstrap.min.js"></script>







</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="#">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notice</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Exam</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Faculty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Policies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rules&nbsp;&amp&nbsp;Reg.</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Scholorship</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About&nbsp;Us</a>
                    </li>


                </ul>

            </div>
        </nav>
        <nav>
            <div class="alert alert-danger" role="alert">
                <ul class="nav">


                </ul>
            </div>
        </nav>
        <div class="row">
            <div class="col-sm-4">
                <div class="alert alert-success">
                    <p class="lead">ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="alert alert-dark">
                        
                        <h1><?php echo $pageData['name'];?></h1>
                        <p>
                            <?php echo $pageData['content']; ?>
                            </p>
                       	  <span>Status:</span>  <?php echo $pageData['status']; ?><br>
                          <div  class="row">
                          	<div class="col-sm-6">
                          		<span>last Modified:</span> <?php echo $pageData['last_modified']; ?>
                          	</div>
                          	<div class="col-sm-6">
                          		 <span>Published On:</span> <?php echo $pageData['published_on']; ?>
                          	</div>
                          </div>
                          
                         
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-danger">
                    <h1 class="display-4">Hello, world!</h1>
                </div>

            </div>

        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="alert alert-success">
                    <p class="lead">Today's offices remain incomplete without computers. It will probably not be a mere exaggeration to say that computers reign supreme in the era we are living in. Keeping this reality in mind, we do according to the best of our capacity
                        to make each student get the best as far as the knowledge of computers is of concern. Since the students are given adequate amount of practical knowledge, they on completion of the degree of BCA will turn out to be a programmer.
                        Such a skill is sure to be duly acknowledged in the work field. Employment is not a big deal for those who are equipped with knowledge of computers. At a time when employment is so scarce, a degree of BCA really works as a soothing
                        solution. </div>

            </div>
            <div class="col-sm-4">
                <div class="alert alert-info">
                    <p class="lead"> Today's offices remain incomplete without computers. It will probably not be a mere exaggeration to say that computers reign supreme in the era we are living in. Keeping this reality in mind, we do according to the best of our capacity
                        to make each student get the best as far as the knowledge of computers is of concern. Since the students are given adequate amount of practical knowledge, they on completion of the degree of BCA will turn out to be a programmer.
                        Such a skill is sure to be duly acknowledged in the work field. Employment is not a big deal for those who are equipped with knowledge of computers. At a time when employment is so scarce, a degree of BCA really works as a soothing
                        solution. </div>
            </div>

            <div class="col-sm-4">
                <div class="alert alert-dark">
                    <p class="lead"> Today's offices remain incomplete without computers. It will probably not be a mere exaggeration to say that computers reign supreme in the era we are living in. Keeping this reality in mind, we do according to the best of our capacity
                        to make each student get the best as far as the knowledge of computers is of concern. Since the students are given adequate amount of practical knowledge, they on completion of the degree of BCA will turn out to be a programmer.
                        Such a skill is sure to be duly acknowledged in the work field. Employment is not a big deal for those who are equipped with knowledge of computers. At a time when employment is so scarce, a degree of BCA really works as a soothing
                        solution. </div>
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