<?php

 class Validate{

public static function Book($authors)

    {
        if (strlen($_POST['title']) == 0){
            $_SESSION['errors']['title'] = "Iveskite knygos pavadinima";
        }
        if (strlen($_POST['genre']) == 0){
            $_SESSION['errors']['genre'] = "Iveskite knygos zanra";
        }
        
        $hasAuthor = false;
        foreach ($authors as $author) {
            if ($author->id == $_POST['authorId']) {
                $hasAuthor = true;
                break;
            }
        }

       if (!$hasAuthor){
        $_SESSION['errors'] ['author'] = "tokio autoriaus nera";
       }

       if (isset($_SESSION['errors'])){
        return false;
    }
    return true;
}

}