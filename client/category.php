<select name="category" class="form-control" id="category">
    <option value="">select a category</option>
    <?php
    include("./common/db.php");
    $query = "select * from category";
    $result=$conn->query($query);
    foreach($result as $row){
        $name = ucfirst($row['name']);
        $id=$row['id'];
        echo "<option value=$id>$name</option>";
    }
    ?>
</select>