<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Codeban Company Limited CMS login.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CMS Login - Codeban Company Limited</title>
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-override.css') }}?v=2">
</head>
<body>
    <main class="ve-cms-login">
        <section class="ve-cms-login-panel">
            <a href="{{ route('home') }}" class="ve-footer-logo">
                <span class="ve-logo-icon">C</span>
                <span class="ve-logo-text">Codeban<strong></strong></span>
            </a>
            <span class="ve-section-tag">CMS Access</span>
            <h1>Login to Website CMS</h1>
            <p>Use your administrator account to manage Codeban website content.</p>
            @if ($errors->any())
                <div class="ve-cms-alert">
                    {{ $errors->first() }}
                </div>
            @endif
            <form class="ve-cms-login-form" action="{{ route('login.submit') }}" method="post">
                @csrf
                <label for="email">Email Address</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="admin@codeban.co.tz" required>

                <label for="password">Password</label>
                <div class="ve-password-field">
                    <input id="password" type="password" name="password" placeholder="Enter password" required>
                    <button type="button" class="ve-password-toggle" data-toggle-password data-password-target="password" aria-label="Show password" title="Show password">
                        <i class="fa fa-eye"></i>
                    </button>
                </div>

                <button type="submit" class="ve-btn-primary">
                    <i class="fa fa-lock"></i> Login
                </button>
            </form>
            <a href="{{ route('home') }}" class="ve-cms-back-link"><i class="fa fa-arrow-left"></i> Back to website</a>
        </section>
    </main>
    <script>
        document.querySelectorAll('[data-toggle-password]').forEach((button) => {
            button.addEventListener('click', () => {
                const input = document.getElementById(button.dataset.passwordTarget);
                const icon = button.querySelector('i');
                const isHidden = input.type === 'password';

                input.type = isHidden ? 'text' : 'password';
                button.setAttribute('aria-label', isHidden ? 'Hide password' : 'Show password');
                button.setAttribute('title', isHidden ? 'Hide password' : 'Show password');
                icon.className = isHidden ? 'fa fa-eye-slash' : 'fa fa-eye';
            });
        });
    </script>
</body>
</html>
