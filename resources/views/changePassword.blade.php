<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gull - Laravel + Bootstrap 4 admin template</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link href="public/dist-assets/css/themes/lite-purple.min.css" rel="stylesheet">
</head>
<div class="auth-layout-wrap" style="background-image: url(public/dist-assets/images/photo-wide-4.jpg)">
    <div class="auth-content">
        <div class="card o-hidden">
            <div class="row">
<!--                 <div class="col-md-6 text-center" style="background-size: cover;background-image: url(public/dist-assets/images/photo-long-3.jpg)">
                    <div class="pl-3 auth-right">
                        <div class="auth-logo text-center mt-4"><img src="public/dist-assets/images/logo.jpg
        <th>Account Title</th>
        <th>{{$feestructure->account_title}}</th>
      </tr>" alt=""></div>
                        <div class="flex-grow-1"></div>
                        <div class="w-100 mb-4"><a class="btn btn-outline-primary btn-block btn-icon-text btn-rounded" href="signin.html"><i class="i-Mail-with-At-Sign"></i> Sign in with Email</a><a class="btn btn-outline-google btn-block btn-icon-text btn-rounded"><i class="i-Google-Plus"></i> Sign in with Google</a><a class="btn btn-outline-facebook btn-block btn-icon-text btn-rounded"><i class="i-Facebook-2"></i> Sign in with Facebook</a></div>
                        <div class="flex-grow-1"></div>
                    </div>
                </div> -->
                <div class="col-md-12">
                    <div class="p-4">
                        <h1 class="mb-3 text-18">Password change</h1>
                        <form method="POST" action="{{ route('change.password') }}">
                              @csrf 
   
                         @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                         @endforeach 
                            <div class="form-group">
                                <label for="Password">Current Password</label>
                                <input class="form-control form-control-rounded" id="password" type="password" class="form-control" name="current_password" >
                            </div>
                            <div class="form-group">
                                <label for="new_password">New Password</label>
                                <input class="form-control form-control-rounded" name="new_password" id="new_password" type="password">
                            </div>
                            <div class="form-group">
                                <label for="password">New Confirm Password</label>
                                <input class="form-control form-control-rounded" name="new_confirm_password" id="new_confirm_password" type="password">
                            </div>
                           
                            <button type="submit" class="btn btn-primary btn-block btn-rounded mt-3">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>