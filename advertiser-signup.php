<?php
$page_active = 'advertisers';
$page_title = 'Advertiser Sign Up';
include 'header.php';
?>

<!-- ===================== AUTH SPLIT LAYOUT ===================== -->
<div class="auth-page">

    <!-- LEFT — Benefits aside -->
    <aside class="auth-aside">
        <span class="eyebrow">For Advertisers</span>
        <h2>Scale your brand with partners.</h2>
        <p>Launch your offer to 5,000+ vetted publishers and creators across 120+ countries. Pay only for qualifying conversions.</p>

        <div class="auth-benefits">
            <div class="auth-benefit">
                <div class="ab-icon"><span class="check"></span></div>
                <span>Performance Tracking — multi-touch attribution</span>
            </div>
            <div class="auth-benefit">
                <div class="ab-icon"><span class="check"></span></div>
                <span>Global Reach — 120+ countries, 5,000+ partners</span>
            </div>
            <div class="auth-benefit">
                <div class="ab-icon"><span class="check"></span></div>
                <span>Custom Attribution — configurable per offer</span>
            </div>
            <div class="auth-benefit">
                <div class="ab-icon"><span class="check"></span></div>
                <span>Brand Safety — ML-driven placement monitoring</span>
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
            <h1>Create Advertiser Account</h1>
            <p class="auth-sub">Set up your brand profile and start scaling with affiliate partners.</p>

            <form action="#" method="post" class="auth-form" aria-label="Advertiser sign-up form">
                <div class="form-group">
                    <label for="au-name">Full Name</label>
                    <input type="text" id="au-name" name="name" class="form-input" placeholder="John Smith" required>
                </div>
                <div class="form-group">
                    <label for="au-email">Email Address</label>
                    <input type="email" id="au-email" name="email" class="form-input" placeholder="john@brand.com" required>
                </div>
                <div class="form-group">
                    <label for="au-company">Company Name</label>
                    <input type="text" id="au-company" name="company" class="form-input" placeholder="Acme Inc." required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="au-pass">Password</label>
                        <input type="password" id="au-pass" name="password" class="form-input" placeholder="Min 8 characters" required>
                    </div>
                    <div class="form-group">
                        <label for="au-pass2">Confirm Password</label>
                        <input type="password" id="au-pass2" name="password2" class="form-input" placeholder="Re-enter password" required>
                    </div>
                </div>
                <div class="auth-form-extra">
                    <label class="auth-checkbox">
                        <input type="checkbox" name="terms" required>
                        <span>I agree to the <a href="terms.php" class="auth-forgot">Terms</a> &amp; <a href="privacy.php" class="auth-forgot">Privacy Policy</a></span>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Create Advertiser Account <span class="arrow" aria-hidden="true">&#8599;</span></button>
            </form>

            <p class="auth-foot">Already have an account? <a href="advertiser-signin.php">Sign In</a></p>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>
