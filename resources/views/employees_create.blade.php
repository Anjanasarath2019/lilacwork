<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Employee</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
  .container {
    margin-top: 50px;
  }
  .form-control {
    margin-bottom: 20px;
  }
  .btn-add {
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
  }
  .btn-add:hover {
    background-color: #45a049;
    cursor: pointer;
  }
</style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center mb-4">Add Employee</h2>
        <form action="{{ route('add_employee.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="designation">Designation:</label>
        <input type="text" class="form-control" id="designation" name="designation" required>
    </div>
    <div class="form-group">
        <label for="department">Department:</label>
        <input type="text" class="form-control" id="department" name="department" required>
    </div>
    <div class="form-group">
        <label for="department">Phone Number:</label>
        <input type="text" class="form-control" id="phone" name="phone" required>
    </div>
    <button type="submit" class="btn btn-add btn-block">Add Employee</button>
</form>

      </div>
    </div>
  </div>
</body>
</html>
