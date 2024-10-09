<!-- <form action="../6_logout.php" method="post">
    <input type="submit" name="submit" value="LogOut">
</form> -->
<?php
 $con=mysqli_connect("localhost", "root", "", "project");
 $ans= mysqli_query($con, "select * from selling");
?>
<center>
  <!-- <h1>Users Details</h1> -->
  <table class="styled-table">
  <thead>
    <tr>
      <th>Full Name</th>
      <th>Email</th>
      <th>Course Name</th>
      <th>Course Price</th>

      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($row = mysqli_fetch_array($ans)){
      ?>
      <tr>
        <td><?php echo $row['fullname']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['coursename']; ?></td>
        <td><?php echo $row['courseprice']; ?></td>
        <td><a href="6_olddata.php ?id=<?php echo $row['fullname']; ?>">Edit</a></td>
        <td><a href="delete.php ?id=<?php echo $row['fullname']; ?>">Delete</a></td>
      </tr>
      <?php
    }
    ?>
  </tbody>
</table>
</center>

<style>
  .styled-table {
    border-radius: 2px;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0px 1px 8px 12px rgba(0, 0, 0, 0.15);
}
  .styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
  }

  .styled-table th,
  .styled-table td {
    padding: 15px 70px;
  }

  .styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
  }

  .styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
  }

  .styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
  }
</style>
