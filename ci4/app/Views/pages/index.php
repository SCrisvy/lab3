<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WEBPROG PROFILE PAGE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php echo link_tag('css/main.css'); ?>
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <header>
		
		   <div class="top-left-button">
           <button onclick="alert('T.T why did you press it.')">Don't press</button>
           </div>
            <div class = "wrapper">
               

                
                <div class = "text">
                    <h2>My Personal Profile</h2>
                    <p>Hello!! Welcome to my Website!</p>
                </div>
                <div class = "vert-line"></div>
                <nav>
                    <ul>
                        <li><a href = "#">Education</a></li>
                        <li><a href = "#">About</a></li>
                        <li><a href = "#">References</a></li>
						
                        
                    </ul>
                </nav>
            </div>
			<div style="position: absolute; bottom: 0; left: 0;">
		   <button id="date-button">Show Time</button>
		   <div id="date-display"></div>
           </div>
        </header>

        <section id = "Education" class = "page">
            <span class = "close-btn">
                <i class = "fas fa-times"></i>
            </span>
            <h2 class = "title">Education</h2>
            <h2> Senior High School Graduated From? </h2>
            <p>Graduated from <abbr title="Our Lady of the Lake School">OLLS</abbr>,  in Muntinlupa city</p>
            <div onmouseover="mOver(this)" onmouseout="mOut(this)"> <h2>Course: </h2></div>
            <p>Bachelor of Science in Computer Science Major in Software System</p>
			<h2>Scholarship? </h2>
            <p>Yes, Im on a scholarship</p>
			<h2>I.T. Experience: Programming / Gaming / Others </h2>
            <p>I have coded using python and know the basics of it due to the teachings of my previous teachers from previous subjects.</p>
			<h2>What do I expect to learn from this course (Web Programming)? </h2>
            <p>I expect to learn more than just about basics of web programming and to learn and experience the development of a website.</p>
        </section>

        <section id = "About" class = "page">
            <span class = "close-btn">
                <i class = "fas fa-times"></i>
            </span>
            <h2 class = "title">About</h2>
			

            <article>
			    <h2>My name: </h2>
                <p>I prefer to be called by my first name, Shane.</p>
            </article>

            <article>
			    <h2>My Interests and Hobbies </h2>
				<pre><ul>
                <li>Reading Books</li>
				<img src = "images/hobby.jpg">
				
				
				<li>Watching movies/Tv shows</li>
				<img src = "images/hobby2.jpg">
				
				
                <li>Kpop</li>
				<img src = "images/hobby3.jpg">
				
				
				<li>Listening to music</li>
				<img src = "images/hobby4.jpg">
				
				
				<li>Travelling</li>
				<img src = "images/hobby5.jpg">
				
				
				<li>Sewing</li>
				<img src = "images/hobby6.jpg">
				</ul>
				<button onclick="setTimeout(YFunction, 3000);">Don't Press</button>
				</pre>
              
             

        </section>

        <section id = "References" class = "page">
            <span class = "close-btn">
                <i class = "fas fa-times"></i>
            </span>
            <h2 class = "title">References</h2>
			<article>
            <h3>W3chools</h3>
			</ul>
			<li>HTML W3Schools course</li>  
			<li>CSS W3Schools course</li> 
			<li>Javascript W3Schools course</li> 
			</ul>
			</article>
			
			<article>
			<h3>GeekProbin</h3>
            <p>His videos really helped and guided me throughout making the website. He has great tutorial videos about web development.</p>
            <article>
        </section>
		
		
		
		
		
		        <section id = "Form" class = "page">
            <span class = "close-btn">
                <i class = "fas fa-times"></i>
            </span>
            <h2 class = "title">Form</h2>
						 <?php
				// define variables and set to empty values
				$nameErr = $emailErr = $genderErr = $websiteErr = "";
				$name = $email = $gender = $comment = $website = "";

				if ($_SERVER["REQUEST_METHOD"] == "POST") {
				  if (empty($_POST["name"])) {
					$nameErr = "Name is required";
				  } else {
					$name = test_input($_POST["name"]);
					// check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
					  $nameErr = "Only letters and white space allowed";
					}
				  }
				  
				  if (empty($_POST["email"])) {
					$emailErr = "Email is required";
				  } else {
					$email = test_input($_POST["email"]);
					// check if e-mail address is well-formed
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					  $emailErr = "Invalid email format";
					}
				  }
					
				  if (empty($_POST["website"])) {
					$website = "";
				  } else {
					$website = test_input($_POST["website"]);
					// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
					if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
					  $websiteErr = "Invalid URL";
					}
				  }

				  if (empty($_POST["comment"])) {
					$comment = "";
				  } else {
					$comment = test_input($_POST["comment"]);
				  }

				  if (empty($_POST["gender"])) {
					$genderErr = "Gender is required";
				  } else {
					$gender = test_input($_POST["gender"]);
				  }
				}

				function test_input($data) {
				  $data = trim($data);
				  $data = stripslashes($data);
				  $data = htmlspecialchars($data);
				  return $data;
				}
				?>

				<h2>PHP Form Validation Example</h2>
				<p><span class="error">* required field</span></p>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
				  Name: <input type="text" name="name" value="<?php echo $name;?>">
				  <span class="error">* <?php echo $nameErr;?></span>
				  <br>
				  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
				  <span class="error">* <?php echo $emailErr;?></span>
				  <br>
				  Website: <input type="text" name="website" value="<?php echo $website;?>">
				  <span class="error"><?php echo $websiteErr;?></span>
				  <br>
				  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
				  <br>
				  Gender:
				  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
				  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
				  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
				  <span class="error">* <?php echo $genderErr;?></span>
				  <br>
				  <input type="submit" name="submit" value="Submit">  
				</form>

				<?php
				echo "<h2>Your Input:</h2>";
				echo $name;
				echo "<br>";
				echo $email;
				echo "<br>";
				echo $website;
				echo "<br>";
				echo $comment;
				echo "<br>";
				echo $gender;
				?>
				</section>

       <p id="demo"></p>
	   
	   <!-- Script Tag -->
	   <script>
	   
	   function YFunction() {
  alert('Boo!');
       }
	   
	   function mOver(obj) { 
         obj.innerHTML =  "What stresses me out: " 
        }

       function mOut(obj) {
         obj.innerHTML =  "Course: " 
		 
        }
		
		document.getElementById("date-button").addEventListener("click", showDate);
             
             var time = new Date().toTimeString();

        function showDate() {
             var today = new Date();
             var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
             var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
             var dateTime = date+' '+time;
             document.getElementById("date-display").innerHTML = dateTime;
			 
		
		setInterval(function(){ 
           var timeElement = document.getElementById("date-display");
           var currentTime = new Date();
           timeElement.innerHTML = currentTime.toLocaleTimeString();
            }, 1000);


}

	   </script>
	

        <!-- Script Tag -->
        <?php echo script_tag('js/script.js'); ?>
		
    </body>
</html>
