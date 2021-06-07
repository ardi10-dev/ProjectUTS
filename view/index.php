<?php

include('../controller/config.php');

$login_button = '';

if(isset($_GET["code"])){
    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
    if(!isset($token['error'])){
        $google_client->setAccessToken($token['access_token']);
        $_SESSION['access_token'] = $token['access_token'];
        $google_service = new Google_Service_Oauth2($google_client);
        $data = $google_service->userinfo->get();
        //print_r (data);
        if(!empty($data['name'])){
            $_SESSION['name'] = $data['name'];
        }
        
        if(!empty($data['family_name'])){
            $_SESSION['user_last_name'] = $data['family_name'];
        }

        if(!empty($data['email'])){
            $_SESSION['user_email_address'] = $data['email'];
        }

        if(!empty($data['gender'])){
            $_SESSION['user_gender'] = $data['gender'];
        }else{
            $_SESSION['user_gender'] = '-';
        }

        if(!empty($data['picture'])){
            $_SESSION['user_image'] = $data['picture'];
        }
    }
}

if(!isset($_SESSION['access_token'])){
    
    $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="../gambar/google1.png" alt=""width="30px" height="30px"></a>';
    
}

?>

<html>
//ini edit github Ardi
//ini edit pull Requests
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <tittle></tittle>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport' />
    <script scr="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script scr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script scr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <style>
        body {
            background-image: url(../gambar/images23.png);
            background-repeat: no-repeat;
            background-size: 2000px;
        }
    </style>
    <title>Login</title>
</head>

<body>
    <center>
        <fieldset style="background-color:#6495ED;margin-top:10%;width:20%;">
            <div class="contrainer">

                <div class="panel panel-default">

                    <?php
                        if($login_button == ''){
                            header("location:homeuser.php");
                            echo '<h3><a href="logout.php">logout</h3>';
                        }else{
                            echo '<div align="center">'.$login_button . '</div>';
                        }
                    ?><br>
                    <center>
                        <form action="../controller/prosesLogin.php?aksi=login" method="post">
                            <div>
                                <label>Username:</label>
                                <input type="text" name="username" id="username" />
                            </div><br>
                            <div>
                                <label>Password:</label>
                                <input type="password" name="password" id="password" />
                            </div><br>
                            <div>
                                <input type="submit" value="Login" class="tombol">
                            </div>
                        </form>
                </div>
            </div>
        </fieldset>
    </center>
</body>


</html>
