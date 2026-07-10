<?php
$page_active = 'creators';
$page_title = 'Creator Sign In';
include 'header.php';
?>

<!-- ===================== AUTH SPLIT LAYOUT ===================== -->
<div class="auth-page">

    <!-- LEFT — Welcome aside -->
    <aside class="auth-aside">
        <span class="eyebrow">Welcome Back</span>
        <h2>Welcome back, Creator!</h2>
        <p>Sign in to access your creator dashboard, browse brand campaigns, and track your earnings.</p>

        <div class="auth-benefits">
            <div class="auth-benefit">
                <div class="ab-icon"><span class="check"></span></div>
                <span>1,200+ active brand campaigns</span>
            </div>
            <div class="auth-benefit">
                <div class="ab-icon"><span class="check"></span></div>
                <span>Real-time earnings dashboard</span>
            </div>
            <div class="auth-benefit">
                <div class="ab-icon"><span class="check"></span></div>
                <span>Per-post conversion analytics</span>
            </div>
            <div class="auth-benefit">
                <div class="ab-icon"><span class="check"></span></div>
                <span>Weekly Tuesday payouts</span>
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
            <p class="auth-sub">Enter your credentials to access your creator dashboard.</p>

            <form action="#" method="post" class="auth-form" aria-label="Creator sign-in form">
                <div class="form-group">
                    <label for="ci-email">Email Address</label>
                    <input type="email" id="ci-email" name="email" class="form-input" placeholder="alex@channel.com" required>
                </div>
                <div class="form-group">
                    <label for="ci-pass">Password</label>
                    <input type="password" id="ci-pass" name="password" class="form-input" placeholder="Enter your password" required>
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

            <p class="auth-foot">Don't have an account? <a href="creator-signup.php">Sign Up</a></p>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>
