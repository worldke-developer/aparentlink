<?php
$page_active = 'advertisers';
$page_title = 'For Advertisers';
$show_popup = true;
include 'header.php';
?>

<!-- ===================== PAGE HERO ===================== -->
<section class="page-hero">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <span class="sep">/</span>
            <span>Advertisers</span>
        </div>
        <span class="eyebrow">For Advertisers</span>
        <h1>Scale Your Brand with <span class="text-blue">High-Performing Partners.</span></h1>
        <p class="lead">Find and partner with the world's most effective content creators, influencers, and publishers.</p>
        <div class="hero-cta">
            <a href="advertiser-signup.php" class="btn btn-primary btn-lg">Launch Your Offer <span class="arrow" aria-hidden="true">&#8599;</span></a>
            <a href="#features" class="btn btn-outline btn-lg">View Capabilities</a>
        </div>
    </div>
</section>

<!-- ===================== CORPORATE STATS BAR ===================== -->
<section class="section-tight">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card reveal reveal-1">
                <div class="stat-value"><span class="accent">$</span>2.4B</div>
                <div class="stat-label">Annual partner-driven GMV</div>
            </div>
            <div class="stat-card reveal reveal-2">
                <div class="stat-value">5,000<span class="accent">+</span></div>
                <div class="stat-label">Vetted publishers in network</div>
            </div>
            <div class="stat-card reveal reveal-3">
                <div class="stat-value">120<span class="accent">+</span></div>
                <div class="stat-label">Countries with active partners</div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== BRAND BENEFITS ===================== -->
<section class="section" id="features">
    <div class="container">
        <div class="section-head reveal reveal-1">
            <span class="eyebrow">Advertiser Capabilities</span>
            <h2>Enterprise infrastructure, partner-grade simplicity.</h2>
            <p>Every capability built in-house and obsessively refined — so you can launch in days, not quarters, without compromising on control.</p>
        </div>

        <div class="features-grid">

            <div class="adv-card reveal reveal-1">
                <div class="icon-box"><span class="icon-shape chart"><span></span><span></span><span></span><span></span></span></div>
                <h3>Performance Tracking</h3>
                <p>Granular conversion analytics with first-touch, last-touch, and multi-touch attribution models — configurable per offer and per partner tier.</p>
            </div>

            <div class="adv-card reveal reveal-2">
                <div class="icon-box"><span class="icon-shape globe"></span></div>
                <h3>Global Reach</h3>
                <p>Tap into localized publishers in 120+ markets with regional compliance, multi-currency settlement, and 14-language support.</p>
            </div>

            <div class="adv-card reveal reveal-3">
                <div class="icon-box"><span class="icon-shape target"></span></div>
                <h3>Custom Attribution</h3>
                <p>Build any model — linear, time-decay, position-based — with sub-ID rules, smartlinks, and server-to-server postbacks.</p>
            </div>

            <div class="adv-card reveal reveal-1">
                <div class="icon-box"><span class="icon-shape bolt"></span></div>
                <h3>Conversion Analytics</h3>
                <p>Funnel-level visibility from impression to LTV. Cohort analysis, retention curves, and per-partner ROAS dashboards out of the box.</p>
            </div>

            <div class="adv-card reveal reveal-2">
                <div class="icon-box"><span class="icon-shape support"></span></div>
                <h3>Dedicated Account Manager</h3>
                <p>A senior strategist who knows your vertical, reviews your funnel weekly, and recruits private partners for your program.</p>
            </div>

            <div class="adv-card reveal reveal-3">
                <div class="icon-box"><span class="icon-shape shield"></span></div>
                <h3>Brand Safety</h3>
                <p>ML-driven monitoring ensures your brand appears only in approved contexts, alongside quality content and compliant placements.</p>
            </div>

        </div>
    </div>
</section>

<!-- ===================== 3 STEPS SECTION ===================== -->
<?php
$steps_title = 'Follow 3 Simple Steps To Start Advertising With Aparentlink';
$steps = [
    ['num' => '01', 'title' => 'Create Your Advertiser Account', 'desc' => 'Sign up, set up your brand profile, and get approved to access 5,000+ vetted publishers.'],
    ['num' => '02', 'title' => 'Launch Your Campaign', 'desc' => 'Set offers, budgets, and target audiences. Configure attribution rules and creative assets.'],
    ['num' => '03', 'title' => 'Track & Optimize', 'desc' => 'Monitor performance in real-time, optimize campaigns, and scale partnerships that deliver ROI.'],
];
include 'steps-section.php';
?>

