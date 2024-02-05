<!DOCTYPE html>
<!-- saved from url=(0029)http://localhost/register.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
<style>
    body {
        font-family: 'Montserrat', sans-serif;
        background: #E5E5E5;
        display: flex;
        justify-content: left;
        align-items: left;
        flex-direction: column;
        background-image: url("Unikl.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        min-height: 100vh;
    }

    img {
        width: 200px;
        height: 200px;
    }

    h1 {
        font-weight: bold;
        margin: 0;
        font-size: 30px;
        text-transform: capitalize;
    }

    a {
        color: #333;
        font-size: 14px;
        text-decoration: none;
        margin: 15px 0;
    }

    .privacy {
        color: #737272;
    }

    .form-container form {
        background: #fff;
        display: flex;
        flex-direction: column;
        padding: 20px 50px;
        margin-top: 10px;
        width: 400px;
        height: auto;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .social-container {
        margin: 20px 0;
    }

    .social-container a {
        border: 1px solid #ddd;
        border-radius: 50%;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        margin: 0 5px;
        height: 40px;
        width: 40px;
    }

    .form-container input {
        background: #eee;
        border: none;
        padding: 12px 15px;
        margin: 8px 0;
        width: 100%;
    }

    .form-container textarea {
        background: #eee;
        border: none;
        padding: 12px 15px;
        margin: 8px 0;
        width: 100%;
    }

    button {
        border-radius: 20px;
        border: 1px solid #101010;
        background: #101010;
        color: #fff;
        font-size: 12px;
        font-weight: bold;
        padding: 12px 45px;
        letter-spacing: 1px;
        text-transform: uppercase;
        outline: none;
        cursor: pointer;
        transition: transform 0.3s ease-in-out;
    }

    button:hover {
        transform: scale(1.1);
    }

    .back {
        position: absolute;
        top: 10px;
        left: 10px;
    }
</style><script src="./Register Form_files/cb=gapi.loaded_0" async=""></script><script src="./Register Form_files/platform.js.download" async="" defer="" gapi_processed="true"></script><style>.abcRioButton{border-radius:1px;box-shadow:0 2px 4px 0 rgba(0,0,0,.25);-moz-box-sizing:border-box;box-sizing:border-box;-webkit-transition:background-color .218s,border-color .218s,box-shadow .218s;transition:background-color .218s,border-color .218s,box-shadow .218s;-webkit-user-select:none;-webkit-appearance:none;background-color:#fff;background-image:none;color:#262626;cursor:pointer;outline:none;overflow:hidden;position:relative;text-align:center;vertical-align:middle;white-space:nowrap;width:auto}.abcRioButton:hover{box-shadow:0 0 3px 3px rgba(66,133,244,.3)}.abcRioButtonBlue{background-color:#4285f4;border:none;color:#fff}.abcRioButtonBlue:hover{background-color:#4285f4}.abcRioButtonBlue:active{background-color:#3367d6}.abcRioButtonLightBlue{background-color:#fff;color:#757575}.abcRioButtonLightBlue:active{background-color:#eee;color:#6d6d6d}.abcRioButtonIcon{float:left}.abcRioButtonBlue .abcRioButtonIcon{background-color:#fff;border-radius:1px}.abcRioButtonSvg{display:block}.abcRioButtonContents{font-family:Roboto,arial,sans-serif;font-size:14px;font-weight:500;letter-spacing:.21px;margin-left:6px;margin-right:6px;vertical-align:top}.abcRioButtonContentWrapper{height:100%;width:100%}.abcRioButtonBlue .abcRioButtonContentWrapper{border:1px solid transparent}.abcRioButtonErrorWrapper,.abcRioButtonWorkingWrapper{display:none;height:100%;width:100%}.abcRioButtonErrorIcon,.abcRioButtonWorkingIcon{margin-left:auto;margin-right:auto}.abcRioButtonErrorState,.abcRioButtonWorkingState{border:1px solid #d5d5d5;border:1px solid rgba(0,0,0,.17);box-shadow:0 1px 0 rgba(0,0,0,.05);color:#262626}.abcRioButtonErrorState:hover,.abcRioButtonWorkingState:hover{border:1px solid #aaa;border:1px solid rgba(0,0,0,.25);box-shadow:0 1px 0 rgba(0,0,0,.1)}.abcRioButtonErrorState:active,.abcRioButtonWorkingState:active{border:1px solid #aaa;border:1px solid rgba(0,0,0,.25);box-shadow:inset 0 1px 0 #ddd;color:#262626}.abcRioButtonWorkingState,.abcRioButtonWorkingState:hover{background-color:#f5f5f5}.abcRioButtonWorkingState:active{background-color:#e5e5e5}.abcRioButtonErrorState,.abcRioButtonErrorState:hover{background-color:#fff}.abcRioButtonErrorState:active{background-color:#e5e5e5}.abcRioButtonErrorState .abcRioButtonErrorWrapper,.abcRioButtonWorkingState .abcRioButtonWorkingWrapper{display:block}.abcRioButtonErrorState .abcRioButtonContentWrapper,.abcRioButtonErrorState .abcRioButtonWorkingWrapper,.abcRioButtonWorkingState .abcRioButtonContentWrapper{display:none} .-webkit-keyframes abcRioButtonWorkingIconPathSpinKeyframes {0% {-webkit-transform: rotate(0deg)}}</style></head>


<body>
    <div class="back">
        <button onclick="window.location.href = &#39;user login.php&#39;;" fdprocessedid="5528hd">Back</button>
    </div><br><br>

    <div class="form-container sign-up-container">
        <form name="userform" method="post" action="http://localhost/adduser.php">
            <img src="./Register Form_files/unikl logo.png" alt="UniKL logo">

            <input placeholder="Email" type="email" name="femail" size="50" required="" fdprocessedid="sfm38d">
            <input type="password" placeholder="PASSWORD" name="fpass" size="20" required="" fdprocessedid="5mqoqo">
            <button type="submit" fdprocessedid="5py5ac">Sign Up</button><br>
            
            <!-- Add the Google Sign-In button -->
            <div class="g-signin2" data-onsuccess="onGoogleSignIn" data-gapiscan="true" data-onload="true"></div>

        </form>
    </div>

    <script>
        // Function called after Google Sign-In succeeds
        function onGoogleSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            // You can access user information from the 'profile' object
            // Example: var userId = profile.getId();
            // Example: var userName = profile.getName();
            // Example: var userEmail = profile.getEmail();

            // Add code to send user information to your server for registration
            // You can use AJAX to send the data to your server
            // Example: $.post("register_with_google.php", { id: userId, name: userName, email: userEmail });
        }
    </script>


</body></html>
