<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script type="text/javascript" src="jquery-1.11.0.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
      <script>
         $(function() {
           $("form[name='validacija']").validate({
             rules: {
               kategorija: {
                 required: true,
               },
               naslov: {
                 required: true,
                 maxlength: 200,
               },
               opis: {
                 required: true,
               },
               fotografija: {
                 required: true,
               },
             },
             messages: {
               kategorija: {
                 required: "Odaberite kategoriju",
               },
               naslov: {
                 required: "Naslov ne smije biti prazan",
                 maxlength: "Naslov ne smije biti duži od 70 znakova",
               },
               opis: {
                 required: "Opis ne smije biti prazan",
               },
               fotografija: {
                 required: "Odaberite fotografiju",
               }
            },
             submitHandler: function(form) {
               form.submit();
             }
           });
         });
      </script>
      <title>PWA vježba</title>
      <meta charset="UTF-8" />
      <style>
      <style>
         * {
         margin: 0;
         padding: 0;
         }
         body {
         font-family: Arial, Helvetica, sans-serif;
         font-size: 20px;
         }
         form {
         width: 40%;
         margin: 0 auto;
         }
         form label, form input, form button {
         display: block;
         width: 100%;
         }
         form input {
         height: 25px;
         line-height: 25px;
         color: rgb(73, 73, 73);
         padding: 0 6px;
         box-sizing: border-box;
         }
         form button {
         height: 30px;
         line-height: 30px;
         background: #059c6f;
         color: rgb(255, 255, 255);
         margin-top: 10px;
         cursor: pointer;
         border: 0;
         }
         form .error {
         color: #e43500;
         }
      </style>
   </head>
   <body>
     <div class="">
       <a href="index.php">Odjava</a>
     </div>
      <form action="/Spavalica.com_JosipZoric/admin.php" name="validacija" method="post">
        <label for="kategorija">Odaberite kategoriju: </label>
        <select id="kategorija" name="kategorija">
          <option value="glazba">Glazba</option>
          <option value="sport">Sport</option>
        </select>
         <label for="naslov">Naslov</label>
         <input type="text" name="naslov" id="naslov"/>
         Opis
         <TEXTAREA name="opis" id="opis" rows="20" cols="80"></TEXTAREA>
         <label for="fotografija">Fotografija: </label>
         <input type="file" id="fotografija" name="fotografija">
         <button type="submit" id="gumb">Objavi</button>
      </form>
   </body>
</html>
<?php
  $servername = "localhost";

  $username = "root";

  $password = "";

  $dbname = "spavalica";

  $kategorija = $_POST['kategorija'];
  $naslov = $_POST['naslov'];
  $opis = $_POST['opis'];
  $fotografija = $_POST['fotografija'];

  $dbc = mysqli_connect($servername, $username, $password, $dbname);

  $query = "INSERT INTO spavalica (kategorija, naslov, opis, fotografija) values ('$kategorija', '$naslov', '$opis', '$fotografija')";

  $result = mysqli_query($dbc, $query) or die('Error querying databese.');

  mysqli_close($dbc);

?>
