<?php 

include "./models/Book.php";

class BookController{
    public static function index()
{
       $books = Book::all();
       return $books;
}   

    public static function show()
    {
       $book = Book::find($_GET['id']);
       return $book;
    }

    public static function store($authors)
    {
       if ( Validate::book($authors) ) {
           $_SESSION['success'] = "Irasas teisingas";
           Book:: create();

       }
    }

    public static function update()
    {
        $book = new Book($_POST['id'],$_POST['title'],$_POST['genre'],$_POST['authorId']);
        $book->update();
    }
    public static function destroy()
    {
       Book::destroy($_POST['id']);
    }


}



?>