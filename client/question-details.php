<div class="container">
    <h1 class="heading">Question</h1>
    <div class="row">
    <div class="col-8">
    <?php
include("./common/db.php");
$query= "select * from questions where id= $qid";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$cid =$row['category_id'];
echo "<h4 class='margin-bottom-15 question-title'>Question: ".$row['title']."</h4>
<p class='margin-bottom-15'>".$row['description']."</p>";
 include("answers.php")
?>
<form action="./server/requests.php" method="post">
<input type="hidden"name = "question_id"value="<?php echo $qid?>">
<textarea class = "form-control margin-bottom-15"placeholder="Your answer..."name="answer" id=""></textarea>
<button class = "btn btn-primary margin-bottom-15">Write your answer</button>
</form>
</div>
<div class="col-4">

<?php 
$categoryquery="select name from category where id = $cid";
$categoryresult = $conn->query($categoryquery);
$categoryrow = $categoryresult->fetch_assoc();
echo "<h1>".ucfirst($categoryrow["name"])."</h1>";
$query="select * from questions where category_id = $cid and id!=$qid";
$result=$conn->query($query);
foreach ($result as $row) {
    $id = $row['id'];
    $title = $row['title'];
   echo "<div class = 'row question-list'><a herf=?q-id = $id>$title</a></div>";
}

?>
</div>
</div>
</div>