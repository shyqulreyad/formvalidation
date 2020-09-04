<?php
  session_start();
if(!isset($_SESSION['name1'])){
    $_SESSION['name1'] ='';
   
}
if(!isset($_SESSION['email1'])){
    $_SESSION['email1'] ='';
    
}
if(!isset($_SESSION['number1'])){
    $_SESSION['number1'] ='';
    
}
if(!isset($_SESSION['password1'])){
    $_SESSION['password1'] ='';
    
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="form.css">
    <title>Form validation</title>
</head>

<body>
    <div class="signup">
        <h1>sign up</h1>
        <form action="formmain.php" method="post">
            <div>
                <input class="shadow" type="text" name="nam" placeholder="ENTER YOUR NAME" value="<?php echo htmlspecialchars($_SESSION['name1'])?>"><br>
                <span>
                    <div class="space">
                        <p id="para1">*Name can't contain special character</p>
                    </div>
                    <?php
        if(isset($_SESSION['name'])){
               echo $_SESSION['name'];
            unset($_SESSION['name']);
        }
        
        ?>
                </span>
            </div>
            <div>
                <input class="shadow" type="text" name="email" placeholder="ENTER PERSONAL EMAIL" value="<?php echo htmlspecialchars($_SESSION['email1'])?>"><br>
                <span>
                    <p id="para2">*Email should be Valid</p>
                    <?php
        if(isset($_SESSION['email'])){
            echo $_SESSION['email'];
            unset($_SESSION['email']);
        }
        
        ?>
                </span>

            </div>

            <div>

                <input class="shadow" type="text" name="number" placeholder="ENTER PHONE NUMBER" value="<?php echo htmlspecialchars($_SESSION['number1'])?>"><br>
                <span>
                    <p id="para3">*Number should be Valid</p>
                    <?php
        if(isset($_SESSION['number'])){
            echo $_SESSION['number'];
            unset($_SESSION['number']);
        }
        
        ?>
                </span>

            </div>


            <div>
                <input class="shadow" type="password" name="password" placeholder="ENTER STRONG PASSWORD" value="<?php echo htmlspecialchars($_SESSION['password1'])?>"><br>
                <span>
                    <p id="para4">*Minimum 8 digit Password</p>
                    <?php
        if(isset($_SESSION['password'])){
             echo $_SESSION['password'];
            unset($_SESSION['password']);
        }
        
        ?>
                </span>

            </div>


            <div>
                <input class="btn" type="submit" name="submit"><br>


            </div>


        </form>

    </div>
</body>

</html>
