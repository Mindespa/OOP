<table class="table">
    <tr>
        <th>ID</th>
        <th>Title
            <form action="" method="get">
                <button name="sort" value="1" type="submit">▲</button>
            </form>
            <form action="" method="get">
                <button name="sort" value="2" type="submit">▼</button>
            </form>
        </th>
        <th>Genre
        <form action="" method="get">
                <button name="sort" value="3" type="submit">▲</button>
            </form>
            <form action="" method="get">
                <button name="sort" value="4" type="submit">▼</button>
            </form>
        </th>
        <th>Author
        <form action="" method="get">
                <button name="sort" value="5" type="submit">▲</button>
            </form>
            <form action="" method="get">
                <button name="sort" value="6" type="submit">▼</button>
            </form>
        </th>
        <th>show</th>
        <th>edit</th>
        <th>delete</th>
    </tr>
    <?php foreach ($books as $key => $book) { ?>
        <tr>
            <td> <?= $book->id  ?></td>
            <td> <?= $book->title ?></td>
            <td> <?= $book->genre ?></td>
            <td> <?= $book->author->surname . " " .$book->author->name ?></td>
            <td><button class="btn btn-info">show</button></td>
            <td>
                <form action="" method="get">
                    <input type="hidden" name="id" value="<?= $book->id ?>">
                    <button class="btn btn-warning" name="edit">edit</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $book->id ?>">
                    <button class="btn btn-danger" name="destroy">delete</button>
                </form>
            </td>
        </tr>
    <?php  } ?>
</table>