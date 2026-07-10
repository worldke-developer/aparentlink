<?php
$page_active = 'advertisers';
$page_title = 'Advertiser Sign In';
include 'header.php';
?>

<!-- ===================== AUTH SPLIT LAYOUT ===================== -->
<div class="auth-page">

    <!-- LEFT — Welcome aside -->
    <aside class="auth-aside">
        <span class="eyebrow">Welcome Back</span>
        <h2>Welcome back, Partner!</h2>
        <p>Sign in to access your advertiser dashboard, monitor campaign performance, and manage your affiliate partnerships.</p>

        <div class="auth-benefits">
            <div class="auth-benefit">
                <div class="ab-icon"><span class="check"></span></div>
                <span>Real-time campaign performance</span>
            </div>
            <div class="auth-benefit">
                <div class="ab-icon"><span class="check"></span></div>
                <span>5,000+ active partner publishers</span>
            </div>
            <div class="auth-benefit">
                <div class="ab-icon"><span class="check"></span></div>
                <span>Custom attribution &amp; ROAS dashboards</span>
            </div>
            <div class="auth-benefit">
                <div class="ab-icon"><span class="check"></span></div>
                <span>Dedicated account manager</span>
            </div>
        </div>

        <div class="auth-illustration" aria-hidden="true">
            <div class="ai-bar"></div>
            <div class="ai-bar"></div>
            <div class="ai-bar"></div>
            <div class="ai-bar"></div>
            <div class="ai-bar"></div>
        </div>
    </aside>

    <!-- RIGHT — Sign-in form -->
    <div class="auth-main">
        <div class="auth-main-inner">
            <h1>Sign In to Your Account</h1>
            <p class="auth-sub">Enter your credentials to access your advertiser dashboard.</p>

            <form action="#" method="post" class="auth-form" aria-label="Advertiser sign-in form">
                <div class="form-group">
                    <label for="ai-email">Email Address</label>
                    <input type="email" id="ai-email" name="email" class="form-input" placeholder="john@brand.com" required>
                </div>
                <div class="form-group">
                    <label for="ai-pass">Password</label>
                    <input type="password" id="ai-pass" name="password" class="form-input" placeholder="Enter your password" required>
                </div>
                <div class="auth-form-extra">
                    <label class="auth-checkbox">
                        <input type="checkbox" name="remember">
                        <span>Remember me</span>
                    </label>
                    <a href="#" class="auth-forgot">Forgot Password?</a>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign In <span class="arrow" aria-hidden="true">&#8599;</span></button>
            </form>

            <p class="auth-foot">Don't have an account? <a href="advertiser-signup.php">Sign Up</a></p>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>
