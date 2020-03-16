<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <style>
 
   </style>
    <link   href="css/index_n.css" rel="stylesheet">
    <script src="js/index_n.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    
    <!------ Include the above in your HEAD tag ---------->
    <title>Document</title>
</head>

<body>

    <div class="login-reg-panel">
        

        <div class="register-info-box">
            <h2>Your Company</h2>
            <p>Welcome</p>
            <!-- <label id="label-login" for="log-login-show">Register</label> -->
            <!-- <input type="radio" name="active-log-panel" id="log-login-show"> -->
        </div>

        <div class="white-panel">
            <!-- <div class="container"> -->
                <table width="80%" align="center" height="400px">
                    <tr>
                        <td align="center">
                           <a  href="login.php"><button class="button"><span>ADMIN </span></button></a> 
                            <a href="attendenceMark.php"><button class="button" ><span>MARK  </span></button></a>
                        </td>
                    </tr>
                    
                </table>
                
            </div>
            <div class="register-show">
                <!-- <h2>REGISTER</h2> -->
                <!-- <input type="text" placeholder="Email"> -->
                <!-- <input type="password" placeholder="Password"> -->
                <!-- <input type="password" placeholder="Confirm Password"> -->
                <!-- <input type="button" value="Register"> -->
            </div>
        </div>
    </div>
</body>

</html>