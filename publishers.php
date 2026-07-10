<?php
$page_active = 'publishers';
$page_title = 'For Publishers';
$show_popup = true;
include 'header.php';
?>

<!-- ===================== PAGE HERO ===================== -->
<section class="page-hero">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <span class="sep">/</span>
            <span>Publishers</span>
        </div>
        <span class="eyebrow">For Publishers</span>
        <h1>Maximize Your Content's <span class="text-blue">Earning Potential.</span></h1>
        <p class="lead">Discover high-converting offers and access real-time analytics to optimize every campaign.</p>
        <div class="hero-cta">
            <a href="publisher-signup.php" class="btn btn-primary btn-lg">Apply to Join <span class="arrow" aria-hidden="true">&#8599;</span></a>
            <a href="#benefits" class="btn btn-outline btn-lg">View Benefits</a>
        </div>
    </div>
</section>

<!-- ===================== BRANDS MARQUEE ===================== -->
<?php include 'marquee.php'; ?>

<!-- ===================== BENEFITS GRID ===================== -->
<section class="section" id="benefits">
    <div class="container">
        <div class="section-head reveal reveal-1">
            <span class="eyebrow">Publisher Benefits</span>
            <h2>Built to maximize what you earn.</h2>
            <p>Six commitments that translate directly into higher EPC, lower churn, and faster cash flow.</p>
        </div>

        <div class="benefits-grid">

            <div class="card reveal reveal-1">
                <div class="icon-box"><span class="icon-shape coin"></span></div>
                <h3>Commission Rates</h3>
                <p>Industry-leading CPA, CPL, and revenue-share rates — negotiated directly with advertisers, not padded by middlemen.</p>
                <ul class="card-icon-list">
                    <li>Up to 40% rev-share</li>
                    <li>$5–$120 CPA offers</li>
                    <li>Performance-based bumps</li>
                </ul>
            </div>

            <div class="card reveal reveal-2">
                <div class="icon-box"><span class="icon-shape wallet"></span></div>
                <h3>Weekly Payouts</h3>
                <p>Every Tuesday, on the dot. No 30-day holds, no minimums over $50, and 12 payout methods to choose from.</p>
                <ul class="card-icon-list">
                    <li>Paid every Tuesday</li>
                    <li>$50 minimum threshold</li>
                    <li>USDC, Wise, PayPal, wire</li>
                </ul>
            </div>

            <div class="card reveal reveal-3">
                <div class="icon-box"><span class="icon-shape chart"><span></span><span></span><span></span><span></span></span></div>
                <h3>Deep Analytics</h3>
                <p>Sub-minute reporting on EPC, CR, revenue, and click quality — sliced by geo, source, creative, and sub-ID.</p>
                <ul class="card-icon-list">
                    <li>Sub-ID tracking</li>
                    <li>Custom report builder</li>
                    <li>API &amp; webhook exports</li>
                </ul>
            </div>

            <div class="card reveal reveal-1">
                <div class="icon-box"><span class="icon-shape bolt"></span></div>
                <h3>Real-Time Tracking</h3>
                <p>Server-to-server attribution with cookieless fallback. Survives ITP, ad blockers, and cross-device journeys.</p>
                <ul class="card-icon-list">
                    <li>S2S postback tracking</li>
                    <li>Cross-device attribution</li>
                    <li>Click-level referrer data</li>
                </ul>
            </div>

            <div class="card reveal reveal-2">
                <div class="icon-box"><span class="icon-shape support"></span></div>
                <h3>Dedicated Support</h3>
                <p>A named account manager, 24/7 in-app chat, and a 4-hour SLA on every priority issue. Real humans, no bots.</p>
                <ul class="card-icon-list">
                    <li>Personal account manager</li>
                    <li>24/7 support</li>
                    <li>4-hour priority SLA</li>
                </ul>
            </div>

            <div class="card reveal reveal-3">
                <div class="icon-box"><span class="icon-shape target"></span></div>
                <h3>Performance Bonuses</h3>
                <p>Tier-based monthly bonuses reward consistency — earn up to 12% on top of base commissions for hitting volume targets.</p>
                <ul class="card-icon-list">
                    <li>Performance-based bumps</li>
                    <li>$5–$120 CPA offers</li>
                    <li>Exclusive private offers</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- ===================== 3 STEPS SECTION ===================== -->
