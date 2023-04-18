<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Login</title>
  <!-- Add Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <!-- Add custom CSS -->
 <style>
  /* Your custom CSS code here */
  form {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 50px;
  }

  h1 {
    margin-top: 50px;
    margin-bottom: 30px;
    font-weight: bold;
    font-size: 3rem;
    text-align: center;
    color: black;
    /* text-shadow: 2px 2px #000; */
  }

  label {
    margin-bottom: 10px;
    font-size: 1.2rem;
    color: Black;
    /* text-shadow: 1px 1px #000; */
  }

  

  input[type="submit"] {
    background-color: #F44336;
    color: green;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out;
    font-size: 1.2rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    box-shadow: 2px 2px #000;
  }

  input[type="submit"]:hover {
    background-color: #D32F2F;
  }

  body{
    background-color: #555;
  }
  
</style>

</head>
<body>
<div class="card w-50 mx-auto mt-5">
    <div class="card-body">
        <h1 class="card-title text-center mb-4">Student Registration</h1>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <form method="post" action="{{ route('register_submit') }}">
        @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
</fieldset><br>
<center><p>Already have an account? <a href="{{ route('login') }}">Login</a></p></center>
  </div>
    </div>
</div>
  <!-- Add Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
    integrity="sha384-eajpDvz8X3EBiB/AzCGO1l0kNUw8In1Wt21hOAVi0foa02Pzy8XymGtGGHNr0/Li"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
