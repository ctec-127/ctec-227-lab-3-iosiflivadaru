<!DOCTYPE html>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  setcookie("country", $_POST['country'], time() + (60*60*24*7));
  setcookie("state", $_POST['state'], time() + (60*60*24*7));   
}

$country = '';
$state   = '';
if (isset($_COOKIE['country'])) {
  $country = $_COOKIE['country'];
}

if (isset($_COOKIE['state'])) {
  $state = $_COOKIE['state'];
}

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lab 3</title>
</head>
<body>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <label for="country">Country</label>
    <select name="country" id="country" required>
      <option hidden value="">&lt;-- Choose --></option>
      <option value="France" <?= ($country == "France" ? "selected" : ""); ?>>France</option>
      <option value="Romania" <?= ($country == "Romania" ? "selected" : ""); ?>>Romania</option>
      <option value="Germany" <?= ($country == "Germany" ? "selected" : ""); ?>>Germany</option>
      <option value="Spain" <?= ($country == "Spain" ? "selected" : ""); ?>>Spain</option>
    </select><br><br>

    <label for="state">State</label>
    <select name="state" id="state" required>
      <option hidden value="">&lt;-- Choose --></option>
      <option value="WA" <?= ($state == "WA" ? "selected" : ""); ?>>Washington</option>
      <option value="CA" <?= ($state == "CA" ? "selected" : ""); ?>>California</option>
      <option value="NY" <?= ($state == "NY" ? "selected" : ""); ?>>New York</option>
      <option value="TX" <?= ($state == "TX" ? "selected" : ""); ?>>Texas</option>
    </select><br><br>
    <input type="submit" value="Submit">
  </form>

</body>
</html>