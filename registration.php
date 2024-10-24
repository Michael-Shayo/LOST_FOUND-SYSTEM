<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset\Bootstrap-4\css\bootstrap.min.css">
    <link rel="stylesheet" href="asset\fontawesome-free-6.2.1-web\css\all.min.css">
    <link rel="stylesheet" href="asset\css\registration.css">
    <title>Document</title>
</head>
<body>
<div class="container">
            <div class="cover">
                <header>Signup Form</header>
                    <form action="regVerification.php" method="POST" multiLevelForm>

                        <div class="page" page-step>

                            <div class="head">Personal Details</div>
    
                            <div class="form-group">
                                <label for="">First Name:</label>
                                <input type="text" name="firstName" class="form-control" placeholder="Enter your First Name" pattern="[A-Za-z]+" required>
                            </div>
                            <div class="form-group">
                                <label for="">Last Name:</label>
                                <input type="text" name="lastName" class="form-control" placeholder="Enter your Last Name" pattern="[A-Za-z]+" required>
                            </div>
                            <div class="form-group">
                                <label for="">Gender:</label>
                                <select class="form-control" name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="button" data-next><span></span>NEXT</button>
                            </div>

                        </div>

                        <div class="page" page-step>

                            <div class="head">Contact Details</div>
    
                            <div class="form-group">
                                <label for="">E-mail:</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter your E-mail" required>
                            </div>
                            <div class="form-group">
                                <label for="">Phone Number:</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter your Phone number" maxlength="10" pattern="[0-9]{10}" required>
                            </div>
                            <div class="form-group">
                                <label for="">Block Address:</label>
                                <input type="text" name="addres" class="form-control" placeholder="Enter your home Address" required>
                            </div>
                            <div class="form-group">
                                <button type="button" data-previous><span></span>PREVIOUS</button>
                                <button type="button" data-next><span></span>NEXT</button>
                            </div>

                        </div>
                        <div class="page" page-step>

                            <div class="head">Login Details</div>

                            <div class="form-group">
                                <label for="">Password:</label>
                                <input type="password" name="pasword" class="form-control" placeholder="Enter your desired password" id="pwd" required>
                            </div>
                            <div class="form-group">
                                <label for="">Verify password:</label>
                                <input type="password" name="confirmPwd" class="form-control" placeholder="Verify your password"  onkeyup="passwordValidation()" id="confirmPwd" required>
                                <span class="error" id="confirmPasswordError" style="color: red; background: transparent; position:relative;">
                                    
                                </span>
                            </div>
                            <div class="form-group">
                                <button type="button" data-previous><span></span>PREVIOUS</button>
                                <button type="submit" name="submit_btn" id="submit_btn"><span></span>SUBMIT</button>
                            </div>

                        </div>
    
                    </form>
            </div>
        </div>

            </div>
        </div>
        

    </div> 
    <script src="asset\js\registration.js"></script>
    <script>
        function passwordValidation() {
            var passwd = document.getElementById("pwd").value;
            var confirmPasswd = document.getElementById("confirmPwd").value;
            var error = document.getElementById("confirmPasswordError");
            var submit_btn = document.getElementById("submit_btn");

            if(passwd !== confirmPasswd) {
                error.textContent = 'Passwords do not match';
                submit_btn.disabled = true;
            }
            else {
                error.textContent = '';
                submit_btn.disabled = false;
            }
        }
    </script>
</body>
</html>