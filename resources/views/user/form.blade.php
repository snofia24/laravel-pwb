<!DOCTYPE html>
<html>
<h2>Buat Account Baru</h2>
<h4>Sign up form</h4>
<form action="/welcome">
  <label for="fname">First name:</label><br>
  <br><input type="text" id="fname" name="fname"><br>
  <br><label for="fname">Last name:</label><br> 
  <br><input type="text" id="fname" name="fname"><br>

    <br><label for="gender">Gender</label><br>
    <br><input type="radio" id="male" name="gender" value="Male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="Female">
    <label for="female">Female</label><br>

    <br><label for="nationality">Nationality</label><br>
    <br><select id="country" name="country">
    <option value="indonesia">Indonesia</option></select><br>

    <br><label for="language">Language Spoken</label><br>
    <br><input type="checkbox" id="bahasa1" name="bahasa1" value="Bahasa Indonesia">
    <label for="bahasa1">Bahasa Indonesia</label><br>
    <input type="checkbox" id="bahasa2" name="bahasa2" value="English">
    <label for="bahasa2">English</label><br>
    <input type="checkbox" id="other" name="other" value="Other">
    <label for="other">Other</label><br>

    <br><label for="bio">Bio</label><br>
    <textarea name="message" rows="9" cols="30"></textarea>
    <br><input type="submit" value="Sign Up"> 
</form>
</html>