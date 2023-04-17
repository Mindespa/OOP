<?php

 class Validate{

public static function Book()

    {
        $author = Author::find($_POST['authorId']);

        if (strlen($_POST['title']) == 0){
            $_SESSION['errors']['title'] = "Iveskite knygos pavadinima";
        }
        if (strlen($_POST['genre']) == 0){
            $_SESSION['errors']['genre'] = "Iveskite knygos zanra";
        }

       if ($author->id == null){
        $_SESSION['errors'] ['author'] = "tokio autoriaus nera";
       }

       if (isset($_SESSION['errors'])){
        return false;
    }
    return true;
}

}