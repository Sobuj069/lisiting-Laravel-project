<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Entry List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">All Entry List</h1>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table table-bordered table-striped">
                     <a href="/newuser"class="btn btn-primary btn-sm">Add User</a></td>
                    <thead class="table-dark">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>City</th>
                            <th>View</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->age }}</td>
                            <td>{{ $user->city }}</td>
                            <td><a href="{{route('view.user',$user->id)}}"class="btn btn-primary btn-sm">View</a></td>
                            <td><a href="{{route('update.user',$user->id)}}"class="btn btn-warn btn-sm">Update</a></td>
                            <td><a href="{{route('delete.user',$user->id)}}"class="btn btn-danger btn-sm">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
