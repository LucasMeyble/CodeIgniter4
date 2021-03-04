<?php
  helper('form');
  echo form_open('main/save');
?>

<input type="text" name="nome" id="nome" required><br>
<input type="email" name="email" id="email"><br>
<input type="submit" value="save">