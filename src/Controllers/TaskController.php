<?php
 require_once __DIR__ . '/../Models/Task.php';

 class TaskController {
      
      private $task;

      public function __construct(){
        $this->task = new Task();
      }

      public function index(){
        $tasks = $this->task->getAll();
        require_once __DIR__ . '/../Views/tasks.php';
      }

      public function store(){
         if (isset($_POST['nom']) && !empty($_POST['nom'])){
            $this->task->add($_POST['nom'],$_POST['contenu']);
         }
         header("Location: index.php");
      }

      public function complete(){
        if (isset($_GET['id'])){
            $this->task->complete($_GET['id']);
        }
        header("Location: index.php");
      }
      
      public function delete() {
        if (isset($_GET['id'])){
            $this->task->delete($_GET['id']);
        }
        header("Location: index.php");
      }

 }
    