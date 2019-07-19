<?php
$q = $_REQUEST["q"];
?>

<div class="row latest wow fadeInUp" data-wow-delay="0.4s " data-wow-duration="1.4s" >
     <div class="col-lg-12 mb-4 " style=" background-color: #353942;">
     <?php
   
$servername = "localhost";
$username = "root";
$password = "";
$db = "web";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM mobiles";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        if ($row['name'] == $q) {
            # code...
        
        ?>
        <b style="color: white; font-size: 40px"><?php echo "" .$row['name']; ?> </b>
         <select onchange="chkusr(this.value)" >
         <option value="" selected>Select...</option>
            <option value="IPHONE8">IPhone8</option>
            <option value="IPHONE7">IPhone7</option>
            <option value="IPHONE SE">IPhone SE</option>
            <option value="GALAXY J7 PRO">Samsung Galaxy J7 PRO</option>
            <option value="GALAXY J1 MINI">Samsung Galaxy J1 MINI</option>
            <option value="GALAXY S9">Samsung Galaxy S9</option>
            <option value="OPPO F7">OPPO F7</option>
            <option value="OPPO F5">OPPO F5</option>
            <option value="OPPO A83">OPPO A83</option>
          </select>
     </div>
      

    
         <div class="col-lg-6  mb-4" style=" height: 350px;">
           <center><img src="<?php echo "" .$row['url']; ?> " class="img-fluid" style="height: 300px;width: 300px "></center>
        </div>
      
  
    


       
        <div class="col-lg-6  mb-4" style=" height: 350px;  padding-bottom: 50px">
        <b>  <?php echo "" .$row['name']; ?> </b>
  <p style="color: red"><?php echo "" .$row['price']; ?></p>
          <table class="table" style="margin-top: 40px;">
        
      <tr>

 
   <h6> WHAT'S NEW?</h6><br>
    <?php echo "" .$row['new']; ?> </td>
      </tr>

    
  </table>
        </div>     


     
   </div>
     

      <div class="row latest wow fadeInUp" data-wow-delay="0.4s " data-wow-duration="1.4s"  >
        
   
    <div class="col-lg-10 col-md-12 mb-4" style="height: 900px;padding-bottom: 30px ">
    <div class="container" style="padding-top: 40px">
  <h2>Specifications</h2>
 <br>
  <table class="table">
   
    <tbody>
      <tr>
        <td rowspan="3"  style="width: 25% ;"><h4> BUILD </h4></td>
        <td  style="width: 75%">OS: <?php echo "" .$row['os']; ?></td>
        
      </tr>
      <tr>
        <td style="width: 75%">DIMENSIONS:  <?php echo "" .$row['dimensions']; ?></td> 
      </tr>
      <tr>
        <td  style="width: 75%">WEIGHT:  <?php echo "" .$row['weight']; ?></td>
      </tr>

      <tr>
        <td rowspan="3"  style="width: 25% ; "><h4> DISPLAY </h4></td>
        <td colspan="2" style="width: 75%">TECHNOLOGY:  <?php echo "" .$row['technology']; ?></td>
        
      </tr>
      <tr>
        <td colspan="2" style="width: 75%">SIZE:  <?php echo "" .$row['displaysize']; ?></td> 
      </tr>
      <tr>
        <td colspan="2" style="width: 75%">RESOLUTION:  <?php echo "" .$row['resolution']; ?></td>
      </tr>

      <tr>
        <td rowspan="2"  style="width: 25% ; "><h4> CAMERA:  </h4></td>
        <td colspan="2" style="width: 75%">FRONT:  <?php echo "" .$row['front']; ?></td>
        
      </tr>
      <tr>
        <td colspan="2" style="width: 75%">REAR/MAIN:  <?php echo "" .$row['rear']; ?></td> 
      </tr>
      

      <tr>
        <td rowspan="2"  style="width: 25% ;"><h4> PROCESSOR</h4></td>
        <td colspan="2" style="width: 75%">CPU:  <?php echo "" .$row['cpu']; ?></td>
        
      </tr>
      <tr>
        <td colspan="2" style="width: 75%">CHIPSET:  <?php echo "" .$row['chipset']; ?></td> 
      </tr>


      <tr>
        <td rowspan="2"  style="width: 25% ;"><h4>MEMORY</h4></td>
        <td colspan="2" style="width: 75%">BUILT-IN:  <?php echo "" .$row['builtin']; ?></td>
        
      </tr>
      <tr>
        <td colspan="2" style="width: 75%">SD-CARD:  <?php echo "" .$row['sdcard']; ?></td> 
      </tr>

       <tr>
        <td rowspan="2"  style="width: 25% ;"><h4>BATTERY</h4></td>
        <td colspan="2" style="width: 75%">CAPACITY:  <?php echo "" .$row['capacity']; ?></td>
        
      </tr>
      <tr>
        <td colspan="2" style="width: 75%">TALKTIME:  <?php echo "" .$row['talktime']; ?></td> 
      </tr>

       <tr>
        <td rowspan="3"  style="width: 25% ;"><h4>CONNECTIVITY</h4></td>
        <td colspan="2" style="width: 75%">2G:  <?php echo "" .$row['2g']; ?></td>
        
      </tr>
      <tr>
        <td colspan="2" style="width: 75%">3G:  <?php echo "" .$row['3g']; ?></td> 
      </tr>
      <tr>
        <td colspan="2" style="width: 75%">4G:  <?php echo "" .$row['4g']; ?></td> 
      </tr>
       <tr>
        <td colspan="2" style="width: 75%"></td> 
      </tr>
      
    </tbody>
  </table>
 
</div>

</div>

 <?php
}
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<?php

?>