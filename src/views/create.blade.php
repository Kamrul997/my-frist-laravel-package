<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyPackage Create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body class="bg-light">
    <div class="container bg-white pb-3">
        <div class="d-flex justify-content-between pt-4 mb-3">
            <h3>CREATE NEW ENTRY</h3>
            <div>
                <a href="{{ route('crud.index') }}" class="btn btn-info  btn-sm text-white">Entry List</a>
            </div>
        </div>

        <form action="{{ route('crud.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                    placeholder="Enter name">
                @if ($errors->has('name'))
                    <small class="text-danger">! {{ $errors->first('name') }}</small>
                @endif
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                    placeholder="Enter email">
                @if ($errors->has('email'))
                    <small class="text-danger">! {{ $errors->first('email') }}</small>
                @endif
            </div>
            <div class="form-group">
                <label for="phone_no">Phone No</label>
                <input type="number" class="form-control" id="phone_no" name="phone" value="{{ old('phone') }}"
                    placeholder="Enter Phone No">
                @if ($errors->has('phone'))
                    <small class="text-danger">! {{ $errors->first('phone') }}</small>
                @endif
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" placeholder="Enter Phone No">{{ old('address') }}</textarea>
                @if ($errors->has('address'))
                    <small class="text-danger">! {{ $errors->first('address') }}</small>
                @endif
            </div>
            <button type="submit" class="btn btn-success btn-sm text-white">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
