<html>
<body>

<form action="welcome.php" method="post">

    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>

    <input type="submit">

</form>

</body>
</html>

<?php

//id is used by js and css identifiers
//name is used to process the form


echo $_POST["name"];

//method GET ook mogelijk   <form action="welcome_get.php" method="get">

echo $_GET["email"];

//
'<input type="submit" name="formSubmit" value="Submit" />';
if ($_POST['formSubmit'] == "Submit") echo "";

?>

<select name="formGender">

    <option value="">Select...</option>
    <option value="M">Male</option>
    <option value="F">Female</option>

</select>

<?php

$db = mysql_connect("servername","username","password");
   if(!$db) die("Error connecting to MySQL database.");
   mysql_select_db("databasename" ,$db);

$sql = "INSERT INTO movieformdata (moviename, yourname, Gender) VALUES (".
    PrepSQL($varMovie) . ", " .
    PrepSQL($varName) . ", " .
    PrepSQL($varGender) . ")";

function PrepSQL($value)
{
    // Stripslashes
    if(get_magic_quotes_gpc())
    {
        $value = stripslashes($value);
    }

    // Quote
    $value = "'" . mysql_real_escape_string($value) . "'";

    return($value);
}

mysql_query($sql);
