<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lilac Infotech Laravel Developer Interview Question</title>

<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  .container {
    width: 80%;
    max-width: 600px;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }
  .search-input {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  .employee-list {
    list-style-type: none;
    padding: 0;
  }
  .employee-item {
    padding: 10px;
    border-bottom: 1px solid #eee;
  }
  .add-employee-btn {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  .add-employee-btn:hover {
    background-color: #45a049;
  }

  .employee-list {
  display: flex;
  flex-wrap: wrap;
}

.employee-item {
  width: 50%;
  box-sizing: border-box;
  padding: 10px;
}
.container {
  width: 80%;
  max-width: 600px;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
  display: flex;
  flex-direction: column; /* Stack items vertically */
  align-items: center; /* Center items horizontally */
  margin: 0 auto; /* Center container horizontally */
}
.add-employee-btn {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-align: center; /* Center text horizontally */
}

</style>
</head>
<body>
  <div class="container">
    <a href="{{ route('add_employee')}}" class="add-employee-btn">Add Employee</a>
    <input type="text" class="search-input" id="searchInput" placeholder="Search Name/Designation/Department">

    <div class="employee-list">
      @foreach ($users as $user)
      <div class="employee-item">
      <p style="font-size: 20px;">Name: {{ $user->name }}</p>
        <p>Phone: {{ $user->phone }}</p>
        <p>Designation: {{ $user->designation->name }}</p>
        <p>Department: {{ $user->department->name }}</p>
      </div>
      @endforeach
    </div>

  </div>

  <script>
    document.getElementById("searchInput").addEventListener("keyup", function() {
      var input, filter, container, employeeItems, employeeName, employeeDesignation, employeeDepartment, i;
      input = document.getElementById('searchInput');
      filter = input.value.toUpperCase();
      container = document.querySelector('.employee-list');
      employeeItems = container.getElementsByClassName('employee-item');

      for (i = 0; i < employeeItems.length; i++) {
        employeeName = employeeItems[i].getElementsByTagName("p")[0].textContent.toUpperCase();
        employeeDesignation = employeeItems[i].getElementsByTagName("p")[2].textContent.toUpperCase(); // Assuming designation is the third <p> element
        employeeDepartment = employeeItems[i].getElementsByTagName("p")[3].textContent.toUpperCase(); // Assuming department is the fourth <p> element

        if (employeeName.indexOf(filter) > -1 || employeeDesignation.indexOf(filter) > -1 || employeeDepartment.indexOf(filter) > -1) {
          employeeItems[i].style.display = "";
        } else {
          employeeItems[i].style.display = "none";
        }
      }
    });
  </script>

</body>

</html>
