<?php include "menu.php"; ?>
<h2>Forms</h2>
<form class="" action="forms.php" method="post">
<label for="country"> Choose the country </label>
<select id="country" name="country">
  <option value="">Choose</option>
  <option value="Finland">Finland</option>
  <option value="Russia">Russia</option>
  <option value="Nepal">Nepal</option>
  <option value="Vietnam">Vietnam</option>
  <option value="Latvian">Latvian</option>
  <option value="Germany">Germany</option>
</select>
<br />
<label for="gender">Choose your gender</label><br />
<input type="radio" name="gender" value="female">Female <br />
<input type="radio" name="gender" value="male">Male <br />
<label for="status">Choose your status</label><br />
<input type="radio" name="status" value="student">Student<br />
<input type="radio" name="status" value="teacher">Teacher<br />
<input type="submit" name="btnSend" value="Send">
</form>

<?php
$btn=$_POST['btnSend'];
if(isset($btn)) {
  $country = $_POST['country']; // take the name attribute
  $gender = $_POST['gender'];
  $status = $_POST['status'];
  echo 'Hello '.$gender.' '.$status.' from '.$country;
}
 ?>
<?php include "footer.php"; ?>
