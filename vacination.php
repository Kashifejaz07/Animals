<html>
    <head>
        <title>vacination</title>
    </head>
    <body>
        <div class = "col-lg-5 col-md-3 col-xs-12 col-sm-12"  id = "myform">
<form method="post" action="">
    
    	<div class="form-group col-lg-12">
      <center><h2>Vacination</h2><br></center><br>
        <div class="form-group col-lg-2"></div>
     <div class="form-group col-lg-3">
      <label for="formno">Form  No</label>
       <center><input type="text" class="form-control" id="firstname" name = "formno" placeholder="form No"value = "" required>

        </div>
    </center><div><input type="submit" name="search" value="search"></div>
  </div>
        
        <?php
 if(isset($_POST['search'])) {
$id = $_POST['formno'];
   $search_Query = "SELECT * From `vacci` where `v_id` ='$id'";
  $search_Result = mysqli_query($con, $search_Query);

  if($search_Result){

if(mysqli_num_rows($search_Result))
{

while($row = mysqli_fetch_assoc($search_Result)){
 $SNO = $row['S:NO'];
  $Animal = ['Animal'];
  $LastName = $row['Lastname']; 
echo '<div class="form-group col-lg-12">
     <div class="form-group col-lg-4">
       <label for="firstname">FirstName</label>
      <input type="text" class="form-control" id="firstname" name = "firstname" placeholder="firstname" value = "' .$FirstName.'"required="required">
    
  </div>
  <div class="form-group col-lg-4"> 
  <label for="lastname">LastName</label>
      <input type="text" class="form-control" id="lastname" name = "lastname" placeholder="Last Name" value = "'.$LastName.'" required="required">
  </div>
  <div class="form-group col-lg-4"> 
<label for="inputState" >symptoms</label>
      <select id="inputState" class="form-control" name="disease" required="required">
         <option selected>Choose</option>
        <option >Fever</option>
        <option >Bp</option>
        <option >Diabetes</option>
      
        </select>
</div>

<div class="form-group col-lg-12">
      <div class="form-group col-lg-12">
   
    <h4>
    <tr>
<th>
<input type="radio" name="gender" value="male"> Recommended Admit
</th>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<th>
<input type="radio" name="gender" value="female"> Discharged</th>
</tr>
</h4>
  </div>

<center>
<div class="form-group col-md-8">
<input type="submit" name="submit" value="Done">
</div>
</center>

</div>
</div>
  
  </div>';

  }
}else{
  echo 'No data for this id';
}
}
else{
    echo 'Result Error';
}
} ?>
 
    </form>
        
        
    </body>
    
    
    
</html>