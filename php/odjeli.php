<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/globals.js"></script>
    <script src="../js/odjeli.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>LV5</title>
</head>
<body>
<h3>Odjeli</h3>
<button class="btn btn-primary" onclick="GetModal('modals.php?modal_id=new_department')">Add</button>
<table id="tableZaposlenici" class="table table-striped">
    <thead class="thead-dark">  
      <tr>
        <th>Number</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        
    </tbody>
  </table>
  <div class="modal fade" id="modals" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content"></div>
    </div>
  </div>
</body>
</html>
