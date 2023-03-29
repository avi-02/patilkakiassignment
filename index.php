<!DOCTYPE html>
<html>
  <head>
    <title>Unique Names</title>
  </head>
  <body>
    <h1>Enter Names</h1>
    <form method="post">
      <label for="array1">Enter the first list of names (separated by commas):</label><br>
      <input type="text" id="array1" name="array1"><br>
      <label for="array2">Enter the second list of names (separated by commas):</label><br>
      <input type="text" id="array2" name="array2"><br><br>
      <input type="submit" value="Submit">
    </form>
    <br>
    <h2>Result:</h2>
    <?php
      function unique_names($array1, $array2) {
        $result = array_merge($array1, $array2);
        $result = array_unique($result);
        sort($result);
        return $result;
      }

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $array1 = explode(",", $_POST["array1"]);
        $array2 = explode(",", $_POST["array2"]);
        $result = unique_names($array1, $array2);
        echo implode(", ", $result);
      }
    ?>
  </body>
</html>