<!-- ===================== SPLIT PANEL — Dashboard ===================== -->
<section class="section">
    <div class="container">
        <div class="split-panel reveal reveal-1">
            <div>
                <span class="eyebrow">Real-time control</span>
                <h2>See every dollar, every conversion, every partner.</h2>
                <p>Your advertiser dashboard surfaces the metrics that matter — CAC, ROAS, partner-level contribution — in real time, with drill-downs to the raw click.</p>
                <ul class="check-list">
                    <li>Live conversion stream with 60-second latency.</li>
                    <li>Per-partner P&amp;L with margin visibility.</li>
                    <li>Custom alerting on CAC, ROAS, and volume thresholds.</li>
                    <li>API &amp; warehouse exports for BI tools.</li>
                </ul>
                <a href="advertiser-signup.php" class="btn btn-primary btn-lg">Request a Demo <span class="arrow" aria-hidden="true">&#8599;</span></a>
            </div>
            <div>
                <div class="dashboard shadow-lg">
                    <div class="dashboard-bar">
                        <div class="dots" aria-hidden="true"><span></span><span></span><span></span></div>
                        <div class="url">app.aparentlink.com/advertiser/overview</div>
                    </div>
                    <div class="dashboard-body">
                        <aside class="dash-side">
                            <div class="dash-card">
                                <div class="dash-label">Active Offer</div>
                                <div class="dash-value">SaaS Pro · Q3</div>
                            </div>
                            <nav class="dash-nav" aria-label="Advertiser dashboard">
                                <a href="#" class="active"><span class="nav-dot"></span> Overview</a>
                                <a href="#"><span class="nav-dot"></span> Partners</a>
                                <a href="#"><span class="nav-dot"></span> Conversions</a>
                                <a href="#"><span class="nav-dot"></span> Payouts</a>
                            </nav>
                        </aside>

                        <div class="dash-main">
                            <div class="dash-stack">
                                <div class="dash-card">
                                    <div class="dash-label">Spend (MTD)</div>
                                    <div class="dash-value">$128,440</div>
                                    <div class="dash-trend">CAC: $14.20</div>
                                </div>
                                <div class="dash-card">
                                    <div class="dash-label">ROAS</div>
                                    <div class="dash-value">3.84&times;</div>
                                    <div class="dash-trend">&#9650; 0.4&times; vs last month</div>
                                </div>
                            </div>

                            <div class="dash-chart">
                                <div class="chart-head">
                                    <h4>Conversions · last 14 days</h4>
                                    <div class="ch-legend">
                                        <span>Approved</span>
                                        <span class="alt">Pending</span>
                                    </div>
                                </div>
                                <div class="chart-area bars-14b">
                                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                                </div>
                            </div>

                            <div class="dash-table">
                                <div class="dash-table-head">
                                    <div>Partner</div>
                                    <div>Conv.</div>
                                    <div>ROAS</div>
                                    <div>Status</div>
                                </div>
                                <div class="dash-table-row">
                                    <div>MediaHub · DE</div>
                                    <div>412</div>
                                    <div>4.2&times;</div>
                                    <div><span class="badge green">Active</span></div>
                                </div>
                                <div class="dash-table-row">
                                    <div>ReviewSite · US</div>
                                    <div>328</div>
                                    <div>3.6&times;</div>
                                    <div><span class="badge blue">Active</span></div>
                                </div>
                                <div class="dash-table-row">
                                    <div>EmailAds · BR</div>
                                    <div>246</div>
                                    <div>3.1&times;</div>
                                    <div><span class="badge blue">Active</span></div>
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
$blog_section_title = 'Advertiser Insights & Strategies';
$blog_section_subtitle = 'Strategies and insights to help you build high-performing affiliate programs.';
$blog_posts = [
    ['tag' => 'Advertiser Strategies', 'date' => 'Jul 8, 2025', 'readtime' => '7 min read', 'title' => 'Discover How Strategic Influencer Collaborations Can Amplify Your Brand Reach', 'excerpt' => 'How strategic partnerships with creators can exponentially expand your brand audience.', 'grad' => 'blog-grad-4'],
    ['tag' => 'Advertiser Strategies', 'date' => 'Jul 5, 2025', 'readtime' => '9 min read', 'title' => 'Strategies to Scale Your Ecommerce Business Through Affiliate Marketing', 'excerpt' => 'Proven tactics for using affiliate partnerships to scale your ecommerce revenue.', 'grad' => 'blog-grad-5'],
    ['tag' => 'Affiliate Marketing', 'date' => 'Jul 2, 2025', 'readtime' => '6 min read', 'title' => 'Grow Your Digital Marketing Business with Affiliate Partnerships', 'excerpt' => 'How to leverage affiliate marketing to grow your digital marketing business.', 'grad' => 'blog-grad-6'],
];
include 'blog-section.php';
?>

<!-- ===================== CLOSING CTA ===================== -->
<section class="section">
    <div class="container">
        <div class="footprint reveal reveal-1">
            <span class="eyebrow eyebrow-on-dark">Launch in 48 hours</span>
            <h2>Put your offer in front of 5,000+ publishers.</h2>
            <p>Book a 30-minute strategy session. We'll map your offer to the right partners, configure your attribution model, and have your program live by end of week.</p>
            <a href="advertiser-signup.php" class="btn btn-primary btn-lg">Launch Your Offer <span class="arrow" aria-hidden="true">&#8599;</span></a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
