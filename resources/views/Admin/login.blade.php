<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Wedding Studio POS &amp; Billing Management</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }
        body {
            min-height: 100vh;
            background: radial-gradient(circle at top left, #1e1b4b 0%, #0f172a 50%, #020617 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: #1e293b;
        }
        .login-card {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.4), 0 0 0 1px rgba(255, 255, 255, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 960px;
        }
        .brand-panel {
            background: linear-gradient(135deg, #1e1b4b 0%, #312e81 60%, #4338ca 100%);
            color: #ffffff;
            padding: 48px 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }
        .brand-panel::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(246, 211, 101, 0.2) 0%, transparent 70%);
        }
        .brand-panel::after {
            content: '';
            position: absolute;
            bottom: -80px;
            left: -80px;
            width: 240px;
            height: 240px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.3) 0%, transparent 70%);
        }
        .logo-img {
            max-width: 240px;
            height: auto;
            filter: drop-shadow(0 4px 6px rgba(0,0,0,0.3));
        }
        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 16px;
            font-size: 14px;
            color: #e0e7ff;
        }
        .feature-item i {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            color: #f6d365;
            font-size: 14px;
        }
        .form-panel {
            padding: 52px 48px;
            background: #ffffff;
        }
        .form-control {
            border-radius: 10px;
            border: 1.5px solid #e2e8f0;
            padding: 12px 16px 12px 44px;
            height: auto;
            font-size: 14px;
            color: #0f172a;
            transition: all 0.2s ease;
        }
        .form-control:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.12);
        }
        .input-icon-wrap {
            position: relative;
            margin-bottom: 20px;
        }
        .input-icon-wrap i {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 15px;
            z-index: 5;
        }
        .btn-login {
            background: linear-gradient(135deg, #4f46e5 0%, #4338ca 100%);
            color: #ffffff;
            font-weight: 600;
            padding: 13px 20px;
            border-radius: 10px;
            border: none;
            width: 100%;
            font-size: 15px;
            box-shadow: 0 10px 15px -3px rgba(79, 70, 229, 0.35);
            transition: all 0.2s ease;
        }
        .btn-login:hover {
            background: linear-gradient(135deg, #4338ca 0%, #3730a3 100%);
            color: #ffffff;
            transform: translateY(-1px);
            box-shadow: 0 15px 20px -3px rgba(79, 70, 229, 0.45);
        }
        .demo-badge {
            cursor: pointer;
            padding: 6px 12px;
            border-radius: 6px;
            background: #f1f5f9;
            color: #475569;
            font-size: 12px;
            font-weight: 500;
            display: inline-block;
            margin-right: 6px;
            margin-top: 6px;
            transition: all 0.2s ease;
            border: 1px solid #e2e8f0;
        }
        .demo-badge:hover {
            background: #e0e7ff;
            color: #4338ca;
            border-color: #c7d2fe;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="row no-gutters">
            <!-- Left Branding Panel -->
            <div class="col-lg-5 brand-panel d-none d-lg-flex">
                <div>
                    <img src="{{ asset('images/logo.svg') }}" alt="Wedding Studio" class="logo-img mb-4">
                    <h3 class="font-weight-bold" style="font-size: 26px; line-height: 1.3;">
                        Enterprise Studio Management &amp; POS
                    </h3>
                    <p class="text-white-50 mt-2" style="font-size: 14px;">
                        Integrated billing, multi-branch inventory, barcode management, and customer ledger for modern wedding studios.
                    </p>
                </div>

                <div class="mt-4">
                    <div class="feature-item">
                        <i class="fa-solid fa-cash-register"></i>
                        <span>Point of Sale checkout &amp; split settlements</span>
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-boxes-stacked"></i>
                        <span>Multi-branch warehouse &amp; stock alert engine</span>
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-barcode"></i>
                        <span>Automated Code-128 barcode generation</span>
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                        <span>Thermal &amp; A4 custom PDF tax receipts</span>
                    </div>
                </div>

                <div class="pt-4 border-top border-secondary" style="border-color: rgba(255,255,255,0.1) !important;">
                    <small class="text-white-50">
                        Crafted by <strong>Sairam Pulipati</strong> &bull; Laravel 10 LTS
                    </small>
                </div>
            </div>

            <!-- Right Login Form Panel -->
            <div class="col-lg-7 form-panel">
                <div class="d-lg-none text-center mb-4">
                    <img src="{{ asset('images/logo.svg') }}" alt="Wedding Studio" style="max-width: 200px;">
                </div>

                <h2 class="font-weight-bold text-dark mb-1" style="font-size: 24px;">Welcome back</h2>
                <p class="text-muted mb-4" style="font-size: 14px;">Please enter your credentials to access your studio workspace.</p>

                @if ($errors->any())
                    <div class="alert alert-danger py-2 px-3 mb-4" style="font-size: 13px; border-radius: 8px;">
                        <ul class="mb-0 pl-3">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div id="error_msg" class="text-danger small mb-3"></div>

                <form method="POST" id="form" action="{{ route('login') }}">
                    @csrf

                    <label class="font-weight-bold text-dark small mb-2">Email Address</label>
                    <div class="input-icon-wrap">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" id="form2Example17" class="form-control" placeholder="name@weddingstudio.com" value="{{ old('email', 'admin@weddingstudio.com') }}" required autofocus />
                    </div>

                    <label class="font-weight-bold text-dark small mb-2">Password</label>
                    <div class="input-icon-wrap">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" id="form2Example27" class="form-control" placeholder="••••••••••••" value="password123" required />
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="rememberMe" name="remember" checked>
                            <label class="custom-control-label small text-muted" for="rememberMe">Remember this session</label>
                        </div>
                    </div>

                    <button class="btn btn-login" type="submit">
                        <i class="fa-solid fa-right-to-bracket mr-2"></i> Sign In to Dashboard
                    </button>
                </form>

                <!-- Demo Account Quick Fill -->
                <div class="mt-4 pt-3 border-top">
                    <p class="small text-muted mb-2 font-weight-bold">Demo Quick Access:</p>
                    <span class="demo-badge" onclick="fillCreds('admin@weddingstudio.com', 'password123')">
                        <i class="fa-solid fa-user-shield text-primary mr-1"></i> Admin
                    </span>
                    <span class="demo-badge" onclick="fillCreds('manager@weddingstudio.com', 'password123')">
                        <i class="fa-solid fa-briefcase text-success mr-1"></i> Branch Manager
                    </span>
                    <span class="demo-badge" onclick="fillCreds('sales@weddingstudio.com', 'password123')">
                        <i class="fa-solid fa-cash-register text-info mr-1"></i> Sales Executive
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script>
        function fillCreds(email, password) {
            document.getElementById('form2Example17').value = email;
            document.getElementById('form2Example27').value = password;
        }

        const email = document.getElementById('form2Example17');
        const password = document.getElementById('form2Example27');
        const errorElement = document.getElementById('error_msg');
        const form = document.getElementById('form');

        form.addEventListener('submit', (e) => {
            if (!email.value || !password.value) {
                e.preventDefault();
                errorElement.innerText = 'Please provide both email and password.';
            }
        });
    </script>
</body>
</html>