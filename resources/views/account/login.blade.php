<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Tel-U Finds Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap");

    body {
        font-family: sans-serif;
        background-color: #fff;
    }

    .container {
        width: 100%;
        max-width: 500px;
        margin: 0 auto;
    }

    .row {
        margin-bottom: 20px;
    }

    .col-md-12 {
        width: 100%;
    }

    .card {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
    }

    .card-body {
        padding: 20px;
    }

    .form-label {
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
    }

    .btn {
        width: 100%;
        background-color: #000;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #6f1109;
    }



    .logo_2 {
        margin: 0 auto;
    }

    .login-text {
        font-size: 36px;
        font-weight: bold;
        font-family: "League Spartan", sans-serif;
    }

    .login-text2 {
        font-size: 18px;
        font-weight: 500;
        font-family: "League Spartan", sans-serif;
    }

    .login-text3 {
        font-size: 18px;
        font-weight: 500;
        font-family: "League Spartan", sans-serif;
        color: #A21608;
        text-decoration: none;
    }
</style>

<body>
    <div class="d-flex justify-content-center align-items-center mb-2">
        <img src="logo.png" alt="" width="200px" />
    </div>
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h3 class="login-text text-center">Login</h3>
                    <p class="login-text2 text-center" style="color: #645F5F;">Welcome back, please login with your
                        account.</p>
                    <button type="button" class="btn btn-secondary btn-lg btn-block login-text2"
                        style="background-color: white; color: #645F5F;">
                        <img src="{{ asset('build/assets/icon/google.png')}}" alt="" class="img-fluid px-1" width="20px" height="20px" />
                        Google</button>
                    <p class="mt-2 login-text2 text-center" style="color: #A4A4A4;">-------- or login with --------</p>
                    <form>
                        <div class="col-md-12">
                            <label for="Email" class="form-label login-text2" style="color: #645F5F;">Email</label>
                            <input type="email" class="form-control" id="Email" />
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="Password" class="form-label login-text2"
                                style="color: #645F5F;">Password</label>
                            <input type="password" class="form-control" id="Password" />
                        </div>
                            <a href="/telufinds" class="btn btn-primary login-text2">Login</a>
                    </form>
                    <p class="mt-5 login-text2 text-center" text-center style="color: #A4A4A4;">Didn't have an account?
                        <a href="/signup" class="login-text3">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>