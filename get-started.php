<?php
$page_active = '';
$page_title = 'Get Started';
$show_popup = false;
include 'header.php';
?>

<!-- ===================== PAGE HERO ===================== -->
<section class="page-hero center">
    <div class="container">
        <span class="eyebrow">Get Started</span>
        <h1>Choose Your Path to <span class="text-blue">Success</span></h1>
        <p class="lead">Whether you want to monetize traffic, scale your brand, or grow your influence — aparentlink has a path for you. Pick your role below and start earning today.</p>
    </div>
</section>

<!-- ===================== ROLE CARDS ===================== -->
<section class="section">
    <div class="container">
        <div class="role-grid">

            <!-- Publisher -->
            <div class="role-card publisher reveal reveal-1">
                <div class="role-icon">
                    <span class="icon-shape wallet"></span>
                </div>
                <h3>Publisher</h3>
                <p>Monetize your traffic with high-converting offers from global brands. Get paid weekly with real-time analytics and dedicated support.</p>
                <a href="publisher-signup.php" class="btn btn-primary btn-lg">Sign Up <span class="arrow" aria-hidden="true">&#8599;</span></a>
                <p class="role-signin">Already have an account? <a href="publisher-signin.php">Sign In</a></p>
            </div>

            <!-- Advertiser -->
            <div class="role-card advertiser reveal reveal-2">
                <div class="role-icon">
                    <span class="icon-shape target"></span>
                </div>
                <h3>Advertiser</h3>
                <p>Scale your brand with high-performing partners across the globe. Access 5,000+ vetted publishers and creators with custom attribution.</p>
                <a href="advertiser-signup.php" class="btn btn-primary btn-lg">Sign Up <span class="arrow" aria-hidden="true">&#8599;</span></a>
                <p class="role-signin">Already have an account? <a href="advertiser-signin.php">Sign In</a></p>
            </div>

            <!-- Creator -->
            <div class="role-card creator reveal reveal-3">
                <div class="role-icon">
                    <span class="icon-shape handshake"></span>
                </div>
                <h3>Creator</h3>
                <p>Partner with premium brands and grow your influence while earning commissions. Join a curated marketplace built for content creators.</p>
                <a href="creator-signup.php" class="btn btn-primary btn-lg">Sign Up <span class="arrow" aria-hidden="true">&#8599;</span></a>
                <p class="role-signin">Already have an account? <a href="creator-signin.php">Sign In</a></p>
            </div>

        </div>
    </div>
</section>

<!-- ===================== WHY CHOOSE US ===================== -->
<section class="section bg-soft">
    <div class="container">
        <div class="section-head reveal reveal-1">
            <span class="eyebrow">Why aparentlink</span>
            <h2>The platform built for every kind of partner.</h2>
            <p>One transparent platform for publishers, advertisers, and creators — with real-time tracking, weekly payouts, and dedicated support for everyone.</p>
        </div>

        <div class="features-grid">
            <div class="feature-card reveal reveal-1">
                <div class="icon-box"><span class="icon-shape bolt"></span></div>
                <h3>Quick Setup</h3>
                <p>Get verified in under 24 hours and start earning by next Tuesday. No complex integrations required.</p>
            </div>
            <div class="feature-card reveal reveal-2">
                <div class="icon-box"><span class="icon-shape wallet"></span></div>
                <h3>Weekly Payouts</h3>
                <p>Paid every Tuesday in 32 currencies via 12 payout methods. No 30-day holds, no minimums over $50.</p>
            </div>
            <div class="feature-card reveal reveal-3">
                <div class="icon-box"><span class="icon-shape chart"><span></span><span></span><span></span><span></span></span></div>
                <h3>Real-Time Analytics</h3>
                <p>Sub-minute reporting on clicks, conversions, EPC, and revenue — with full drill-downs by geo and source.</p>
            </div>
            <div class="feature-card reveal reveal-1">
                <div class="icon-box"><span class="icon-shape globe"></span></div>
                <h3>Global Reach</h3>
                <p>Access partners and offers in 120+ countries with localized payouts and regional compliance.</p>
            </div>
            <div class="feature-card reveal reveal-2">
                <div class="icon-box"><span class="icon-shape shield"></span></div>
                <h3>Brand Safety</h3>
                <p>ML-driven monitoring ensures your brand appears only in approved, quality contexts.</p>
            </div>
            <div class="feature-card reveal reveal-3">
                <div class="icon-box"><span class="icon-shape support"></span></div>
                <h3>Dedicated Support</h3>
                <p>A named account manager and 24/7 in-app chat for every partner, regardless of size.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CLOSING CTA ===================== -->
<section class="section">
    <div class="container">
        <div class="footprint reveal reveal-1">
            <span class="eyebrow eyebrow-on-dark">Limited time offer</span>
            <h2>Create an account and get $100 immediately.</h2>
            <p>For a limited time, new partners receive a $100 bonus credited to their account after their first qualifying conversion. Choose your path above and start earning today.</p>
            <a href="#top" class="btn btn-primary btn-lg">Choose Your Path <span class="arrow" aria-hidden="true">&#8599;</span></a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
