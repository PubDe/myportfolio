<?php

    $name=$email=$num=$massage='';
    $nameErr=$mailErr=$phoneErr=$msgErr='';
    $isName=$isEmail=$isPhnNo=$isMsg=FALSE;


        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if(isset($_POST['sub'])){
                validateInput();
                insertMsgToDB();
            }
        }
    
        function insertMsgToDB(){
            if($GLOBALS['isName'] && $GLOBALS['isEmail'] && $GLOBALS['isPhnNo'] && $GLOBALS['isMsg']){
            $conn = new mysqli("localhost:3306", "root", "admin", "abcdb");
        
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
         
            $stmt = $conn->prepare ("INSERT INTO commenttb (username, email, phonenumber,massage) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $GLOBALS['name'], $GLOBALS['email'], $GLOBALS['num'], $GLOBALS['massage']);

            $stmt->execute();
        
            echo '<script>alert("New record created successfully")</script>';
        
            $stmt->close();
            $conn->close();
            }

          }

    
    
    
    function validateInput(){

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $GLOBALS['name'] = test_input($_POST["username"]);
            $GLOBALS['email'] = test_input($_POST["email"]);
            $GLOBALS['num'] = test_input($_POST["number"]);
            $GLOBALS['massage'] = test_input($_POST["msg"]);


        if(empty($GLOBALS['name'])){
            $GLOBALS['nameErr']='Username is required';
            $GLOBALS['isName']=FALSE;
        }else{ 
            $GLOBALS['isName']=TRUE;
        }

        if(empty($GLOBALS['email'])){
            $GLOBALS['mailErr']='Email is required';
            $GLOBALS['isEmail']=FALSE;
        }elseif (!filter_var($GLOBALS['email'], FILTER_VALIDATE_EMAIL)) { //https://alexwebdevelop.com/php-email-validation/#:~:text=You%20can%20validate%20an%20email,string%20contains%20a%20valid%20address.

            $GLOBALS['mailErr']=' enter a valid email address.';
            $GLOBALS['isEmail']=FALSE;
            
        }else{ 
            $GLOBALS['isEmail']=TRUE; 
        }

        if(empty($GLOBALS['num'])){
            $GLOBALS['phoneErr']='Phone number is required';
            $GLOBALS['isPhnNo']=FALSE;
        }elseif(!preg_match('/^[0-9]{10}+$/', $GLOBALS['num'])) {
            $GLOBALS['phoneErr']="Invalid Phone Number";
            $GLOBALS['isPhnNo']=FALSE;

        }else{ 
            $GLOBALS['isPhnNo']=TRUE; 
        }

        if(empty($GLOBALS['massage'])){
            $GLOBALS['msgErr']='Please drop a masssage';
            $GLOBALS['isMsg']=FALSE;
        }else{ 
            $GLOBALS['isMsg']=TRUE; 
        }
        
    }
    }


    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
      return $data;
      }

?>