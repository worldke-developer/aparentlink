<?php
$page_active = 'creators';
$page_title = 'For Creators';
$show_popup = true;
include 'header.php';
?>

<!-- ===================== PAGE HERO ===================== -->
<section class="page-hero">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <span class="sep">/</span>
            <span>Creators</span>
        </div>
        <span class="eyebrow">For Creators</span>
        <h1>Your Audience, <span class="text-blue">Your Income.</span></h1>
        <p class="lead">Join a curated marketplace where you can connect with global brands and monetize your influence on your own terms.</p>
        <div class="hero-cta">
            <a href="creator-signup.php" class="btn btn-primary btn-lg">Join as Creator <span class="arrow" aria-hidden="true">&#8599;</span></a>
            <a href="#marketplace" class="btn btn-outline btn-lg">Browse Marketplace</a>
        </div>
    </div>
</section>

<!-- ===================== CONTENT MONETIZATION (split) ===================== -->
<section class="section">
    <div class="container">
        <div class="split-panel reveal reveal-1">
            <div>
                <span class="eyebrow">Content Monetization</span>
                <h2>Your content, your terms, your revenue.</h2>
                <p>Stop chasing brand deals in your DMs. aparentlink surfaces campaigns matched to your audience, your voice, and your platforms — and pays you every Tuesday for the conversions you drive.</p>
                <ul class="check-list">
                    <li>Match with brands aligned to your niche and audience.</li>
                    <li>Generate unique tracking links for every platform — YouTube, TikTok, newsletter, podcast.</li>
                    <li>Track clicks, conversions, and revenue per piece of content.</li>
                    <li>Get paid weekly — no 60-day brand invoice cycles.</li>
                    <li>Keep 100% creative control. Always.</li>
                </ul>
                <a href="creator-signup.php" class="btn btn-primary btn-lg">Apply to Join <span class="arrow" aria-hidden="true">&#8599;</span></a>
            </div>
            <div>
                <div class="dashboard shadow-lg">
                    <div class="dashboard-bar">
                        <div class="dots" aria-hidden="true"><span></span><span></span><span></span></div>
                        <div class="url">app.aparentlink.com/creator/overview</div>
                    </div>
                    <div class="dashboard-body">
                        <aside class="dash-side">
                            <div class="dash-card">
                                <div class="dash-label">Creator Tier</div>
                                <div class="dash-value">Gold</div>
                            </div>
                            <nav class="dash-nav" aria-label="Creator dashboard">
                                <a href="#" class="active"><span class="nav-dot"></span> Overview</a>
                                <a href="#"><span class="nav-dot"></span> Marketplace</a>
                                <a href="#"><span class="nav-dot"></span> Invitations</a>
                                <a href="#"><span class="nav-dot"></span> Tracking Links</a>
                                <a href="#"><span class="nav-dot"></span> Analytics</a>
                                <a href="#"><span class="nav-dot"></span> Earnings</a>
                            </nav>
                        </aside>
                        <div class="dash-main">
                            <div class="dash-stack">
                                <div class="dash-card">
                                    <div class="dash-label">This Month</div>
                                    <div class="dash-value">$18,420</div>
                                    <div class="dash-trend">&#9650; 42% vs last month</div>
                                </div>
                                <div class="dash-card">
                                    <div class="dash-label">Active Campaigns</div>
                                    <div class="dash-value">14</div>
                                    <div class="dash-trend">3 new invitations</div>
                                </div>
                            </div>
                            <div class="dash-chart">
                                <div class="chart-head">
                                    <h4>Earnings · last 14 days</h4>
                                    <div class="ch-legend">
                                        <span>Earnings</span>
                                    </div>
                                </div>
                                <div class="chart-area bars-14c">
                                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CREATOR CAPABILITIES GRID ===================== -->
