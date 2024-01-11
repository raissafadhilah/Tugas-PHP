 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form method="POST" action="welcome.php">
    <h1>Buat Account Baru</h1>
    <h2>Sign Up Form</h2>

    <label for="firstname">firstname : </label>
    <input type="text" name="fname"><br><br>
    <label for="lastname">lastname : </label>
    <input type="text" name="lname"><br><br>

    <label for="Gender">Gender</label><br><br>
    <input type="radio"name="gender" value="male">Male <br>
    <input type="radio"name="gender" value="Female">Female <br><br>

    <label for="Nationality">Nationality</label><br><br><select name="country" id="country">Nationality
        <option value="Indonesia">Indonesia</option>
        <option value="Inggris">Inggris</option>
    </select>
    <br><br>

    <label for="Language Spoken">Language Spoken</label><br><br>
    <input type="checkbox" name="bahasa[]" value="Bahasa Indonesia">Bahasa Indonesia<br>
    <input type="checkbox" name="bahasa[]" value="English">English<br>
    <input type="checkbox" name="bahasa[]" value="Jerman">Jerman<br>
    <br>
    <label for="bio">bio</label><br>
    <textarea name="bio" id="" cols="30" rows="10"></textarea>
    <button type="submit">Sign Up</button><br><br>
    </form>   
 </body>
 </html>