<?php
$steps_title = 'Follow 3 Simple Steps To Start Earning With Aparentlink';
$steps = [
    ['num' => '01', 'title' => 'Create Your Account', 'desc' => 'Sign up as a publisher, get verified, and access high-converting offers from global brands.'],
    ['num' => '02', 'title' => 'Choose Campaigns', 'desc' => 'Browse advertiser programs, grab unique tracking links, and place them on your site or social platforms.'],
    ['num' => '03', 'title' => 'Earn & Track Revenue', 'desc' => 'Watch clicks, conversions, and earnings update in real-time. Get paid automatically every Tuesday.'],
];
include 'steps-section.php';
?>

<!-- ===================== SPLIT PANEL (How it works) ===================== -->
<section class="section">
    <div class="container">
        <div class="split-panel reveal reveal-1">
            <div>
                <span class="eyebrow">How it works</span>
                <h2>From signup to first payout in 7 days.</h2>
                <p>Most publishers are approved within 24 hours and see their first conversion within the first week. No technical integration required — drop a tracking link and start driving traffic.</p>
                <ul class="check-list">
                    <li>Submit a 90-second application with your traffic sources.</li>
                    <li>Get matched with offers that fit your audience in under 24 hours.</li>
                    <li>Generate tracking links, deep-links, and Smartlinks instantly.</li>
                    <li>Drive traffic — conversions land in your dashboard within 60 seconds.</li>
                    <li>Get paid every Tuesday via your preferred payout method.</li>
                </ul>
                <a href="publisher-signup.php" class="btn btn-primary btn-lg">Apply Now <span class="arrow" aria-hidden="true">&#8599;</span></a>
            </div>
            <div>
                <div class="dashboard shadow-md">
                    <div class="dashboard-bar">
                        <div class="dots" aria-hidden="true"><span></span><span></span><span></span></div>
                        <div class="url">Onboarding Checklist</div>
                    </div>
                    <div class="dashboard-body block">
                        <div class="checklist">
                            <div class="checklist-step">
                                <span class="step-num">1</span>
                                <div>
                                    <div class="step-title">Application submitted</div>
                                    <div class="step-meta">Completed in 1m 24s</div>
                                </div>
                            </div>
                            <div class="checklist-step">
                                <span class="step-num">2</span>
                                <div>
                                    <div class="step-title">Account verified</div>
                                    <div class="step-meta">Approved in 18 hours</div>
                                </div>
                            </div>
                            <div class="checklist-step">
                                <span class="step-num">3</span>
                                <div>
                                    <div class="step-title">First tracking link generated</div>
                                    <div class="step-meta">VPN Pro · Global — live</div>
                                </div>
                            </div>
                            <div class="checklist-step active">
                                <span class="step-num">4</span>
                                <div>
                                    <div class="step-title">Drive traffic &amp; earn</div>
                                    <div class="step-meta">First payout: next Tuesday</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== BLOG SECTION ===================== -->
<?php
$blog_section_title = 'Publisher Insights & Tips';
$blog_section_subtitle = 'Resources, strategies, and tips to help you earn more as a publisher.';
$blog_posts = [
    ['tag' => 'Publisher Tips', 'date' => 'Jul 8, 2025', 'readtime' => '6 min read', 'title' => 'Maximizing Income As An Affiliate Publisher: Tips and Tricks', 'excerpt' => 'Practical techniques to boost your EPC and scale your affiliate revenue sustainably.', 'grad' => 'blog-grad-1'],
    ['tag' => 'Affiliate Marketing', 'date' => 'Jul 5, 2025', 'readtime' => '8 min read', 'title' => 'Best Tools and Resources for Success in Affiliate Marketing', 'excerpt' => 'The essential toolkit every publisher needs to streamline campaigns and maximize conversions.', 'grad' => 'blog-grad-2'],
    ['tag' => 'Publisher Tips', 'date' => 'Jul 2, 2025', 'readtime' => '7 min read', 'title' => 'Affiliate Marketing Plan for Success: A Step-by-Step Guide', 'excerpt' => 'A complete roadmap from choosing offers to scaling your affiliate income to full-time levels.', 'grad' => 'blog-grad-3'],
];
include 'blog-section.php';
?>

<!-- ===================== CLOSING CTA ===================== -->
<section class="section">
    <div class="container">
        <div class="footprint reveal reveal-1">
            <span class="eyebrow eyebrow-on-dark">Get started</span>
            <h2>Ready to maximize your earning potential?</h2>
            <p>Join 5,000+ publishers earning weekly payouts with aparentlink. Apply in 90 seconds and start earning by next Tuesday.</p>
            <a href="publisher-signup.php" class="btn btn-primary btn-lg">Create Publisher Account <span class="arrow" aria-hidden="true">&#8599;</span></a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
