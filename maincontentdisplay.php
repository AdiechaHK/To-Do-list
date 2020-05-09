<!DOCTYPE html>
<html lang="en">
<head>
  <title>maincontent</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <h2>Condensed Table</h2>
    <p>The .table-condensed class makes a table more compact by cutting cell padding in half:</p>            
    <table class="table table-condensed">
      <thead>
        <tr>
          <th>Task</th>
          <th>Date-time</th>
          <th> Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'db1.php';
        $sql= "select * from addwishlist where userid=" . $_SESSION['uid'];
        $result=$conn->query($sql);
        if($result->num_rows > 0)
        {
          while($row=$result->fetch_assoc())
          {
            echo "<tr><td>".$row["task"]."</td><td>".$row["AddDateTime"] ."</td>  <td><button class='btn btn-danger'>Delete</button> </td></tr>";
          }
        echo "</table>";
        }
      else
      {
        echo "0 result";
      }
      ?>
    </tbody>
  </table>
            
</div>
</body>
</html>
