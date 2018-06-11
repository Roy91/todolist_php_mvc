<div id="myDIV" class="header">
  <h2>My To Do List</h2>
  <form action="http://localhost/poo-mvc-php/index.php/tasks" method="post">
  <input type="text" id="myInput" name="name">
  <input button type="submit">
  </form>
</div>

<?php

foreach ($tasks as $task) {
    echo '- '.$task["name"].'<br />';
}




?>
