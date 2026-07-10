<?php
$page_active = 'creators';
$page_title = 'Creator Sign Up';
include 'header.php';
?>

<!-- ===================== AUTH SPLIT LAYOUT ===================== -->
<div class="auth-page">

    <!-- LEFT — Benefits aside -->
    <aside class="auth-aside">
        <span class="eyebrow">For Creators</span>
        <h2>Monetize your influence.</h2>
        <p>Join a curated marketplace of 1,200+ brand campaigns. Get matched with collaborations that fit your audience and get paid weekly.</p>

        <div class="auth-benefits">
            <div class="auth-benefit">
                <div class="ab-icon"><span class="check"></span></div>
                <span>Brand Collaborations — 1,200+ active campaigns</span>
            </div>
            <div class="auth-benefit">
                <div class="ab-icon"><span class="check"></span></div>
                <span>Influencer Analytics — audience &amp; engagement data</span>
            </div>
            <div class="auth-benefit">
                <div class="ab-icon"><span class="check"></span></div>
                <span>Campaign Invites — pre-negotiated deals</span>
            </div>
            <div class="auth-benefit">
                <div class="ab-icon"><span class="check"></span></div>
                <span>Performance Bonuses — tier-based monthly rewards</span>
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
            <h1>Create Creator Account</h1>
            <p class="auth-sub">Sign up with your channel or social handle to join the creator marketplace.</p>

            <form action="#" method="post" class="auth-form" aria-label="Creator sign-up form">
                <div class="form-group">
                    <label for="cu-name">Full Name</label>
                    <input type="text" id="cu-name" name="name" class="form-input" placeholder="Alex Rivera" required>
                </div>
                <div class="form-group">
                    <label for="cu-email">Email Address</label>
                    <input type="email" id="cu-email" name="email" class="form-input" placeholder="alex@channel.com" required>
                </div>
                <div class="form-group">
                    <label for="cu-handle">Channel / Social Handle</label>
                    <input type="text" id="cu-handle" name="handle" class="form-input" placeholder="@yourchannel (YouTube, TikTok, IG)" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="cu-pass">Password</label>
                        <input type="password" id="cu-pass" name="password" class="form-input" placeholder="Min 8 characters" required>
                    </div>
                    <div class="form-group">
                        <label for="cu-pass2">Confirm Password</label>
                        <input type="password" id="cu-pass2" name="password2" class="form-input" placeholder="Re-enter password" required>
                    </div>
                </div>
                <div class="auth-form-extra">
                    <label class="auth-checkbox">
                        <input type="checkbox" name="terms" required>
                        <span>I agree to the <a href="terms.php" class="auth-forgot">Terms</a> &amp; <a href="privacy.php" class="auth-forgot">Privacy Policy</a></span>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Create Creator Account <span class="arrow" aria-hidden="true">&#8599;</span></button>
            </form>

            <p class="auth-foot">Already have an account? <a href="creator-signin.php">Sign In</a></p>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>
