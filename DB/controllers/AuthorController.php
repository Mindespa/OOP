<?php 

include "./models/Author.php";

class AuthorController{
    public static function index()
{
       $authors = Author::all();
       return $authors;
}   

    // public static function show()
    // {
    //    $book = Book::find($_GET['id']);
    //    return $book;
    // }

    // public static function store()
    // {
    //     if (strlen($_POST['title']) == 0){
    //         $_SESSION['errors']['title'] = "Iveskite knygos pavadinima";
    //     }
    //     if (strlen($_POST['genre']) == 0){
    //         $_SESSION['errors']['genre'] = "Iveskite knygos zanra";
    //     }
    //     if (isset($_SESSION['errors'])){
    //         return;
    //     }
    //     $_SESSION['success'] = "Irasas teisingas";
    //     $_SESSION['errors'] = "NEteisingas Irasas";
    //     Book:: create();
    // }

    // public static function update()
    // {
    //     $book = new Book($_POST['id'],$_POST['title'],$_POST['genre'],$_POST['author_id']);
    //     $book->update();
    // }
    // public static function destroy()
    // {
    //    Book::destroy($_POST['id']);
    // }


}



?>