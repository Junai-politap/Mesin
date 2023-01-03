<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>PPM - POLITAP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <link rel="shortcut icon" href="{{ url('public') }}/logo.png">

        
        <link href="{{ url('public/admin') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('public/admin') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('public/admin') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>
    eysudhasgdahsdh

    <body class="authentication-bg authentication-bg-pattern d-flex align-items-center">

        <div class="home-btn d-none d-sm-block">
            <a href="{{ url('/') }}"><i class="fas fa-home h2 text-white"></i></a>
        </div>
        
        <div class="account-pages w-100 mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center mb-4">
                                    <a href="{{ url('/') }}">
                                        <span><img src="{{ url('public') }}/logo.png" alt="" height="100"></span>
                                    </a>
                                </div>

                                <form action="{{ url('login') }}" class="pt-2" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Usernam</label>
                                        <input class="form-control" type="text" id="emailaddress" required="" placeholder="Enter your username" name="username">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" id="password" placeholder="Enter your password" name="password">
                                    </div>
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-success btn-block" type="submit"><span class="fa fa-arrow-right"></span> Log In </button>
                                    </div>

                                </form>
                            </div> 
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        
        <script src="{{ url('public/admin') }}/assets/js/vendor.min.js"></script>        
        <script src="{{ url('public/admin') }}/assets/js/app.min.js"></script>
        
    </body>
</html>