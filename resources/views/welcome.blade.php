<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
  <h2>Global faker helper in Laravel 9</h2>     
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>User Name</th>
        <th>Email Address</th>
        <th>Phone Number</th>
      </tr>
    </thead>
    <tbody>
      @for($i=0;$i<10;$i++)
        <tr>
            <td>{{ fake()->firstName }}</td>
            <td>{{ fake()->lastName }}</td>
            <td>{{ fake()->unique()->userName }}</td>
            <td>{{ fake()->unique()->email }}</td>
            <td>{{ fake()->unique()->phoneNumber }}</td>
        </tr>
      @endfor
    </tbody>
  </table>
</div>
</body>
</html>
