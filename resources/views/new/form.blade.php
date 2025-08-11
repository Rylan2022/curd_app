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
        <h1 class="mt-4 text-center">Registation From</h1>
        <form action="{{ url(!empty($studentData->id ?? null) && $studentData->id ? '/update/'.$studentData->id: '/register') }}" method="post">
            @csrf
            <div class="row">
                <div class="mb-3">
                    <label for="fullname" class="text-primary form-label">Fullname</label>
                    <input type="text" name="fullname" class="form-control" value="{{ old('fullname', $studentData->fullname ?? '') }}">
                    @error('fullname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="text-primary form-label">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email', $studentData->email ?? '') }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="text-primary form-label">Password</label>
                    <input type="password" name="password" class="form-control" value="">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="mobile" class="text-primary form-label">Mobile</label>
                    <input type="text" name="mobile" class="form-control" value="{{ old('mobile', $studentData->mobile ?? '') }}">
                    @error('mobile')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="gender" class="text-primary form-label text-decoration-none">Gender</label>
                    <select class="form-select" name="gender">
                        <option value="" disabled {{ old('gender', $studentData->gender ?? '') == '' ? 'selected' : '' }} selected>Select Gender</option>
                        <option value="M" {{ old('gender', $studentData->gender ?? '') == 'M' ? 'selected' : '' }}>Male</option>
                        <option value="F" {{ old('gender', $studentData->gender ?? '') == 'F' ? 'selected' : '' }}>Female</option>
                        <option value="O" {{ old('gender', $studentData->gender ?? '') == 'O' ? 'selected' : '' }}>Other</option>
                    </select>
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