<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ATR/BPN</title>
    <link rel="stylesheet" href="{{asset('mazer')}}/assets/css/main/app.css">
    <link rel="stylesheet" href="{{asset('mazer')}}/assets/css/pages/auth.css">
    <link rel="shortcut icon" href="{{asset('img')}}/Logo_BPN-KemenATR.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('img')}}/Logo_BPN-KemenATR.png" type="image/png">

    <style>
        .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
        }
        .h-custom {
        height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
        .h-custom {
        height: 100%;
        }
        }
    </style>
    
    <style>
        .ld {
          display: inline-block;
          position: relative;
          width: 21px;
          height: 21px;
        }
        .ld div {
          display: inline-block;
          position: absolute;
          left: 3px;
          width: 6px;
          background: #fff;
          animation: c 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
        }
        .ld div:nth-child(1) {
          left: 3px;
          animation-delay: -0.24s;
        }
        .ld div:nth-child(2) {
          left: 12px;
          animation-delay: -0.12s;
        }
        .ld div:nth-child(3) {
          left: 21px;
          animation-delay: 0;
        }
        @keyframes c {
          0% {
            top: 3px;
            height: 24px;
          }
          50%, 100% {
            top: 9px;
            height: 12px;
          }
        }
    
      </style>
</head>

<body>
    <div id="auth">
        
<div class="row h-100 justify-content-center">
    <div class="col-lg-6 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <center><a href="index.html"><img src="{{asset('img')}}/Logo_BPN-KemenATR.png" width="100px;" style="height: 100px;" alt="Logo"></a></center>
            </div>
            {{-- <h1 class="auth-title">Log in page</h1> --}}
            {{-- <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p> --}}

            <form method="POST" id="form_login" action="{{ route('login') }}">
                @csrf
				@error('username')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <?php if(session('success')): ?>
					<div class="alert alert-success" role="alert">
						{{ session('success') }}
					</div>
					<?php endif; ?>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" placeholder="Masukan Username" name="username" value="{{ old('username') }}" required>
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" name="password" placeholder="Masukan Password" required>
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                {{-- <div class="form-check form-check-lg d-flex align-items-end">
                    <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label text-gray-600" for="flexCheckDefault">
                        Keep me logged in
                    </label>
                </div> --}}
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" id="btn_login">Log in</button>
            </form>
            {{-- <div class="text-center mt-5 text-lg fs-4">
                <p class="text-gray-600">Don't have an account? <a href="auth-register.html" class="font-bold">Sign
                        up</a>.</p>
                <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>
            </div> --}}
        </div>
    </div>
    {{-- <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div> --}}
</div>

    </div>


<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.js"
></script>

	<script>
		$(document).ready(function() {

			$(document).on('submit', '#form_login', function(event) {
                    $('#btn_login').attr('disabled',true);
                    $('#btn_login').html('Loading <div class="ld"><div></div><div></div><div></div></div>');
                    

                });

		});
	</script>
</body>

</html>
