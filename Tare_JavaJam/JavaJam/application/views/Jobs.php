<!DOCTYPE html>
<html>

    <head>
        <title>Jobs</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/javajam.css">
        <!--<script type="text/javascript" src="scripts/jobScript.js"></script>-->
        <script>

            function validateJobApplication() {

                var x = document.forms["jobForm"]["name"].value;
                var y = document.forms["jobForm"]["email"].value;
                var z = document.forms["jobForm"]["expr"].value;
				var letters = /^[A-Za-z]+$/;  
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

                if (x === "" && y === "" && z === "") {
                    alert("Please Fill All Required Details");
                    return false;
                }
                if (x === "") {
                    alert("Please fill out the Name field");
                    return false;
                }else if(x.match(letters)){
					
				}else{
				alert("Invalid Name!! Name must contain only alphabets");
				return false;
				}

				
                if (y === "") {
                    alert("Please fill out the Email field");

                    return false;
                } else if (y.match(mailformat)) {
                    //return true;
                } else
                {
                    alert("Invalid email address!");
                    return false;
                }

                if (z === "") {
                    alert("Please fill out the Experience field");
                    return false;
                }
                alert("Application Completed. Thank you for your interest!!");
                return true;


            }

        </script>
    </head>	
    <body id="wrapper">


        <div class="full-content">
            <table class="nav-bar">
                <tr><td><img alt="coffee icon" src="<?php echo base_url();?>img/javajamlogo.jpg"></td></tr>
                <tr><td><nav role="navigation">	
                            <a href="IndexController"><strong>Home</strong></a>
                            <a href="MenuController"><strong>Menu</strong></a> 
                            <a href="MusicController"><strong>Music</strong></a>
                            <a href="JobController"><strong>Jobs</strong></a> 
                        </nav></td></tr>
            </table>

            <div class="main">
                <header class="main-header">
                    <h1 class="main-heading">JavaJam Coffee House</h1>
                </header>
                <div class="blank-line"></div>
                <div class="main-content">
                    <header>
                        <h3>Jobs at JavaJam</h3>
                    </header>
                    <p>
                        Want to work at JavaJam? Fill out the form below to start your application. Required fields are marked with an asterisk(*).
                    </p>
                    <div>
                        <form name="jobForm" method="get" onsubmit="return validateJobApplication()">
                            <table class="job-table">
                                <tr><td class="txt-rght-align">*Name:</td><td ><input type="text" class="width-200px" name="name" /></td></tr> 
                                <tr><td class="txt-rght-align">*E-mail:</td><td ><input type="text" class="width-200px" name="email" /></td></tr>
                                <tr><td class="txt-rght-align">*Experience:</td><td><textarea rows="2" class="width-225px" name="expr"></textarea></td></tr>
                                <tr><td><input type="submit" name="apply" value="Apply Now"/></td><td></td></tr>
                            </table>
                        </form>

                    </div>
                </div>
            </div>
            <footer>
                <i>Copyright &copy 2016 JavaJam Coffee House</i><br>
                <a href="mailto:vinayak@tare.com"><i>vinayak@tare.com</i></a>
            </footer>
        </div>


    </body>
</html>