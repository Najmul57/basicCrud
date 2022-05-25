<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

<div class="container mt-5">
    <a href="{{ url('/') }}" class="btn btn-success mb-3">Show</a>
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
   <form action="{{ url('store') }}" method="post">
       @csrf

        <div class="form-group">
            <input type="text" name="name" class="form-control @error('name') is-invalid  @enderror" value="{{old('name')}}"   placeholder="Name">
            @error('name')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
            <input type="email" name="email" class="form-control @error('email') is-invalid  @enderror " value="{{old('email')}}"   placeholder="Email">
            @error('email')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
            <input type="text" name="phone" class="form-control @error('phone') is-invalid  @enderror " value="{{old('phone')}}"   placeholder="Phone">
            @error('phone')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
            <br>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>

   </form>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
