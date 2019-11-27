<?php include 'header.php'; ?>

<div class="container">           
  <table class="table">
    <thead>
      <tr>
        <th>Email</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
    	<?php 

    		$db=mysqli_connect('localhost','root','123456','webapp');
    		$query = "SELECT * FROM register";
    		$res = mysqli_query($db,$query);


    		while($row = mysqli_fetch_array($res,MYSQLI_ASSOC)) {

    			echo "<tr>";
    			echo "<td>";
    			echo $row['email'];
    			echo "</td>";
    			echo "<td>";
    			echo $row['password'];
    			echo "</td>";
    			echo "</tr>";
    		}

    	?>
    </tbody>
  </table>
</div>







<?php include 'footer.php'; ?>



