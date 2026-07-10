<?php
$page_active = 'publishers';
$page_title = 'Publisher Sign Up';
include 'header.php';
?>

<!-- ===================== AUTH SPLIT LAYOUT ===================== -->
<div class="auth-page">

    <!-- LEFT — Benefits aside -->
    <aside class="auth-aside">
        <span class="eyebrow">For Publishers</span>
        <h2>Start earning with aparentlink.</h2>
        <p>Join 5,000+ publishers monetizing their traffic with high-converting offers from global brands. Get paid weekly.</p>

        <div class="auth-benefits">
            <div class="auth-benefit">
                <div class="ab-icon"><span class="check"></span></div>
                <span>Real-Time Tracking — sub-minute conversion data</span>
            </div>
            <div class="auth-benefit">
                <div class="ab-icon"><span class="check"></span></div>
                <span>Weekly Payouts — every Tuesday, 12 methods</span>
            </div>
            <div class="auth-benefit">
                <div class="ab-icon"><span class="check"></span></div>
                <span>Global Offers — 1,200+ premium campaigns</span>
            </div>
            <div class="auth-benefit">
                <div class="ab-icon"><span class="check"></span></div>
                <span>Dedicated Support — named account manager</span>
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

    <!-- RIGHT — Sign-up form -->
    <div class="auth-main">
        <div class="auth-main-inner">
            <h1>Create Publisher Account</h1>
            <p class="auth-sub">Fill in your details to get started. Approval typically takes under 24 hours.</p>

            <form action="#" method="post" class="auth-form" aria-label="Publisher sign-up form">
                <div class="form-group">
                    <label for="pu-name">Full Name</label>
                    <input type="text" id="pu-name" name="name" class="form-input" placeholder="Jane Doe" required>
                </div>
                <div class="form-group">
                    <label for="pu-email">Email Address</label>
                    <input type="email" id="pu-email" name="email" class="form-input" placeholder="jane@company.com" required>
                </div>
                <div class="form-group">
                    <label for="pu-website">Company / Website</label>
                    <input type="text" id="pu-website" name="website" class="form-input" placeholder="yoursite.com" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="pu-pass">Password</label>
                        <input type="password" id="pu-pass" name="password" class="form-input" placeholder="Min 8 characters" required>
                    </div>
                    <div class="form-group">
                        <label for="pu-pass2">Confirm Password</label>
                        <input type="password" id="pu-pass2" name="password2" class="form-input" placeholder="Re-enter password" required>
                    </div>
                </div>
                <div class="auth-form-extra">
                    <label class="auth-checkbox">
                        <input type="checkbox" name="terms" required>
                        <span>I agree to the <a href="terms.php" class="auth-forgot">Terms</a> &amp; <a href="privacy.php" class="auth-forgot">Privacy Policy</a></span>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Create Publisher Account <span class="arrow" aria-hidden="true">&#8599;</span></button>
            </form>

            <p class="auth-foot">Already have an account? <a href="publisher-signin.php">Sign In</a></p>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>
