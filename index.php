<?php
require_once 'app/boot.php';
use AdTests\Calculator\Calculator;
$val1 = (isset($_POST['val1'])) ? $_POST['val1'] : '';
$val2 = (isset($_POST['val2'])) ? $_POST['val2'] : '';
$plus = (isset($_POST['operator']) && $_POST['operator'] == 'plus') ? 'selected="selected"' : '';
$min = (isset($_POST['operator']) && $_POST['operator'] == 'minus') ? 'selected="selected"' : '';
$multi = (isset($_POST['operator']) && $_POST['operator'] == 'multi') ? 'selected="selected"' : '';
$div = (isset($_POST['operator']) && $_POST['operator'] == 'divide') ? 'selected="selected"' : '';
$pow = (isset($_POST['operator']) && $_POST['operator'] == 'pow') ? 'selected="selected"' : '';
?>
<html>
<head><title>AD Calculator</title></head>
<body>

<form action="index.php" method="post">
<div>
  <input type="text" title="value1" name="val1" value="<?php echo $val1; ?>">
  <select name="operator" title="Calculator">
    <option value="plus" <?php echo $plus ?>>+</option>
    <option value="minus" <?php echo $min ?>>-</option>
    <option value="divide" <?php echo $div ?>>/</option>
    <option value="multi" <?php echo $multi ?>>*</option>
    <option value="pow" <?php echo $pow ?>>^</option>
  </select>
  <input type="text" title="value2" name="val2" value="<?php echo $val2; ?>">
  <input type="submit" id="submit" value="Calculate">
</div>
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $calculator = new Calculator();
  $calculator->set($_POST['val1'], $_POST['val2'], $_POST['operator']);
  $result = $calculator->process();
  print 'Result = ' . $result;
}
?>

</body>
</html>