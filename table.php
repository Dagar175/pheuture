
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<html>

<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Password</th>
      <th scope="col">Country</th>
      <th scope="col">File</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <!-- <th scope="row"></th> -->
      <td><?php echo $name?></td>
      <td><?php echo $phone?></td>
      <td><?php echo $email?></td>
      <td><?php echo $gender?></td>
      <td><?php echo $password?></td>
      <td><?php echo $country?></td>
    <td></td>
    <!-- <?php echo "<a href='$table_file_path'> $table_file_path </a>"?> -->
</tr>
  </tbody>
</table>

</html>
