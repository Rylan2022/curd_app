<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">FullName</th>
                        <th scope="col">SID</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Status</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($studentData as $key => $val)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $val['fullname'] }}</td>
                            <td>{{ $val['stdId'] }}</td>
                            <td>{{ $val['email'] }}</td>
                            <td>{{ $val['mobile'] }}</td>
                            <td>{{ $val['gender'] }}</td>
                            <td>@if ($val['status'] == '1')
                                <span class="badge text-white bg-success">Active</span>
                            @else
                                <span class="badge text-white bg-secondary">Inactive</span>
                                @endif
                            </td>
                            <td><a href="{{ url('/edit', ['empId' => $val['id']]) }}"class="btn btn-success btn-sm">Update</a></td>
                            <td><a href="{{ url('/delete', ['empId' => $val['id']]) }}" class="btn btn-danger btn-sm">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>