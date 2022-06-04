<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Prijava</title>
  </head>
  <body>
      <div class="">
        <a href="index.php">Odjava</a>
      </div>
          <form action="" method="post">
            <table>
              <tr>
                <td>
                  <label for="kategorija">Odaberite kategoriju: </label>
                  <select id="kategorija" name="kategorija">
                    <option value="glazba">Glazba</option>
                    <option value="sport">Sport</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>
                  <label>Naslov: </label>
                </td>
                <td>
                  <input id="name" name="username" type="text">
                </td>
              </tr>
              <tr>
                <td>
                  <label>Opis: </label>
                </td>
                <td>
                  <TEXTAREA name="thetext" rows="20" cols="80">
                  </TEXTAREA>
                  <td>
              </tr>
              <tr>
                <tr>
                  <td>
                    <label>Fotografija: </label>
                  </td>
                  <td>
                    <input type="file" id="myFile" name="filename">
                  </td>
                </tr>
                <td>
                  <input name="submit" type="submit" value=" Objavi ">
                </td>
              </tr>
            </table>
          </form>
      </div>
  </body>
</html>
