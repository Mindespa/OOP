<form action="" method="post">

<div class="form-group">
      <label for="exampleInputEmail1">Knygos pavadinimas</label>
      <input type="text" class="form-control" name="title" value="<?=(isset($_GET['edit'])) ? $book->title:""?>">
     <small id="emailHelp" class="form-text text-muted"></small>
 </div>

 <div class="form-group">
     <label for="exampleInputEmail1">Zanras</label>
     <input type="text" class="form-control" name="genre"  value="<?=(isset($_GET['edit'])) ? $book->genre:""?>"> 
     <small id="emailHelp" class="form-text text-muted"></small>
 </div>

 <div class="form-group">
     <label for="exampleInputEmail1">Autoriaus id</label>
     <input type="text" class="form-control" name="author_id"  value="<?=(isset($_GET['edit'])) ? $book->authorId:""?>"> 
     <small id="emailHelp" class="form-text text-muted"></small>
 </div>
 <?php if (isset($_GET['edit'])) { ?>
        <input type="hidden" name="id" value="<?= $book->id ?>">
        <button class="btn btn-success" type="submit" name="update">upgrade it!</button>
    <?php } else { ?>
        <button class="btn btn-primary" type="submit" name="save">Enter</button>
    <?php } ?>
 </form>