      
<?php
       
  // define variables and set to empty values
     $nameErr = $emailErr = $genderErr = $agreeErr = "";
     $name = $email = $gender = $agree = $group = $details = $course = "";

     if ($_SERVER["REQUEST_METHOD"] == "POST") {

          if (empty($_POST["name"])) {
              $nameErr = "Name is required";  // bonus
              } else {
                 $name = $_POST['name'];
              }
           
          if (empty($_POST["email"])) {
              $emailErr = "E-mail is required";
                } else {
                   $email = $_POST['email'];
                }
                
           if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
                    } else {
                       $gender = $_POST['gender'];
                    }

           if (empty($_POST["agree"])) {
                $agreeErr = "Agree is required";
                    } else {
                           $agree = $_POST['agree'];
                        }

          if (!(empty($_POST["group"]))) {
            $group = $_POST['group'];
                }
          if (!(empty($_POST["details"]))) {
            $details = $_POST['details'];
                }
            //     if (!(empty($_POST["course"]))) {
            // $course = $_POST['course'];
            //     } 
            
            // Check if form is submitted successfully
	// if(isset($_POST["submit"]))
	// {
		// Check if any option is selected
		
    // }
}
?>

   <!--****************************** HTML************************** -->

<html>
     <head>
         <h2> Ahmed Sobhy  -  Lab_3_PHP  Form </h2>
         <link rel="stylesheet" href="css/main.css">
     </head>
    <body>

       <div class="container-form">
          <h2> Application Name : AAST_BIS class registeration </h2>

          <form action = "<?php $_PHP_SELF ?>" method = "POST">
            <div class="left">
                <div class="left-box"> <label>   Name   </label> </div>
                <div class="left-box"> <label>   E-mail </label> </div>
                <div class="left-box"> <label>   Group  </label> </div>
                <div class="your-address"> <label>   Class Details  </label> </div>
                <div class="left-box"> <label>   Gender  </label> </div>
                <div class="left-box"> <label>   Select Courses  </label> </div>
                <div class="left-box"> <label>   Agree  </label> </div>
            </div>
            <div class="right">
                <div class="right-box"> <input type="text" name = "name" style="width:300px; height: 20px;"> <span>*  <?php echo $nameErr;?> </span> </div>
                <div class="right-box"> <input type="text" name = "email" style="width:350px; height: 20px;"> <span>* <?php echo $emailErr;?> </span> </div>  
                <div class="right-box"> <input type="text" name = "group" style="width:350px; height: 20px;"> </div>
                <div class="right-box"> <input type="text" name = "details" style="width:350px; height: 60px;"> </div>    
                <div class="right-box"> <input type="radio" name = "gender" value="male"> Male   
                                        <input type="radio" name = "gender" value="female"> Female <span>* <?php echo $genderErr;?> </span>
                </div>
                <div class="right-box">
                    <select   name = 'course[]' multiple size = 6 style="width:70px; height: 60px;" >
                        <option value='php'>   PHP    </option>
                        <option value='js'>    JS     </option>
                        <option value='mysql'> MySQL  </option>
                        <option value='html'>  HTML   </option>
                        <option value='css'>   CSS    </option>
                   </select>
                </div>
                <div class="right-box"> <input type="checkbox" name = "agree"> <span>* <?php echo $agreeErr;?> </span> </div>       
            </div>
            <input type = "submit" />  <br />
            <div class="clear"></div>
         </form> 
       </div>
    </body>
</html>

<!---------------------------------PHP Print ---------------------------------- -->

<?php
   
   echo "Name           :    $name ";   
   echo "<br>";
   echo "Email          :    $email ";   
   echo "<br>";
   echo "Gender         :    $gender ";   
   echo "<br>";  
   echo "Group          :    $group ";   
   echo "<br>";
   echo "Class Details  :    $details ";   
   echo "<br>";
   echo "Course         :     ";   

    if(isset($_POST["course"]))
		{
			// Retrieving each selected option
			foreach ($_POST['course'] as $course)
				echo  "  $course  -  ";
		}
 
?>

