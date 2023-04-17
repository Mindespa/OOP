<?php
session_start();
 include "./controllers/BookController.php";
 include "./controllers/AuthorController.php";

 $authors = AuthorController::index();
 $books = BookController::index();


if($_SERVER['REQUEST_METHOD'] == "POST") {
  echo "POST";

if(isset($_POST['save'])){
    BookController::store($authors);
    header("Location: ./index.php");
    die;
    
}

if (isset($_POST['update'])) {
  BookController::update();
  header("Location: ./index.php");
  die;
}

if (isset($_POST['destroy'])){
    BookController::destroy();
    header("Location: ./index.php");
    die;
}

}



if($_SERVER['REQUEST_METHOD'] == "GET") {
   if(isset($_GET['edit'])){
     $book = BookController::show();
   }  
} 


