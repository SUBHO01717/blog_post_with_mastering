<?php 

require "./admin/class/adminclass.php";
$front = new adminclass();
$query = $front->select_all_category();

?>


<section class="header-bottom">
          <nav>
            <div class="container">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <?php while ($menu = mysqli_fetch_assoc($query)){ ?>
                <li><a href="#"><?php echo $menu['post_title'];?></a></li>
                <?php }?>
                   <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </nav>
        </section>

<section class="main-content">
  <div class="container">
    <div class="row">
 <?php include "public_pages/content.php";?>
 <?php include "public_pages/sidebar.php";?>
  </div>
  </div>
  
</section>
