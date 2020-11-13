<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>
fIrSt_ChOiCe.com
</title>
<link rel="stylesheet" type="text/css"
href="mystyle.css" />
<style type="text/css">
h2
{
font-family:Tahoma;
color:pink;
border:1px solid black
}
.MagicScroll{
    background-color: <white>;
}
</style>
<link type="text/css" rel="stylesheet" href="magicscroll.css"/>
<script type="text/javascript" src="magicscroll.js"></script>
</head>
<body>
<script> alert("Welcome <?php echo $_SESSION['username']; ?>!")
</script>
<h1 align="center"style="font-size:50px;background-color:#FE9A2E;color:white">fIrSt ChOiCe</h1>
<div id="navbar">
  <a href="index.php">Home</a>
  <a href="mycart.php">Your Cart</a>
  <a href="customer.php">Customer Address</a>
</div>
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
}
</script>
<div class="MagicScroll" bgcolor="white" data-options="autoplay: 1000; step: 1; mode: carousel; height: 275;">
    <img src="sale1.jpg" />
    <img src="sale2.jpg" />
     <img src="sale3.png" />
	 <img src="sale4.jpg" />
	 <img src="sale5.jpg" />
	 <img src="sale6.jpg" />
	 <img src="sale7.jpg" />
</div>
<h2 align="center" >ELECTRONICS ITEMS</h2>
<table border="5" allign ="center" width="100%" cellpadding="10px" cellspacing="10px">
<tr align="center">
<td  vallign="top"  style="font-family:Cursive" width=50%>
<img src="r.jpg" width="500px" height="500px">
<h3>REALME 6(8gb)</h3>
<p >16,999 <div style="text-decoration:line-through">20,999</div></p>
</td>
<td vallign="top"  style="font-family:Cursive">
<img src="img1.jpg">
<a href="iphonex.php"><h3>Apple iphoneX</h3><a>
<p >60,000 <div style="text-decoration:line-through">70,999</div></p>
</td>
<td>
</td>
</tr>
</table>
<h2 align="center">HOUSEHOLD ITEMS</h2>
<table border="5" allign ="center" width="100%" cellpadding="10px" cellspacing="10px">
<tr align="center">
<td  vallign="top"  style="font-family:Cursive" width=50%>
<img src="l.jpg" width="500px" height="500px">
<h3>LAMP</h3>
<p >999 <div style="text-decoration:line-through">1,999</div></p>
</td>
<td vallign="top"  style="font-family:Cursive">
<img src="k.jpg">
<h3>KETTLE</h3>
<p >799 <div style="text-decoration:line-through">999</div></p>
</td>
</tr>
</table>
<h2 align="center">CLOTHING ITEMS</h2>
<table border="5" allign ="center" width="100%" cellpadding="10px" cellspacing="10px">
<tr align="center">
<td  vallign="top"  style="font-family:Cursive" width=50%>
<img src="t.jpg" width="500px" height="500px">
<h3>ZARA T-SHIRT</h3>
<p >999 <div style="text-decoration:line-through">1,999</div></p>
</td>
<td vallign="top"  style="font-family:Cursive">
<img src="j.jpg" width="500px" height="500px">
<h3>JEANS</h3>
<p >799 <div style="text-decoration:line-through">999</div></p>
</td>
</tr>

</table>
<div style="font-size:25px;background-color:#FE9A2E">
<p><a href="dashboard.php" style="color:white;font-family:cursive">Dashboard</a></p>
<a href="logout.php" style="color:white;font-family:cursive">Logout</a></br>
<a href="user_address.php" style="color:white;font-family:cursive">Add address</a>
</div>
</body>
</html>