
              <?php 
            $conn=new mysqli("localhost","root","","ymclass") or die("Server problem");
            $query="SELECT image from gallery where id=1";
            $result=mysqli_query($conn,$query);
            if($result->num_rows>0){
              while($row=$result->fetch_assoc()){
                $image_data=$row['image'];
                echo"<img src='data:c3.jpg;base64,'.base64_encode($image_data).'>";
              }
            }
            else{
              echo"No img";
            }
          ?>
             