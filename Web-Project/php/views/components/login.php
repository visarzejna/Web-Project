<div class="popup">
    <form action="../controllers/authenticate.php" method="post" onsubmit="return validate()">
        <div class="popupcontent">
            <img src="../../images/CloseButton.png" alt="x" id="close">
            <span>Be the first to get notified about new drops.</span>
            <img src="../../images/userIMG.png" class="userPhoto">
            <div class="hideLogin">
                <input type="text" name="login_username" placeholder="Username" id="username">
                <input type="password" name="login_password" placeholder="Password" id="userpass">
                <input type="submit" name="loginBtn" class="button" Value="Login">
                <p>Don't have an account? <a href="#" id="SignUp">Sign up</a></p>
            </div>
            <div>

                <div id="RegisterInput">
                    <input type="email" name="email" placeholder="Email" id="rEmail" onsubmit="return validate()">
                    <input type="text" name="username" placeholder="Username" id="rUName">
                    <input type="password" name="password" placeholder="Password" id="rPass">
                    <input type="submit" name="registerBtn" id="registerButton" Value="Register">
                </div>
            </div>
        </div>
    </div>
</form>
</div>