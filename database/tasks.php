<?php

  require_once $app."/database/model.php";

  class TaskModel extends Model {

    public function getAll () {

      $db = parent::connect();
      $sql = 'select * from tasks';
      $query = $db->prepare($sql);
      $query->execute();
      $tasks = $query->fetchAll();
      return $tasks;

    }

    public function createTask () {
      echo 'hello';
      $name = $_POST['name'];
      echo $name;
      $db = parent::connect();
      $addtask = 'insert into task (name) values (?), $name';
      $query = $db->prepare($addtask);
      $query->execute();
      $tasks = $this->getAll();
      return $tasks;

    }

    /*public function getAll () {

      $db = parent::connect();
      $sql = 'select * from tasks';
      $query = $db->prepare($sql);
      $query->execute();
      $tasks = $query->fetchAll();
      return $tasks;

    }*/

  }
?>
