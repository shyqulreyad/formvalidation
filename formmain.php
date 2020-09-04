<?php
   session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
   $name =$_POST['nam'];
   $email =$_POST['email']; 
$number =$_POST['number']; 
$password =$_POST['password'];
   
//    condition for name section
    if(!empty($name)){
                if(preg_match("/^[a-zA-Z-' ]*$/",$name) && strlen($name) >3){
                      $namemsg ="<script>
                        var para = document.getElementById('para1');
                             para.textContent = 'Looks Perfect !';
                             para.style.color ='green';              
                    </script>";
                    $nameok=1;
                }
              else{
                  $namemsg ="<script>
                    var para = document.getElementById('para1');
                         para.textContent = 'Not valid name';
                         para.style.color ='red';              
              </script>";
              }
    }
    else{
            
        $namemsg = "<script>
        var para = document.getElementById('para1');
             para.textContent = 'Please enter name';
             para.style.color ='red';              
       </script>";
   }
    
//    condition for email section
        if(empty($email)){
                      $emailmsg = "<script>
                        var para = document.getElementById('para2');
                             para.textContent = 'Please enter email';
                             para.style.color ='red';              
                </script>";
    }
    else{
         if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                   $emailmsg ="<script>
                      var para = document.getElementById('para2');
                           para.textContent = 'Not valid email';
                           para.style.color ='red';               
               </script>";
        }
        else{
                    $emailmsg ="<script>
                       var para = document.getElementById('para2');
                            para.textContent = 'Looks Perfect !';
                            para.style.color ='green';               
                  </script>";
            $emailok=1;
        }
    }
    
//    condition for number section
        if(empty($number)){
                   $numbermsg = "<script>
                       var para = document.getElementById('para3');
                            para.textContent = 'Please enter number';
                            para.style.color ='red';              
                </script>";
    }
    else{
            if(!preg_match('/^[0-9]{11}+$/', $number)){
                  $numbermsg ="<script>
                     var para = document.getElementById('para3');
                         para.textContent = 'Not valid number';
                         para.style.color ='red';              
                </script>";
        }
           else{
             $numbermsg ="<script>
                  var para = document.getElementById('para3');
                       para.textContent = 'Looks Perfect !';
                       para.style.color ='green';              
             </script>";
               $numberok=1;
        }
        
    }
    
//    condition for password section
        if(empty($password)){
            $passwordmsg = "<script>
                 var para = document.getElementById('para4');
                      para.textContent = 'Please enter password';
                      para.style.color ='red';              
             </script>";
    }
    else{
           if(strlen($password) < 8){
                 $passwordmsg ="<script>
                       var para = document.getElementById('para4');
                            para.textContent = 'Password is too short';
                            para.style.color ='red';            
               </script>";
                
        }
          else{
                 $passwordmsg ="<script>
                     var para = document.getElementById('para4');
                          para.textContent = 'Looks Perfect !';
                          para.style.color ='green';            
            </script>";
              $passok =1;
        }
    }
//    session passing to the main page
    header('location:index.php');
    $_SESSION["name"] = $namemsg;
    $_SESSION["email"] = $emailmsg;
    $_SESSION["number"] = $numbermsg;
    $_SESSION["password"] = $passwordmsg;
    $_SESSION["name1"] = $name;
    $_SESSION["email1"] = $email;
    $_SESSION["number1"] = $number;
    $_SESSION["password1"] = $password;
  if($passok==1 && $nameok==1 && $emailok==1 && $numberok==1){
      header('location:success.php');
  }

} ?>
