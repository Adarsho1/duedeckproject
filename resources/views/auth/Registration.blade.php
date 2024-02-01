<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Registration </title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">


    <style>
        /* Add your custom styles here */
        body {
            background-color: rgba(0, 0, 0, 0.973);
        }

        .input-group {
            position: relative;
            margin-bottom: 15px;
        }



        .login-box {
            margin-top: 50px;

        }

        .login-logo a {
            color: #683f3f;
        }

        .card {
            border: 1px solid #922323;
            /* Add border to the card */
        }

        .login-card-body {
            padding: 40px;
            box-shadow: 0 0 10px rgb(190, 20, 20);
            /* Adjust padding for the login card body */
        }

        .btn-primary {
            background-color: #4caf7d;
            /* Change the primary button color */
            border-color: #af4c4c;
            /* Change the primary button border color */
        }
    </style>

    <script nonce="72d22b8e-db76-49ca-99f8-72a2fdd0edba">
        (function(w, d) {
            ! function(dp, dq, dr, ds) {
                dp[dr] = dp[dr] || {};
                dp[dr].executed = [];
                dp.zaraz = {
                    deferred: [],
                    listeners: []
                };
                dp.zaraz.q = [];
                dp.zaraz._f = function(dt) {
                    return async function() {
                        var du = Array.prototype.slice.call(arguments);
                        dp.zaraz.q.push({
                            m: dt,
                            a: du
                        })
                    }
                };
                for (const dv of ["track", "set", "debug"]) dp.zaraz[dv] = dp.zaraz._f(dv);
                dp.zaraz.init = () => {
                    var dw = dq.getElementsByTagName(ds)[0],
                        dx = dq.createElement(ds),
                        dy = dq.getElementsByTagName("title")[0];
                    dy && (dp[dr].t = dq.getElementsByTagName("title")[0].text);
                    dp[dr].x = Math.random();
                    dp[dr].w = dp.screen.width;
                    dp[dr].h = dp.screen.height;
                    dp[dr].j = dp.innerHeight;
                    dp[dr].e = dp.innerWidth;
                    dp[dr].l = dp.location.href;
                    dp[dr].r = dq.referrer;
                    dp[dr].k = dp.screen.colorDepth;
                    dp[dr].n = dq.characterSet;
                    dp[dr].o = (new Date).getTimezoneOffset();
                    if (dp.dataLayer)
                        for (const dC of Object.entries(Object.entries(dataLayer).reduce(((dD, dE) => ({
                                ...dD[1],
                                ...dE[1]
                            })), {}))) zaraz.set(dC[0], dC[1], {
                            scope: "page"
                        });
                    dp[dr].q = [];
                    for (; dp.zaraz.q.length;) {
                        const dF = dp.zaraz.q.shift();
                        dp[dr].q.push(dF)
                    }
                    dx.defer = !0;
                    for (const dG of [localStorage, sessionStorage]) Object.keys(dG || {}).filter((dI => dI
                        .startsWith("_zaraz_"))).forEach((dH => {
                        try {
                            dp[dr]["z_" + dH.slice(7)] = JSON.parse(dG.getItem(dH))
                        } catch {
                            dp[dr]["z_" + dH.slice(7)] = dG.getItem(dH)
                        }
                    }));
                    dx.referrerPolicy = "origin";
                    dx.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(dp[dr])));
                    dw.parentNode.insertBefore(dx, dw)
                };
                ["complete", "interactive"].includes(dq.readyState) ? zaraz.init() : dp.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html">
                <b>Registration</b></a>

        </div>

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Registration</p>
                <form action="{{ route('Register.user') }}" method="post">
                    @if(Session::has('success'))
                    <div class ="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class ="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">
                            <i class="fas fa-user"></i>&nbsp;Full Name<r style="color: red;">*</r></label>&nbsp;
                        <input type="text" class="form-control" name="name" placeholder="Enter Full Name"
                        name="name" value="{{old('name')}}">
                        <div class="form-group">
                            <div class="input-group-text">
                                <span class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Email"><i class="far fa-envelope"></i>&nbsp;Email 
                            <r style="color: red;">*</r>
                        </label>
                        <input type="email" class="form-control" placeholder=" Enter Email"
                        name="email" value="{{old('email')}}">
                        <div class="">
                            <div class="input-group-text">

                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="password">
                            Password <r style="color: red;">*</r>
                        </label>
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="far fa-eye" id="togglePassword"></i>
                                </span>
                            </div>
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
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Password
                                </label>
                            </div>
                        </div>
                        
                        &nbsp;
                        <div class="col-7">
                            <div class="float-left">
                                <a href="login" class="btn btn-link" style="white-space: nowrap;">
                                    <r style="color: red;">*</r>Already Registered !! Login Here</a>
                            </div>
                            <br><br>
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>
                        </div>
                        
                    </div>

                </form>

                <br>
               
            </div>

        </div>
    </div>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
    
        togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute of password input
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye icon
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>
    




    <script src="../../plugins/jquery/jquery.min.js"></script>

    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>

</body>

</html>
