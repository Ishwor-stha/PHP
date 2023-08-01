<!--Form making to take data and display also using php-->
<!DOCTYPE html>
    <html>
        <head>
            <title>Registration form</title>
        </head>
        <body>
        <?php
            if(isset($_POST["Submit"])){
                //collecting data
                $firstname=$_POST["firstname"];
                $lastname=$_POST["lastname"];
                $email=$_POST["email"];
                $dob=$_POST["dob"];
                $gender=$_POST["gender"];
                $course=$_POST["courses"];
                $city=$_POST["City"];
                $message=$_POST["message"];
                $status=0;

                include("connection.php");

                $sql = "INSERT INTO inquiry(firstname, lastname, email, dob, gender, course, city, message, status)VALUES('$firstname', '$lastname', '$email', '$dob', '$gender', '$course', '$city', '$message', '$status')";
                $qry=mysqli_query($conn, $sql) or die(mysqli_error($conn));
                if($qry)
                {
                    echo "Data Inserted";
                }
                else{
                    echo "Something wrong";     
                }
                
    /*if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Entered Information:</h2>";
        echo "<p><strong>Firstname:</strong> " . $_POST["username"] . "</p>";
        echo "<p><strong>Lastname:</strong> " . $_POST["lastname"] . "</p>";
        echo "<p><strong>Password:</strong> " . $_POST["password"] . "</p>";
        echo "<p><strong>Remember Password:</strong> " . (isset($_POST["remember"]) ? $_POST["remember"] : "") . "</p>";
        echo "<p><strong>Email:</strong> " . $_POST["email"] . "</p>";
        echo "<p><strong>Date of Birth:</strong> " . $_POST["dob"] . "</p>";
        echo "<p><strong>Gender:</strong> " . $_POST["gender"] . "</p>";
        echo "<p><strong>Courses:</strong> " . implode(", ", isset($_POST["courses"]) ? $_POST["courses"] : []) . "</p>";
        echo "<p><strong>City:</strong> " . $_POST["City"] . "</p>";
        echo "<p><strong>Message:</strong> " . $_POST["message"] . "</p>";*/
    }
    ?>
            <form method="post" name="login" enctype="multipart/form-data" action="">
                <fieldset>
                    <legend>Course Enquiry Form</legend><br>
                    <label>First name</label>
                        <input type="text" name="firstname" required><br><br>
                    <label>Last name</label>
                        <input type="text" name="lastname" required><br><br>
                    
                        <br>
                    <label>Email</label>
                        <input type="email" name="email"><br><br>
                    <label>Date of birth</label>
                        <input type="date" name="dob"><br><br>
                    <label>Gender</label>
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="Rather not to say">Rather not to say<br><br>
                    </label>
                    <table>
                        <tr>
                            <td><label>Courses</label></td>
<!--  <label>Courses</label>-->
<td><input type="checkbox" name="courses" value="BCA">BCA</td>
                    <td><input type="checkbox" name="courses" value="BBM">BBM</td>
                    <!--
                    <td><input type="checkbox" name="courses[]" value="BSW">BSW</td>
                    <td><input type="checkbox" name="courses[]" value="MBS">MBS</td>
                    <td><input type="checkbox" name="courses[]" value="BBA">BBA</td>
-->
                        </tr>
                    </table>
                        <br>
                    <label>City</label>
                        <select name="City">
                        <option value="">Select your city</option>
                        <option value="1">Kathmandu</option>
                        <option value="2">Pokhara</option>
                        <option value="3">Bharatpur</option>
                        <option value="4">Lalitpur</option>
                        <option value="5">Biratnagar</option>
                        <option value="6">Birgunj</option>
                        <option value="7">Butwal</option>
                        <option value="8">Nepalgunj</option>
                        <option value="9">Bardibas</option>
                        <option value="10">Bhadrapur</option>
                        </select>  
                        <br>
                        <br>
                    <label>Message</label>
                    <br>
                        <textarea id="message" name="message" rows="4" cols="50"> </textarea>
                    <br>
                    <br>
                    <table>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="Submit" value="submit" style="margin-left: 10px;"></td>
                            <td> </td>
                            <td><input type="reset" name="Submit" value="Cancel" style="margin-left: 50px;"></td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </body>   
    </html>
             
                    

