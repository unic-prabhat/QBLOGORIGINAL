
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Login</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />



    <!-- style -->
    <link rel="stylesheet" href="http://radixtouch.in/templates/admin/smile/source/assets/css/pages/extra_pages.css">
	<!-- favicon -->
    <link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smile/source/assets/img/favicon.ico" />


    <style media="screen">
    /*
*  Document   : extra_pages.css
*  Author     : RedStar Theme
*  Description: this style sheet for extra page like login, logout, page_404, page_500 etc..

    [Table of contents]

    1. BODY
    2. FORM TITLE
    3. LOGIN FORM
    4. CUSTOM CHECKBOX
    5. PAGE 404
    6. LOCK SCREEN
*/

body {
background: linear-gradient(to bottom right, #5D67ED, #46D7EA);
color: #666666;
font-family: 'RobotoDraft', 'Roboto', sans-serif;
font-size: 14px;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
}

/****************************
   2. FORM TITLE
*****************************/
.form-title{
padding: 30px 0;
text-align: center;
letter-spacing: 2px;
color: #fff;
}
.form-title h1 {
margin: 0 0 20px;
font-size: 48px;
font-weight: 300;
}
.form-title span {
font-size: 12px;
}
.form-title span .fa {
color: #33b5e5;
}
.form-title span a {
color: #33b5e5;
font-weight: 600;
text-decoration: none;
}

/****************************
   3. LOGIN FORM
*****************************/
.login-form {
position: relative;
background: #ffffff;
max-width: 320px;
width: 310px;
border-top: 5px solid #33b5e5;
box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
margin: 20px auto;
}
.login-form .toggle {
cursor: pointer;
position: absolute;
top: -0;
right: -0;
background: #33b5e5;
width: 30px;
height: 30px;
margin: -5px 0 0;
color: #ffffff;
font-size: 12px;
line-height: 30px;
text-align: center;
}
.login-form .form {
display: none;
padding: 40px;
}
.login-form .form:nth-child(2) {
display: block;
}
.reset
{
display:none;
}
.login-form h2 {
margin: 0 0 20px;
color: #33b5e5;
font-size: 18px;
font-weight: 400;
line-height: 1;
}
.login-form input {
outline: none;
display: block;
width: 100%;
border: 1px solid #d9d9d9;
margin: 0 0 20px;
padding: 10px 15px;
box-sizing: border-box;
-webkit-transition: 0.3s ease;
transition: 0.3s ease;
}
.login-form input:focus {
border: 1px solid #33b5e5;
color: #333333;
}
.login-form button {
cursor: pointer;
background: #33b5e5;
width: 100%;
border: 0;
padding: 10px 15px;
color: #ffffff;
-webkit-transition: 0.3s ease;
transition: 0.3s ease;
}
.login-form button:hover {
background: #178ab4;
}
.login-form .forgetPassword {

width: 100%;
padding-top: 10px;
box-sizing: border-box;
color: #666666;
font-size: 12px;
text-align: center;
}
.login-form .forgetPassword a {
color: #333333;
text-decoration: none;
}

/****************************
   4. CUSTOM CHECKBOX
*****************************/
.checkbox {
padding-left: 20px; }
.checkbox label {
  display: inline-block;
  position: relative;
  padding-left: 5px; }
  .checkbox label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 17px;
    height: 17px;
    left: 0;
    margin-left: -20px;
    border: 1px solid #cccccc;
    border-radius: 3px;
    background-color: #fff;
    -webkit-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
    -o-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
    transition: border 0.15s ease-in-out, color 0.15s ease-in-out; }
  .checkbox label::after {
    display: inline-block;
    position: absolute;
    width: 16px;
    height: 16px;
    left: 0;
    top: 0;
    margin-left: -20px;
    padding-left: 3px;
    padding-top: 1px;
    font-size: 11px;
    color: #555555; }
.checkbox input[type="checkbox"] {
  opacity: 0; }
  .checkbox input[type="checkbox"]:focus + label::before {
    outline: thin;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px; }
  .checkbox input[type="checkbox"]:checked + label::after {
    font-family: 'FontAwesome';
    content: "\f00c"; }
  .checkbox input[type="checkbox"]:disabled + label {
    opacity: 0.65; }
    .checkbox input[type="checkbox"]:disabled + label::before {
      background-color: #eeeeee;
      cursor: not-allowed; }
.checkbox.checkbox-inline {
  margin-top: 0; }

.checkbox-primary input[type="checkbox"]:checked + label::before {
background-color: #33b5e5;
border-color: #33b5e6; }
.checkbox-primary input[type="checkbox"]:checked + label::after {
color: #fff; }


/****************************
   5. PAGE 404
*****************************/
.page-404-form {
position: relative;
background: #ffffff;
max-width: 320px;
width: 330px;
border-top: 5px solid #33b5e5;
box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
margin: 0 auto;
}
.page-404-form .toggle {
cursor: pointer;
position: absolute;
top: -0;
right: -0;
background: #33b5e5;
width: 30px;
height: 30px;
margin: -5px 0 0;
color: #ffffff;
font-size: 12px;
line-height: 30px;
text-align: center;
}

.page-404-form .toggle a{
text-decoration: none;
}

.page-404-form .form {
padding: 40px;
}

.page-404-form h1 {
margin: 0 0 20px;
color: #33b5e5;
font-size: 90px;
font-weight: 700;
line-height: 1;
}
.page-404-form h3 {
margin: 0 0 20px;
font-size: 14px;
line-height: 1;
}
.page-404-form p {
margin: 0 0 20px;
font-size: 12px;
line-height: 1;
}

.page-404-form input {
outline: none;
display: block;
width: 100%;
border: 1px solid #d9d9d9;
margin: 0 0 20px;
padding: 10px 15px;
box-sizing: border-box;
-webkit-transition: 0.3s ease;
transition: 0.3s ease;
}
.page-404-form input:focus {
border: 1px solid #33b5e5;
color: #333333;
}
.page-404-form .ContactSupport {

width: 100%;
padding-top: 10px;
box-sizing: border-box;
color: #666666;
font-size: 12px;
text-align: center;
}
.page-404-form .ContactSupport a {
color: #333333;
text-decoration: none;
}


/****************************
   6. LOCK SCREEN
*****************************/
.lockscreen-form {
position: relative;
background: #ffffff;
max-width: 320px;
width: 310px;
border-top: 5px solid #33b5e5;
box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
margin: 20px auto;
}
.lockscreen-form .toggle {
cursor: pointer;
position: absolute;
top: -0;
right: -0;
background: #33b5e5;
width: 30px;
height: 30px;
margin: -5px 0 0;
color: #ffffff;
font-size: 12px;
line-height: 30px;
text-align: center;
}

.lockscreen-form .toggle a{
text-decoration: none;
}

.lockscreen-form .form {
padding: 40px;
}
.lockscreen-form .imgroundcorners {
  border-radius: 10px;
  width: 150px;
  height: 150px;
}
.lockscreen-form h1 {
margin: 0 0 10px;
color: #33b5e5;
font-size: 30px;
font-weight: 700;
line-height: 1;
}
.lockscreen-form h3 {
margin: 10px 0 10px;
  line-height: 1;
  font-size: 18px;
  font-weight: 700;
}
.lockscreen-form p {
margin: 0 0 10px;
font-size: 12px;
line-height: 1;
}

.lockscreen-form input {
outline: none;
display: block;
width: 100%;
border: 1px solid #d9d9d9;
margin: 0 0 10px;
padding: 10px 15px;
box-sizing: border-box;
-webkit-transition: 0.3s ease;
transition: 0.3s ease;
}
.lockscreen-form input:focus {
border: 1px solid #33b5e5;
color: #333333;
}

.lockscreen-form button {
cursor: pointer;
background: #33b5e5;
width: 100%;
border: 0;
padding: 10px 15px;
color: #ffffff;
-webkit-transition: 0.3s ease;
transition: 0.3s ease;
}
.lockscreen-form button:hover {
background: #178ab4;
}
.lockscreen-form .newaccount {

width: 100%;
padding-top: 5px;
box-sizing: border-box;
color: #666666;
font-size: 12px;
text-align: center;
}
.lockscreen-form .newaccount a {
color: #333333;
text-decoration: none;
}
.white-color{
color:#fff;
}
    </style>


</head>
<body>
  <div class="form-title">
      <h1>Login</h1>
  </div>
  <!-- Login Form-->
  <div class="login-form text-center">
      <!-- <div class="toggle"><i class="fa fa-user-plus"></i>
      </div> -->
      <div class="form formLogin">

      </div>
      <div class="form formRegister">
        <h2>Login to your account</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="text" placeholder="Email" name="email"  />
            <input type="password" placeholder="Password" name="password" />
            <button>Login</button>
        </form>
      </div>

  </div>
  <br><br><br><br><br>
  <br><br><br>

    <!-- start js include path -->
    <!-- <script src="assets/plugins/jquery/jquery.min.js" ></script>
    <script src="assets/js/pages/extra_pages/pages.js" ></script> -->
    <!-- end js include path -->
</body>
</html>
