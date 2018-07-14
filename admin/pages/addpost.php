<?php 

if(isset($_POST['submit'])){
    $message = $own-> save_category($_POST);
}
?>

<h1>Your New Post</h1>
<hr>
<div class="text-success"> 
    <!--<h4 id="message"> </h4>-->
    
    <h3>  <?php 
    if (isset($message)) {
       
       echo "$message";
       header( "refresh:1; url=addnew.php" );
    }
    ?> </h3>
    
</div>

<div class="col-md-8">            
    <form action="" method="post">
        
        <div class="form-group">
            <label for="name">Category Name: </label>    
            <input class="form-control" type="text" name="pname" id="fnumber" placeholder="Post Title" required>   
        </div>

        <div class="form-group">
            <label for="name">Post by</label>    
            <input class="form-control" type="text" name="name" id="name" placeholder="Enter your name" required>   
        </div>
    
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-info" value="Submit"  >  
        </div> 

    </form>


</div>


</body>

</html>