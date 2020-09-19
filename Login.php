<!DOCTYPE html>
<html>
<head>
<title>Login Section</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>
<body>



<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'Login')">Login</button>
  <button class="tablinks" onclick="openTab(event, 'Register')">Register</button>

</div>

<div id="Login" class="tabcontent">
  <h3>Login</h3>

  <form action="check.php" method="POST">
  <table>
   <tr>
    <td>Username</td>
    <td><input type="text" name="username" required></td>
   </tr>

   <tr>
    <td>Password</td>
    <td><input type="password" name="password" required></td>
   </tr>
   <tr>
    <td><input type="submit" value="Login"></td>
   </tr>
  </table>
 </form>
</div>

<div id="Register" class="tabcontent">
  <h3>Register</h3>

  <form action="register.php" method="POST">
  <table>
   <tr>
    <td>Username</td>
    <td><input type="text" name="username" required></td>
   </tr>
   <tr>
    <td>Name</td>
    <td><input type="text" name="name" required></td>
   </tr>
   <tr>
    <td>Email</td>
    <td><input type="email" name="email" required></td>
   </tr>
   <tr>
    <td>Password</td>
    <td><input type="password" name="password" required></td>
   </tr>
   <tr>
    <td><input type="submit" value="Register"></td>
   </tr>
  </table>
 </form>
</div>



<script>
function openTab(evt, Fname) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(Fname).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

</body>
</html>
