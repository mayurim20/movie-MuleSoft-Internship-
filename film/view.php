<?php 

require 'DBCONNECTON.php';


echo "<h2 align='center' style='color:#008888;'>Add Your Hotel</h2>";
echo "<table border='1' align='center' style='background:#ACF9B8;color:#008888;'>";
echo "<tr><th>MOVIE NAME</th><th>LEAD-ACTOR</th><th>ACTRESS</th><th>RELEASE-DATE</th><th>DIRECTOR NAME</th></tr>";
echo "<form action='' method='post'>";
echo "<tr>";
echo "<td><input type='submit' value='Insert' style='width:100%;'></td>";
echo "<td><input type='text' name='moviename'></td>";
echo "<td><input type='text' name='lead-actor'></td>";
echo "<td><input type='text' name='actress'></td>";
echo "<td><input type='text' name='release-date'></td>";
echo "<td><input type='text' name='directorname'></td>";

echo "</tr>"; 
echo "</form>"; 



$query = "SELECT * FROM filmdetails";
$result = mysqli_query($con,$query);

if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["moviename"]."</td>";
        echo "<td>".$row["lead-actor"]."</td>";
        echo "<td>".$row["actress"]."</td>";
        echo "<td>".$row["release-date"]."</td>";
        echo "<td>".$row["directorname"]."</td>";
        
        echo "</tr>";
    }

    echo "</table>";
    echo "<br><br>To book a hotel,<a href='index.php'>Click Here</a>";
}

?>