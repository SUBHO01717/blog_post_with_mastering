
<section class="main-content">
  <div class="container">
    <div class="row">
      <div class="artical col-md-9">
        
      <div class="col-md-8 col-md-offset-2" style="margin-top: 20px; background: rgba(189, 195, 199,0.4); border-radius: 5px; padding: 20px;">
    
          
            <form action="data.php" method="POST">

              <div class="form-group">
                <label for="name">Full Name</label>    
                <input class="form-control" type="text" name="name" id="fnumber" placeholder="Full Name">   
              </div>
              <div class="form-group">
                <label for="email">Email</label>    
                <input class="form-control" type="email" name="email" id="cName" placeholder="Email Address">   
              </div>
              <div class="form-group">
                <label>Country</label>    
                <select class="form-control" name="country">
                    <option value="">------Select Country--------</option>
                    <option value="Agrabad Branch">Bangladesh</option>
                    <option value="Gulshan Branch">India</option>
                </select> 
              </div>
              
              <div class="form-group">
                <label for="sContact">Source Contact</label>    
                <input class="form-control" type="text" name="sContact" id="sContact" placeholder="Source Mobile No.">   
              </div> 
               <div class="form-group">
                <label for="notes">Notes</label>    
                <textarea class="form-control" type="text" name="notes" id="notes" placeholder="Type your Notes"> </textarea>  
              </div> 
             <div class="form-group radio">
                
                <label><input type="radio" name="optradio" value="Branch">Female</label>
                <label><input type="radio"name="optradio" value="DMT">Male</label>
                <label><input type="radio" name="optradio"value="CCEP">Others</label>
               
            </div>
            
            <div class="form-group">
              <input type="submit" name="submit" class="btn btn-info" value="Submit">  
              </div> 
            
        </form>
        
        
      </div>
         
      </div>
   
  </div>
  </div>
  

</section>
