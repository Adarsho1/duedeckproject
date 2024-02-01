<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <style>
        /* Add your custom styles here */
        body {
            background-color: #4388f0f8;
            margin: -1px;
            /* Reset default margin */
        }

        .container-fluid {
            display: flex;
            height: 97vh;
        }

        .carousel-container,
        {
        flex: 1;
        padding: px;

        }

        .carousel-container {
            background-color: #399cee;
            overflow: hidden;
            height: 80%;
            /* Ensure the container takes up full height */
        }

        .carousel {
            width: 97%;
            /* Ensure the carousel takes up full width */
        }

        .login-box {
            background-color: #fdfdfbf8;
            /* Match body background color */
            height: 100%;
            padding: 50px;
            /* Increase padding for left and right spacing */
            margin-top: auto;
            /* Align to the bottom */
            margin-left: -10%;
            /* Align to the left */
            margin-right: -14px;
            /* Align to the right */

        }

        #togglePassword {
            margin-left: -23px;
            z-index: 6;
            position: relative;
        }

        #remember {
            margin-left: 15px;
            z-index: 6;
            position: relative;
            
        }

        /* Adjust the image size to fill the entire viewport */
        .carousel-inner>.item>img,
        .carousel-inner>.item>a>img {
            width: 90%;
            /* Let the width adjust automatically */
            height: auto;
            /* Let the height adjust automatically */
            /* Set the height to fill the viewport */
            //*object-fit: cover;
            /* Maintain aspect ratio and cover entire viewport */
        }

        .container {
            width: 980px;
            /* Not needed for full-width layout */
        }

        .input-group {
            display: flex;
            align-items: center;
            position: relative;
            width: 100%;
        }

        .input-group .form-control {
            flex: 1;
            border-radius: 0;
            /* Optional: Adjust border-radius as needed */
        }

        .input-group .input-group-append {
            position: absolute;
            right: 0;
        }

        .input-group .input-group-text {
            background-color: transparent;
            border: none;
        }

        .input-group-append span {
            cursor: pointer;
        }

        .card {
            border: 1px solid #f70d0d;
        }

        .btn-primary {
            background-color: #4991f0;
            border-color: #fdfafa;
            width: 300px;
            height: 50px;
            font-size: 18px;
            font-weight:300;"
        }

        .toggle-password {
            cursor: pointer;
        }

        .float-right {
            /* Center the element */
            margin: 0 auto;
            /* Adjust width if needed */
            width: fit-content;
        }
    </style>
</head>

<body>
    <div class="container-fluid">

        <div class="col-md-5">
            <div class="login-box">
                <div class="login-logo">
                    <a href="Login">
                        <b></b>
                    </a>
                </div>

                <div class="card-body">
                    <div class="login-logo" style="position: absolute; top: 10px; left: 10px;">
                        <img class="" src="https://due-deck.com/images/icons/duedeck-R.svg" width="150">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fas fa-phone" style="margin-left: 10px;"></i> 
                        <span style="margin-left: 5px;">9175470443</span> 
                    </div><br><br><br><br><br><br>
                    <p class="text-center" style="font-weight:900;">WELCOME BACK!!</p>
                      
                    <form action="{{ route('login.user') }}" method="post">
                        @if (Session::has('success'))
                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                        @endif
                        @if (Session::has('fail'))
                            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                        @endif
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name"><i class="far fa-envelope"></i>&nbsp;Email
                                <r style="color: red;">*</r>
                            </label>&nbsp;
                            <input type="email" class="form-control" placeholder="email" name="email"
                                value="{{ old('email') }}">
                            <div class="form-group">
                                <div class="input-group-text">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="password">Password <r style="color: red;">*</r></label>
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="Enter Password" name="password"
                                    id="password">
                                <div class="input-group-row">
                                </div>
                                <span class="input-group-text">
                                    <i class="fa fa-eye" id="togglePassword"></i>
                                </span>
                            </div>
                            <div class="form-group">
                                <div class="input-group-text">
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">Remember Password
                                     
                                    </label>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                        <a href="/Registration" class="text-right">Register!!</a>
                                    </label>
                                </div>
                                
                                <div class="float-right"> <!-- Adjust alignment -->
                                    <br>
                                    <a href="/dashboards">
                                        <button type="submit" class="btn btn-primary btn-primary">Sign In</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="https://due-deck.com/images/login-slide-1.png" alt="Chania" width="460"
                        height="345">
                    <div class="carousel-caption">
                    </div>
                </div>

                <div class="item">
                    <img src="https://due-deck.com/images/login-slide-2.png" alt="Chania" width="360"
                        height="345">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute of password input
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye icon
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>

</html>
