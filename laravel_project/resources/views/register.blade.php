<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Pendaftaran</title>
  </head>
  <body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up form</h3>
    <form action="/welcome" method="post"> @csrf
      <label>First Name:</label> <br />
      <input type="text" name="firstName" required" /> <br /><br />
      <label>Last Name:</label> <br />
      <input type="text" name="lastName" required/> <br /><br />
      <label>Gender:</label><br />
      <input type="radio" name="gender" />Male <br />
      <input type="radio" name="gender" />Female <br />
      <input type="radio" name="gender" />Other <br /><br />

      <label>Nasionality:</label><br /><br />
      <select name="nasionality">
        <option value="">Indonesia</option>
        <option value="">WNA</option></select
      ><br /><br />

      <label>Leangue Spoken:</label> <br /><br />
      <input type="checkbox" name="leangue" />Bahasa Indonesia <br />
      <input type="checkbox" name="leangue" />english <br />
      <input type="checkbox" name="leangue" />Other <br /><br />

      <label>Bio:</label><br />
      <textarea name="bio" cols="30" rows="8"></textarea><br />

      <input type="submit" value="Sign Up" />
    </form>
  </body>
</html>
