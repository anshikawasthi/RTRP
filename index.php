<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
    *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:"poppins",sans-serif;
}
body{
    background-color: #d5ddb4;
    background:linear-gradient(to right,#9b9595,#94aec4);
}
.container{
    background:#fff;
    width:450px;
    padding:1.5rem;
    margin:50px auto;
    border-radius:10px;
    box-shadow:0 20px 35px rgba(83, 83, 100, 0.9);
}
form{
    margin:0 2rem;
}
.form-title{
    color:#3c3737;
    font-size:1.5rem;
    font-weight:bold;
    text-align:center;
    padding:1.3rem;
    margin-bottom:0.4rem;
}
input{
    color:inherit;
    width:100%;
    background-color:transparent;
    border:none;
    border-bottom:1px solid #757575;
    padding-left:1.5rem;
    font-size:15px;
}
.input-group{
    padding:1% 0;
    position:relative;
}
.input-group i{
    position:absolute;
    color:black;
}
input:focus{
    background-color: transparent;
    outline:transparent;
    border-bottom:2px solid hsl(327,90%,28%);
}
input::placeholder{
    color:transparent;
}
label{
    color:#757575;
    position:relative;
    left:1.2em;
    top:-1.3em;
    cursor:auto;
    transition:0.3s ease all;
}
input:focus~label,input:not(:placeholder-shown)~label{
    top:-3em;
    color:hsl(327,90%,28%);
    font-size:15px;
}
.recover{
    text-align:right;
    font-size:1rem;
    margin-bottom:1rem;
}
.recover a{
    text-decoration:none;
    color:rgb(54, 54, 220);
}
.recover a:hover{
    color:blue;
    text-decoration:underline;
}
.btn{
    font-size:1.1rem;
    padding:8px 0;
    border-radius:5px;
    outline:none;
    border:none;
    width:100%;
    background:rgb(179, 213, 218);
    color:white;
    cursor:pointer;
    transition:0.9s;
}
.btn:hover{
    background:#07001f;
}
.links{
    display:flex;
    justify-content:space-around;
    padding:0 4rem;
    margin-top:0.9rem;
    font-weight:bold;
}
button{
    color:rgb(125,125,235);
    border:none;
    background-color:transparent;
    font-size:1rem;
    font-weight:bold;
}
button:hover{
    text-decoration:underline;
    color:blue;
}
</style>
</head>
<body>

<div class="container" id="signup" style="display:none;">
        <h1 class="form-title">REGISTER to take a test</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
                <label for="fName">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>

    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">WELCOME BACK ! <br> Sign In</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
          
            <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>

       
    </div>

    <script>
        function showSignUpForm() {
            document.getElementById('signup').style.display = 'block';
            document.getElementById('signIn').style.display = 'none';
        }

        function showSignInForm() {
            document.getElementById('signup').style.display = 'none';
            document.getElementById('signIn').style.display = 'block';
        }

        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            const formType = urlParams.get('form');
            if (formType === 'signup') {
                showSignUpForm();
            }
        };
    </script>
</body>
</html>
