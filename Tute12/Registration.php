<html>
    <body>
        <?php
        $fn=$_POST['fn'];
        $ln=$_POST['ln'];
        $un=$_POST['un'];
        $pw=$_POST['pw'];
        $gender=$_POST['gender'];
        $year=$_POST['year'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        
        ?>
        <table border="1">
            <tr>
            <td><b>First Name</b></td>
                <td><?php echo("$fn");?></td>
            </tr>
             <tr>
                   <td>Last Name</td>
                   <td><?php echo("$ln");?></td>
               </tr>
               <tr>
                   <td>Username</td>
                   <td><?php echo("$un");?></td>
               </tr>
               <tr>
                   <td>Password</td>
                   <td><?php echo("pw$");?></td>
               </tr>
               <tr>
                   <td>Gender</td>
                   <td><?php 
                       if($gender=="Male")
                       {
                           echo"Male";
                       }
                       else
                       {
                           echo"Female";
                       }
                       ?></td>
               </tr>
            <tr>
                   <td>Academic Year</td>
                   <td><?php
                        if($year == 1)
                    {
                        echo "1st Year";
                    }
                       else if($year == 2) 
                    {
                        echo "2nd Year";
                    }
                       elseif($year == 3)
                    {
                        echo "3rd Year";
                    }
                       else
                    {
                        echo "4th Year";
                    }
                       ?></td>
               </tr>
            <tr>
                     <td>Email</td>
                     <td><?php echo("$email");?></td>
                </tr>
               <tr>
                     <td>Phone No</td>
                     <td><?php echo("$phone");?></td>
              </tr>
        </table>
    </body>
</html>
