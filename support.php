<?php
$page_active = 'support';
$page_title = 'Support';
$show_popup = true;
include 'header.php';
?>

<!-- ===================== PAGE HERO ===================== -->
<section class="page-hero">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <span class="sep">/</span>
            <span>Support</span>
        </div>
        <span class="eyebrow">Support</span>
        <h1>How Can We <span class="text-blue">Help You?</span></h1>
        <p class="lead">Find answers to common questions or reach out to our support team.</p>
    </div>
</section>

<!-- ===================== SUPPORT GRID ===================== -->
<section class="section">
    <div class="container">
        <div class="support-grid">

            <!-- LEFT — FAQ -->
            <div class="faq-compact">
                <div class="section-head left reveal reveal-1">
                    <span class="eyebrow">FAQ</span>
                    <h2>Frequently Asked Questions</h2>
                    <p>Browse common questions from publishers, advertisers, and creators.</p>
                </div>

                <div class="faq-list">

                    <div class="faq-item">
                        <input type="checkbox" id="sfaq1" class="faq-checkbox">
                        <label for="sfaq1" class="faq-question">
                            How do I start with Aparentlink?
                            <span class="faq-icon" aria-hidden="true"></span>
                        </label>
                        <div class="faq-answer">
                            <div class="faq-answer-inner">
                                Visit our Get Started page, choose your role (Publisher, Advertiser, or Creator), and complete the sign-up form. Most accounts are verified within 24 hours, and you'll have access to high-converting offers immediately after approval.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <input type="checkbox" id="sfaq2" class="faq-checkbox">
                        <label for="sfaq2" class="faq-question">
                            When are payouts released?
                            <span class="faq-icon" aria-hidden="true"></span>
                        </label>
                        <div class="faq-answer">
                            <div class="faq-answer-inner">
                                Payouts are released every Tuesday for commissions earned in the prior Monday-to-Sunday period. The minimum payout threshold is just $50, and you can choose from 12 payout methods including PayPal, Wise, USDC, and wire transfer.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <input type="checkbox" id="sfaq3" class="faq-checkbox">
                        <label for="sfaq3" class="faq-question">
                            What content types can I monetize?
                            <span class="faq-icon" aria-hidden="true"></span>
                        </label>
                        <div class="faq-answer">
                            <div class="faq-answer-inner">
                                You can monetize virtually any content type — blogs, review sites, comparison pages, YouTube videos, TikTok content, Instagram posts, podcasts, newsletters, mobile apps, and more. Our tracking links work across all platforms.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <input type="checkbox" id="sfaq4" class="faq-checkbox">
                        <label for="sfaq4" class="faq-question">
                            Is my information safe with Aparentlink?
                            <span class="faq-icon" aria-hidden="true"></span>
                        </label>
                        <div class="faq-answer">
                            <div class="faq-answer-inner">
                                Absolutely. We are SOC 2 Type II certified and use TLS 1.3 encryption for all data in transit, AES-256 encryption for data at rest, and strict role-based access controls. We never sell your personal data.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <input type="checkbox" id="sfaq5" class="faq-checkbox">
                        <label for="sfaq5" class="faq-question">
                            How do publishers earn money on Aparentlink?
                            <span class="faq-icon" aria-hidden="true"></span>
                        </label>
                        <div class="faq-answer">
                            <div class="faq-answer-inner">
                                Publishers earn commissions by promoting advertiser offers through unique tracking links. When a user clicks your link and completes a qualifying action, you earn a commission. Rates range from $5 to $120 CPA, with revenue-share options up to 40%.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <input type="checkbox" id="sfaq6" class="faq-checkbox">
                        <label for="sfaq6" class="faq-question">
                            Is there any cost to join Aparentlink?
                            <span class="faq-icon" aria-hidden="true"></span>
                        </label>
                        <div class="faq-answer">
                            <div class="faq-answer-inner">
                                No — joining aparentlink is completely free for publishers and creators. There are no setup fees, no monthly subscriptions, and no hidden costs. Advertisers pay only for qualifying conversions.
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Quick Links -->
                <div class="quick-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="publishers.php">Publisher Program</a></li>
                        <li><a href="advertisers.php">Advertiser Program</a></li>
                        <li><a href="creators.php">Creator Program</a></li>
                        <li><a href="get-started.php">Get Started</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="privacy.php">Privacy Policy</a></li>
                        <li><a href="terms.php">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
            </div>

            <!-- RIGHT — Contact Form -->
            <div class="support-form-wrap reveal reveal-2">
                <h3>Send Us a Message</h3>
                <p class="sf-sub">Can't find what you're looking for? Send us a message and we'll respond within 4 business hours.</p>

                <form action="#" method="post" class="auth-form" aria-label="Support contact form">
                    <div class="form-group">
                        <label for="s-name">Full name</label>
                        <input type="text" id="s-name" name="name" class="form-input" placeholder="Jane Doe" required>
                    </div>
                    <div class="form-group">
                        <label for="s-email">Email address</label>
                        <input type="email" id="s-email" name="email" class="form-input" placeholder="jane@company.com" required>
                    </div>
                    <div class="form-group">
                        <label for="s-subject">Subject</label>
                        <input type="text" id="s-subject" name="subject" class="form-input" placeholder="How can we help?" required>
                    </div>
                    <div class="form-group">
                        <label for="s-message">Message</label>
                        <textarea id="s-message" name="message" class="form-textarea" placeholder="Describe your question or issue in detail..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Send Message <span class="arrow" aria-hidden="true">&#8599;</span></button>
                </form>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
