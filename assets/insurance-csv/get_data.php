<?php 
Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
Header('Access-Control-Allow-Methods: GET, POST'); //method allowed
Header("Content-Security-Policy: default-src 'self'");

$con = mysqli_connect('localhost', 'homeofbu_csv_dat', 'Slideb@12345','homeofbu_csv_data');

    $date = date('Y-m-d H:i:s');
    $sql = "SELECT * FROM csv_data WHERE data != ''";
    $query = mysqli_query($con, $sql);
    $query2 = mysqli_query($con, $sql);
    
 ?>
 
 <tr>
        <th>ID</th>
        <?php if ($query->num_rows > 0) {

            
          // output data of each row
          $row = $query->fetch_assoc();
             ?>
       
       <?php $json_data = json_decode($row["data"]); 
                   $i= 1;
                    foreach ($json_data as $value) { 
                    if($i == 1){
                    ?>
                    
                    <?php    foreach ($value as $key =>$vv) { 
                    if($i == 1){ ?>
                       <td> <?= $key?> </td>
                       <?php  }else{
                       break;
                       } 
                       } 
                       $i++;
                       }else{
                           break;
                       } ?>
                       
                   <?php }  ?>
       <?php 
        } ?>
       
        <th>Create</th>
    </tr>
 
<?php
        if ($query2->num_rows > 0) {

            
          // output data of each row
          while($row = $query2->fetch_assoc()) { 
             ?>
            <tr>
                <td><?= $row["id"]; ?></td>
                    <?php $json_data = json_decode($row["data"]); 
                   
                    foreach ($json_data as $value) { ?>
                    <tr>
                        <td></td>
                    <?php    foreach ($value as $vv) { ?>
                       <td> <?= $vv ?> </td>
                       <?php } ?>
                        <td></td>
                        </tr>
                   <?php }  ?>
                <td><?= $row["created_on"] ?></td>
            </tr>
          <?php }
        } else { ?>
          <tr>
            <td></td>
            <td>0 Record</td>
            <td></td>
          </tr>
        <?php }
        ?>