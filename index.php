<html>
<head>
<title> Dairy Milk </title>
<style>
#contain
{
width:100%;
height:100%;
background-color:#f9f906;
padding:40px;
}
#a1
{
 height:120px;
 width:120px;
 position:relative;
 bottom:665px;
 left:565px;
}
#a2
{
 height:98%;
 width:100%;
 position:relative;
 bottom:60px;
}
h1
{
position:relative;
left:500px;
top:-50px;
}
.login
{
width:300px;
height:350px;
background-color:#f9f906;
position:relative;
float:right;
bottom:640px;
right:30px;
}
h2{
text-align:center;
}
#e1{
position:relative;
top:10px;
left:30px;
}

 input[type=text] {
  width: 75%;
  padding: 10px 15px;
  margin: 20px 0 25px 0;
  border: none;
  background: #f1f1f1;
  position:relative;
  bottom:-1px;
  right:-34px;
}
#p1{
position:relative;
left:30px;
top:8px;
}
input[type=password]{
width: 75%;
  padding: 10px 15px;
  margin: 20px 0 25px 0;
  border: none;
  background: #f1f1f1;
  position:relative;
left:35px;
}


.btn {
  background-color: #00ff00;
  color: white;
  padding: 12px 28px ;
 border: none;
  cursor: pointer;
  width: 50%;
  opacity:0.9;
  border-radius: 12px;
  position:relative;
  left:75px;
  bottom:-10px;
}
.btn:hover {
  opacity: 1;
}


</style>
</head>
<body style="position:inline;">
<div id="contain">
<h1>Dairy Management</h1>
     <div id="img1">
	 <img id="a2" src="DairyReporter_com.jpg">
	     <div class="login">
		  <form action="linkstaff.php" class="container" method="post">
    <h2> Admin login</h2>
			<div id="e1">
			<label for="email"><b>Username:</b></label>
			</div>
			<input type="text" placeholder="Enter username" name="username" required>
			<br>
			<div id="p1">
			<label for="psw"><b>Password:</b></label>
			</div>
			<input type="password" placeholder="Enter Password" name="psw" required>
			<br>
    <button name="save" class="btn" name="btn">Login</button>
  </form>
		   
		   </div>
		   </div>
</div>
</body>
</html>