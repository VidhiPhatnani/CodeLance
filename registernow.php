<html>
     <head>
            <title>Register Now</title>
           <link rel = "stylesheet" type = "text/css" href = "design.css">
           <link rel = "stylesheet" type = "text/css" href = "coursecode.css">
            <script language = "javascript">
                function checkempty()
                 {
	   name = document.getElementById("full_name").value;
                        num = document.getElementById("mobile_no").value;
                        mail = document.getElementById("email").value;
                        pword = document.getElementById("pass").value;
                        var atindex = mail.indexOf("@");
                        var dotindex = mail.indexOf(".");
                        if(name == "" || num == "" || mail == "" || pword == "")
                        {
                              alert("Incomplete form");
                               return false;
                        }
                        else if(pword.length < 8)
                        {
                                alert("Invalid password");
                                return false;
                         }
                        else if(num.length < 10 || num.length > 10)
                        {
                               alert("Invalid Number");
                               return false;
                         }
                         else if(atindex <= 0 || atindex+1 >= dotindex || dotindex+1 >= a.length-1)
                         {
                                 alert("Invalid email");
                                 return false;
                         }
                        else
                         {
                               return true;
                         }
                 }
           </script>
     </head>
     <body bgcolor = "#F3ECEC">
             <!-- ----------------Header----------------------- -->
                    <div id = "header" class="section">
                          <div id="brand">
                                  <img alt="" class="img-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSs7iK9_G5dPv3wsfXHdm-AOq5kTrwlLRTHOMNXAOS_i60PY079bqruKGKzrwEXVXcT944&usqp=CAU">
                                   <p>LANCE</p>
                          </div>
                          <div id = "navigation">
	              <ul class = "nav-items">
                                        <li class = "nav-link">
                                             <a href="home2.html"><b>Home</b></a>
                                        </li>
                                        <li class = "nav-link">
		    <a href = "oucourses.html"><b>Our Courses</b></a>	                   
                                         </li>
                                         <li class = "nav-link">
                                               <a href = "#"><b>Register Now</b></a>
                                         </li>
                                   </ul>
                          </div>
                    </div>
                    <!-- ----------------Header End----------------------- -->
             <!-- ---------------------Content----------------------------- -->
            <!-- ----------------------Registeration-------------------- -->
            <div class = "regimg">
                  <img src = "backimg.jpg" alt = "back img">
           </div>
           <div class = "regform">
             <h2 align = "center"><span>Register here</span></h2>
                 <form method = "post" class = "f1" align = "center" onsubmit="return checkempty()" action = "submit.html">
                 <input type = "text" placeholder = "Full Name" id = "full_name"><br>
                 <input type = "text" placeholder = "Email" id = "email"><br>
                <input type = "text" placeholder = "Mobile Number" id = "mobile_no"><br>
                <input type = "text" placeholder = "Password" id = "pass"><br>
               <input type = "submit" value = "Register" class = "submit">
             </form>
           <!-- -----------------------Registration End-------------------- -->
           <!-- -----------------------Calculator for the courses taken------ -->
                <h2 align = "center"><span>Calculate your investment in improving skills</span></h2>
                <table class = "coursecodes" align = "center">
                    <tr>
                   <td>
                   <ul>
                            <li><p>HTML , CSS , JAVASCRIPT <br>  Course Code : CL1 <br> $20</p></li>
                            <li><p>ANDROID APP DEVELOPMENT <br> Course Code : CL 2 <br> $28</p></li>
                            <li><p>SQL <br> Course Code : CL3 <br> $25 </p></li>
                   </ul>
                   </td>
                   <td>
                   <ul>
                            <li><p>C , C++ , C# <br> Course Code : CL4<br> $20</p></li>
                           <li><p>DATA SCIENCE <br> Course Code : CL5<br> $40</p></li>
                            <li><p>GAME DEVELOPMENT<br> Course Code : CL6<br> $25</p></li>
                   </ul>
                   </td>
                   <td>
                    <ul>
                            <li><p>PYTHON <br> Course Code : CL7<br> $18</p></li>
                            <li><p>MACHINE LEARNING <br> Course Code : CL8<br> $45</p></li>
                            <li><p>NETWORK SECURITY<br> Course Code : CL9<br> $50</p></li>
                    </ul>
                   </td>
                    </tr>
                   </table>
                   <form align = "center" name = "f2" method = "post" action ="<?php  echo $_SERVER['PHP_SELF'];  ?>">
                    <input type = "text" name = "first_course" placeholder = "Enter the first course taken"><br>
                    <input type = "text" name = "second_course" placeholder = "Enter the second course taken"><br>
                    <input type = "text" name = "third_course" placeholder = "Enter the third course taken"><br>
                    <input type = "submit" value = "CALCULATE" name = "calculate"><br>
                    <?php
	      if(isset($_POST['calculate']))
	      {
                                 $first = $_POST["first_course"];
	            $second = $_POST["second_course"];
	            $third = $_POST["third_course"];
                                  if($first == "CL1" || $second == "CL1" || $third == "CL1")
                                   {
                                        if($first == "CL1")
                                       {
		$num1 = 20;
                                        }
                                         if($second == "CL1")
                                        {
                                             $num2 = 20;
                                         }
                                         if($third == "CL1")
                                         {
                                               $num3 = 20;
                                          }
                                    }
                                    if($first == "CL2" || $second == "CL2" || $third == "CL2")
                                   {
                                         if($first == "CL2")
                                       {
		$num1 = 28;
                                        }
                                         if($second == "CL2")
                                        {
                                             $num2 = 28;
                                         }
                                         if($third == "CL2")
                                         {
                                               $num3 = 28;
                                          }
                                   }
                                    if($first == "CL3" || $second == "CL3" || $third == "CL3")
                                   {
                                         if($first == "CL3")
                                       {
		$num1 = 25;
                                        }
                                         if($second == "CL3")
                                        {
                                             $num2 = 25;
                                         }
                                         if($third == "CL3")
                                         {
                                               $num3 = 25;
                                          }
                                   }
                                   if($first == "CL4" || $second == "CL4" || $third == "CL4")
                                   {
                                         if($first == "CL4")
                                       {
		$num1 = 20;
                                        }
                                         if($second == "CL4")
                                        {
                                             $num2 = 20;
                                         }
                                         if($third == "CL4")
                                         {
                                               $num3 = 20;
                                          }
                                   }
                                   if($first == "CL5" || $second == "CL5" || $third == "CL5")
                                   {
                                         if($first == "CL5")
                                       {
		$num1 = 40;
                                        }
                                         if($second == "CL5")
                                        {
                                             $num2 = 40;
                                         }
                                         if($third == "CL5")
                                         {
                                               $num3 = 40;
                                          }
                                   }
                                   if($first == "CL6" || $second == "CL6" || $third == "CL6")
                                   {
                                         if($first == "CL6")
                                       {
		$num1 = 25;
                                        }
                                         if($second == "CL6")
                                        {
                                             $num2 = 25;
                                         }
                                         if($third == "CL6")
                                         {
                                               $num3 = 25;
                                          }
                                   }
                                    if($first == "CL7" || $second == "CL7" || $third == "CL7")
                                   {
                                         if($first == "CL7")
                                       {
		$num1 = 18;
                                        }
                                         if($second == "CL7")
                                        {
                                             $num2 = 18;
                                         }
                                         if($third == "CL7")
                                         {
                                               $num3 = 18;
                                          }
                                   }
                                     if($first == "CL8" || $second == "CL8" || $third == "CL8")
                                   {
                                         if($first == "CL8")
                                       {
		$num1 = 45;
                                        }
                                         if($second == "CL8")
                                        {
                                             $num2 = 45;
                                         }
                                         if($third == "CL8")
                                         {
                                               $num3 = 45;
                                          }
                                   }
                                    if($first == "CL9" || $second == "CL9" || $third == "CL9")
                                   {
                                         if($first == "CL9")
                                       {
		$num1 = 50;
                                        }
                                         if($second == "CL9")
                                        {
                                             $num2 = 50;
                                         }
                                         if($third == "CL9")
                                         {
                                               $num3 = 50;
                                          }
                                   }
	              if($first == "" || $second == "" || $third == "")
                                  {
		$num1 = 0;
                                          $num2 = 0;
                                          $num3 = 0;
                                   }
                                   $result = $num1 + $num2 + $num3;
                                   if($result  > 80)
                                   {
                                           $result = $result - 30;
                                    }
                                    echo "THE TOTAL INVESTMENT YOU CAN MAKE FOR LEARNING THREE NEW SKILLS IS :  $".$result;
	       }
	?>
                 </form>
          </div>
           <!-- -----------------------Calculator for the course taken END------ -->
            <!-- ---------------------Content End------------------------- -->
            <!-- ----------------Footer------------------------------- -->
                          <div id="contactus" class="section"> 
                               <form id = "form1" align = center>
                                   <h2 align = "center"><span>Contact Us</span></h2>
                                   <input type = "text" name="tname" placeholder="Name" required><br>
  	              <input type = "text" name="temail" placeholder="Email" required><br>
                                   <textarea name="message" placeholder = "Message" required></textarea><br>
	              <input type = "submit" value= "Send Message" class = "submit">
	         </form>
                          </div>
                          <div id="followus" class="section">
                                  <h2 align="center"><span>Follow Us</span></h2><br>
                                  <a href = "website_home.html" target="_top">
                                        <img alt="CodeLance" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSs7iK9_G5dPv3wsfXHdm-AOq5kTrwlLRTHOMNXAOS_i60PY079bqruKGKzrwEXVXcT944&usqp=CAU">
                                   </a>
                                  <a href="#">
                                       <img alt="Facebook" src="https://cdn3.iconfinder.com/data/icons/capsocial-round/500/facebook-512.png">
                                  </a>
                                 <a href = "#">
                                       <img alt = "Twitter" src = "https://www.sololearn.com/Uploads/icons/twitter.png">
                                 </a>
                                 <a href="#">
                                       <img alt = "Instagram" src = "https://i.pinimg.com/originals/71/72/16/7172161b580470deb78078669236d2c1.jpg">
                                 </a>
                          </div>
                         <div class = "copyright">
	           &copy; 2021 CODELANCE .All rights reserved. 
                         </div>
                    <!-- ----------------Footer End----------------------- -->       
     </body>
</html>