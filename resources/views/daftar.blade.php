<html>
<body>

<h1>Buat account baru</h1>
<h2>Sign Up form</h2>

<form action="{{ url('/welcome') }}">
  <label for="fname">First name:</label><br><br>
  <input type="text" id="fname" name="fname" value="" required><br><br>

  <label for="lname">Last name:</label><br><br>
  <input type="text" id="lname" name="lname" value="" required><br><br>

  <label for="gender">Gender:</label><br><br>
  <input type="radio" id="male" name="gender" value="male"required>
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female"required>
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other"required>
  <label for="other">Other</label><br><br>

  <label for="nationality">nationality:</label><br><br>

  <select name="nationality" id="nationality" required>
    <option value="Indonesia">Indonesia</option>
    <option value="England">England</option>
    <option value="South Korea">South Korea</option>
    <option value="Japan">Japan</option>
  </select><br><br>

  <label for="Bio">Bio:</label><br><br>
  <textarea name="bio" rows="10" cols="30" required></textarea><br><br>

  <input type="submit" value="Submit">
  
</form> 

</body>
</html>
