<?php

$username="";
$password="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$ans=$_POST;

	if (empty($ans["username"]))  {
        	echo "Korisnicki račun nije unesen.";

    		}
	else if (empty($ans["password"]))  {
        	echo "Lozinka nije unesena.";

    		}
	else {
		$username= $ans["username"];
		$password= $ans["password"];

		provjera($username,$password);
	}
}


function provjera($username, $password) {


	$xml=simplexml_load_file("admin.xml");


	foreach ($xml->user as $usr) {
  	 	$usrn = $usr->username;
		$usrp = $usr->password;
		$usrime=$usr->ime;
		$usrprezime=$usr->prezime;
		if($usrn==$username){
			if($usrp == $password){
				header("location:admin.php");
						exit();
				}
			else{
				echo "Netocna lozinka";
				return;
				}
			}
		}

	echo "Korisnik ne postoji.";
	return;
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Prijava</title>
  </head>
  <body>
      <div class="">
        <a href="index.php">Povratak</a>
      </div>
      <div class="prijava">
        <div class="nav-logo">
          <img class="logo1" src="images/logo.png">
        </div>
        <div class="nav-form">
          <form action="" method="post">
            <table>
              <tr>
                <td>
                  <label>Korisničko ime: </label>
                </td>
                <td>
                  <input id="name" name="username" type="text">
                </td>
              </tr>
              <tr>
                <td>
                  <label>Lozinka: </label>
                </td>
                <td>
                  <input id="password" name="password" placeholder="**********" type="password">
                  <td>
              </tr>
              <tr>
                <td>
                  <input name="submit" type="submit" value=" Prijava ">
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
  </body>
</html>
