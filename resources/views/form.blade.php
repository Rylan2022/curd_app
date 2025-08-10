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

    <div class="container shadow p-3 mt-5 bg-body-tertiary rounded">
        <h1 class="mt-4 text-center">Registation</h1>
        <form action="{{ url(!empty($employee->id ?? null) && $employee->id ? '/update/'.$employee->id : '/register') }}" method="post">
            @csrf
            <div class="row">
                <div class="mb-3">
                    <label for="fullname" class="text-primary form-label">Full Name</label>
                    <input type="text" name="fullname" class="form-control" value="{{ old('fullname', $employee->fullname ?? '') }}">
                    <span class="text-danger">
                        @error('fullname')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="email" class="text-primary form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $employee->email ?? '') }}">
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="password" class="text-primary form-label">Password</label>
                    <input type="password" name="password" class="form-control" value="">
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="mobile" class="text-primary form-label text-decoration-none">Mobile</label>
                    <input type="text" name="mobile" class="form-control" value="{{ old('mobile', $employee->mobile ?? '') }}">
                    <span class="text-danger">
                        @error('mobile')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="gender" class="text-primary form-label text-decoration-none">Gender</label>
                    <select class="form-select" name="gender" aria-label="Default select example">
                        <option value="" disabled {{ old('gender', $employee->gender ?? '') == '' ? 'selected' : '' }} selected>Select Gender</option>
                        <option value="M" {{ old('gender', $employee->gender ?? '') == 'M' ? 'selected' : '' }}>Male</option>
                        <option value="F" {{ old('gender', $employee->gender ?? '')== 'F' ? 'selected' : '' }}>Female</option>
                        <option value="O" {{ old('gender', $employee->gender ?? '') == 'O' ? 'selected': '' }}>Other</option>
                    </select>
                    <span class="text-danger">
                        @error('gender')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="joining" class="text-primary form-label text-decoration-none">Date Of Joining</label>
                    <input type="date" name="joining" class="form-control" value="{{ old('joining', $employee->joining ?? '') }}">
                    <span class="text-danger">
                        @error('joining')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary form-control">
                </div>
            </div>
        </form>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>