<form action="" class="row" method="get">
    <!-- <input type="hidden" name="sortFilter"> -->

    <div class="form-group col-5">
      <label for="exampleInputEmail1">Rusiavimas</label>
      <select class="form-select" name="sort" id="">
        <option value="1"<?=(isset($_GET['sort']) && $_GET['sort'] == 1)? "selected" : ""?>>Pavadinimas a-z</option>
        <option value="2"<?=(isset($_GET['sort']) && $_GET['sort'] == 2)?>>Pavadinimas z-a</option>
        <option value="3"<?=(isset($_GET['sort']) && $_GET['sort'] == 3)?>>Zanras a-z</option>
        <option value="4"<?=(isset($_GET['sort']) && $_GET['sort'] == 4)?>>Zanras z-a</option>
        <option value="5"<?=(isset($_GET['sort']) && $_GET['sort'] == 5)?>>Autorius a-z</option>
        <option value="6"<?=(isset($_GET['sort']) && $_GET['sort'] == 6)?>>Autorius z-a</option>
      </select>
    </div>
    <div class="form-group col-5">
    <label for="exampleInputEmail1">Filtravimas</label>
      <select class="form-select" name="filter" id="">
        <option value="0">Pasirinkite autoriu</option>

        <?php
        foreach ($authors as $author) {
            echo '<option value="'.$author->id.'" '.((isset($_GET['filter']) && $_GET['filter'] == $author->id)? "selected" : ""). '>' .$author->surname ." ".$author->name.'</option>';
        }
        ?>
      </select>
    </div>
    <div class="col-2 position-relative">
       <button class="btn btn-success position-absolute bottom-0" type="submit">Search</button>
    </div>
    
</form>