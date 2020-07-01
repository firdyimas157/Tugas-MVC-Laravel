<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Pendaftaran SanberBook</title>
  </head>

  <body>
    <h1>Buat account baru!</h1>
    <h3>Sign Up Form</h3>

    <form action="/congrats" method="POST">
      @csrf
      <label for="">First Name:</label>
      <br />
      <br />
      <input type="text" placeholder="First Name" name="namaDpn"/>
      <br />
      <br />
      <label for="">Last Name:</label>
      <br />
      <br />
      <input type="text" placeholder="Last Name" name="namaBlkg" />
      <br />
      <br />

      <label for="">Gender</label> <br /><br />
      <input type="radio" name="gender" value="0" id="" />Male <br />
      <input type="radio" name="gender" value="1" id="" />Female <br />
      <input type="radio" name="gender" value="2" id="" />Others <br /><br />

      <label for="">Nationality</label><br /><br />
      <select name="nation" id="">
        <option value="Indonesia">Indonesia</option>
        <option value="United States">United States</option>
        <option value="United Kingdom">United Kingdom</option>
      </select>
      <br /><br />

      <label for="">Language Spoken</label> <br /><br />
      <input type="checkbox" name="bahasa" id="" />Bahasa Indonesia <br />
      <input type="checkbox" name="bahasa" id="" />Bahasa Inggris <br />
      <input type="checkbox" name="bahasa" id="" />Other <br /><br />

      <label for="bio">Bio:</label><br /><br />
      <textarea
        name="bio"
        id="bio"
        cols="32"
        rows="10"
        placeholder="Maksimal 160 karakter"
        maxlength="160"
      ></textarea
      ><br /><br />

      <!-- <button type="submit"><a href="welcome.html"> Sign Up</a></button> -->
      <button type="submit">Sign Up</button>
    </form>
  </body>
</html>
