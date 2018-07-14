<?php 

$query = $own->select_all_category();

?>

<br>
<br>

<div class="col-md-10">   

  <h1>All Category</h1>

  <table class="table table-striped">
        <tr>
          <th>Category ID</th>
          <th>Post Title</th>
          <th>Post By </th>
          <th>Date</th>
          <th>Action</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($query)){ ?>
        <tr>
            <td><?php echo $row['category_id']; ?></td>
            <td><?php echo $row['post_title']; ?></td>
            <td><?php echo $row['post_by']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td>
              <a href="#" class="btn btn-info">Edit</a>
              <a href="#" class="btn btn-danger">Delete</a>

            </td>
            
        <?php } ?>
            
        </tr>
        
      </table>

    </div>