<section class="section bg-soft" id="marketplace">
    <div class="container">
        <div class="section-head reveal reveal-1">
            <span class="eyebrow">Creator Toolkit</span>
            <h2>Six tools built for content creators.</h2>
            <p>From discovering aligned brand campaigns to tracking every conversion across every platform — the entire creator workflow in one elegant dashboard.</p>
        </div>

        <div class="features-grid">

            <div class="feature-card reveal reveal-1">
                <div class="icon-box"><span class="icon-shape layers"><span></span><span></span><span></span></span></div>
                <h3>Creator Marketplace</h3>
                <p>Browse 1,200+ active brand campaigns filtered by your niche, audience size, and platforms. Apply in one click.</p>
            </div>

            <div class="feature-card reveal reveal-2">
                <div class="icon-box"><span class="icon-shape handshake"></span></div>
                <h3>Campaign Invitations</h3>
                <p>Get matched with brands actively seeking creators like you — invitations land in your inbox pre-negotiated.</p>
            </div>

            <div class="feature-card reveal reveal-3">
                <div class="icon-box"><span class="icon-shape link"></span></div>
                <h3>Custom Tracking Links</h3>
                <p>Generate unique links per platform, per post, per story. See exactly which content drives the most revenue.</p>
            </div>

            <div class="feature-card reveal reveal-1">
                <div class="icon-box"><span class="icon-shape wallet"></span></div>
                <h3>Revenue Dashboard</h3>
                <p>Real-time earnings across every campaign, platform, and post — with weekly payouts to your preferred method.</p>
            </div>

            <div class="feature-card reveal reveal-2">
                <div class="icon-box"><span class="icon-shape chart"><span></span><span></span><span></span><span></span></span></div>
                <h3>Influencer Analytics</h3>
                <p>Audience demographics, engagement quality, and conversion attribution — all in one exportable report.</p>
            </div>

            <div class="feature-card reveal reveal-3">
                <div class="icon-box"><span class="icon-shape handshake"></span></div>
                <h3>Brand Collaborations</h3>
                <p>Build long-term partnerships. Brands can offer exclusive rates, extended campaigns, and renewal bonuses.</p>
            </div>

        </div>
    </div>
</section>

<!-- ===================== 3 STEPS SECTION ===================== -->
<?php
$steps_title = 'Follow 3 Simple Steps To Start Creating With Aparentlink';
$steps = [
    ['num' => '01', 'title' => 'Create Your Creator Account', 'desc' => 'Sign up with your channel or social handle. Get verified and access the creator marketplace.'],
    ['num' => '02', 'title' => 'Discover Campaigns', 'desc' => 'Find brand collaborations that match your audience, niche, and content style. Apply in one click.'],
    ['num' => '03', 'title' => 'Create & Earn', 'desc' => 'Produce content, track performance in real-time, and earn commissions. Get paid every Tuesday.'],
];
include 'steps-section.php';
?>

