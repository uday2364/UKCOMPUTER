<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $message = $_POST["message"];
  echo "Thank you $name, we have received your message!";
}
?>