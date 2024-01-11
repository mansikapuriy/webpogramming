<html>
<style>
input
{
border-color:red;
}
#l1
{
    width:300px;
}

</style>
<body align="center" bgcolor="">
<h1>Registration Form</h1>
<form action="FORM2.php" method="post">
<table align="center" bgcolor="#FDESDC">
<tr>
<td>username:</td>
<td><input id="l1"  type="text" name="uname"/><br><br></td>
</tr>
<tr>
<td>password:</td>
<td border="bold"><input type="password" id="l1" name="pass"/><br><br></td>
</tr>
<tr>
<td>name:</td>
<td><input type="text" id="l1" name="name"/><br><br></td>
</tr>
<tr>
<td>address:</td>
<td><input type="text" id="l1" name="add"/><br><br></td>
</tr>
<tr>
<td>country:</td>
<td>
<select name="country">
<option value="ex" id="l1">PLEASE SELECT A COUNTRY</option><br>
<option value="india" >INDIA</option><br>
<option value="USA" >USA</option><br>
<option value="andorra" >ANDORRA</option><br>
<option value="angola" >ANGOLA</option><br>
</select>
</td>
</tr>
<tr>
<td>ZIP code:</td>
<td><input type="text"id="l1" name="code"/><br><br></td>
</tr>
<tr>
<td>email:</td>
<td><input type="email" id="l1"name="mail"/><br><br></td>
</tr>
<tr>
<td>sex:</td>
<td><input type="radio" name="m" value="male"/>male
<input type="radio" name="m" value="female"/>female <br><br>
</td>
</tr>
<tr>
<td>language:</td>
<td><input type="checkbox" name="e" value="english"/>english
<input type="checkbox" name="e" value="non english"/>non english<br><br>
</td>
</tr>
<tr>
<td>about:</td>
<td >
<input type="text" style="height:80px" name="about"/>
</td>
</tr>
</table>
<input type="submit"  name="submit" />
<?php?>