<!-- ===================== CAMPAIGN MARKETPLACE MOCKUP ===================== -->
<section class="section">
    <div class="container">
        <div class="section-head reveal reveal-1">
            <span class="eyebrow">Marketplace Preview</span>
            <h2>Brand campaigns, matched to your audience.</h2>
            <p>A realistic preview of how campaigns appear in your marketplace. Every card shows payout, target geo, and required platforms — apply with one click.</p>
        </div>

        <div class="dashboard reveal reveal-2">
            <div class="dashboard-bar">
                <div class="dots" aria-hidden="true"><span></span><span></span><span></span></div>
                <div class="url">app.aparentlink.com/creator/marketplace</div>
            </div>
            <div class="dashboard-body block">
                <div class="market-grid">

                    <div class="market-card">
                        <div class="mc-head">
                            <span class="mc-tag t-blue">SaaS</span>
                            <span class="mc-geo">USD &middot; Global</span>
                        </div>
                        <div>
                            <h4>Productivity App Launch</h4>
                            <p class="mc-desc">$32 CPA &middot; 30-day cookie &middot; YouTube, Newsletter</p>
                        </div>
                        <div class="mc-foot">
                            <span class="mc-rate"><strong>$32</strong> / conversion</span>
                            <a href="#" class="btn btn-primary btn-sm">Apply</a>
                        </div>
                    </div>

                    <div class="market-card">
                        <div class="mc-head">
                            <span class="mc-tag t-green">Fintech</span>
                            <span class="mc-geo">USD &middot; US, CA, UK</span>
                        </div>
                        <div>
                            <h4>Investing App &middot; Q3</h4>
                            <p class="mc-desc">$48 CPA &middot; 14-day cookie &middot; YouTube, TikTok, IG</p>
                        </div>
                        <div class="mc-foot">
                            <span class="mc-rate"><strong>$48</strong> / conversion</span>
                            <a href="#" class="btn btn-primary btn-sm">Apply</a>
                        </div>
                    </div>

                    <div class="market-card">
                        <div class="mc-head">
                            <span class="mc-tag t-red">Beauty</span>
                            <span class="mc-geo">USD &middot; Global</span>
                        </div>
                        <div>
                            <h4>Skincare Line Launch</h4>
                            <p class="mc-desc">22% rev-share &middot; 30-day cookie &middot; IG, TikTok</p>
                        </div>
                        <div class="mc-foot">
                            <span class="mc-rate"><strong>22%</strong> rev-share</span>
                            <a href="#" class="btn btn-primary btn-sm">Apply</a>
                        </div>
                    </div>

                    <div class="market-card">
                        <div class="mc-head">
                            <span class="mc-tag t-soft">Edu</span>
                            <span class="mc-geo">USD &middot; LATAM, ES</span>
                        </div>
                        <div>
                            <h4>Online Course Platform</h4>
                            <p class="mc-desc">$24 CPA &middot; 60-day cookie &middot; YouTube, Newsletter</p>
                        </div>
                        <div class="mc-foot">
                            <span class="mc-rate"><strong>$24</strong> / conversion</span>
                            <a href="#" class="btn btn-primary btn-sm">Apply</a>
                        </div>
                    </div>

                    <div class="market-card">
                        <div class="mc-head">
                            <span class="mc-tag t-blue">Travel</span>
                            <span class="mc-geo">EUR &middot; EU</span>
                        </div>
                        <div>
                            <h4>Travel Booking Platform</h4>
                            <p class="mc-desc">&euro;18 CPA &middot; 30-day cookie &middot; All platforms</p>
                        </div>
                        <div class="mc-foot">
                            <span class="mc-rate"><strong>&euro;18</strong> / conversion</span>
                            <a href="#" class="btn btn-primary btn-sm">Apply</a>
                        </div>
                    </div>

                    <div class="market-card">
                        <div class="mc-head">
                            <span class="mc-tag t-green">Gaming</span>
                            <span class="mc-geo">USD &middot; Global</span>
                        </div>
                        <div>
                            <h4>Mobile Game Release</h4>
                            <p class="mc-desc">$1.20 CPI &middot; 7-day cookie &middot; TikTok, YouTube</p>
                        </div>
                        <div class="mc-foot">
                            <span class="mc-rate"><strong>$1.20</strong> / install</span>
                            <a href="#" class="btn btn-primary btn-sm">Apply</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== BLOG SECTION ===================== -->
<?php
$blog_section_title = 'Creator Tips & Success Stories';
$blog_section_subtitle = 'Tips, strategies, and success stories to help you grow your creator income.';
$blog_posts = [
    ['tag' => 'Creator Insights', 'date' => 'Jul 8, 2025', 'readtime' => '7 min read', 'title' => 'Discover How Strategic Influencer Collaborations Can Amplify Your Brand Reach', 'excerpt' => 'How creators can leverage strategic brand collaborations to grow their audience and income.', 'grad' => 'blog-grad-1'],
    ['tag' => 'Creator Insights', 'date' => 'Jul 5, 2025', 'readtime' => '6 min read', 'title' => 'How Changing Consumer Expectations Are Reshaping Affiliate Marketing', 'excerpt' => 'What creators need to know about shifting consumer behavior and how to adapt their content.', 'grad' => 'blog-grad-3'],
    ['tag' => 'Creator Tips', 'date' => 'Jul 2, 2025', 'readtime' => '8 min read', 'title' => 'Choosing the Best Web Development Frameworks for Affiliate Sites', 'excerpt' => 'Technical guide for creators building their own affiliate sites and landing pages.', 'grad' => 'blog-grad-5'],
];
include 'blog-section.php';
?>

<!-- ===================== CLOSING CTA ===================== -->
<section class="section">
    <div class="container">
        <div class="footprint reveal reveal-1">
            <span class="eyebrow eyebrow-on-dark">Join 5,000+ creators</span>
            <h2>Your audience deserves to be paid what it's worth.</h2>
            <p>Apply in 90 seconds. Get matched with brand campaigns in 24 hours. See your first payout next Tuesday.</p>
            <a href="creator-signup.php" class="btn btn-primary btn-lg">Join as Creator <span class="arrow" aria-hidden="true">&#8599;</span></a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
