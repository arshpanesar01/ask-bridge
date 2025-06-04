<div class= "container">
<h1 class="heading">Ask a question</h1>
<form action="./server/requests.php" method="post">
  
 <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder = "Enter question">
</div>
 <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" class="form-control" id="description" placeholder = "Enter description"> </textarea>
</div>
 <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="category" class="form-label">Category</label>
    <select class="form-control" name="category" id="category">
        <option value="">Mobiles</option>
         <option value="">General</option>
          <option value="">Coding</option>
           <option value="">Computer</option>
    </select>
</div>

<div class="col-6 offset-sm-3 margin-bottom-15"><button type="submit" name="login" class="btn btn-primary">Login</button></div>
  
</form>
</div>