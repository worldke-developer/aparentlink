<?php
$page_active = 'terms';
$page_title = 'Terms & Conditions';
include 'header.php';
?>

<!-- ===================== PAGE HERO ===================== -->
<section class="page-hero">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <span class="sep">/</span>
            <span>Terms &amp; Conditions</span>
        </div>
        <span class="eyebrow">Legal</span>
        <h1>Terms &amp; Conditions</h1>
        <p class="lead">The agreement between you and aparentlink. Last updated: <?= date('F j, Y') ?>.</p>
    </div>
</section>

<!-- ===================== LEGAL CONTENT ===================== -->
<section class="section">
    <div class="container">
        <div class="legal-layout">

            <!-- TOC -->
            <aside class="legal-toc" aria-label="Table of contents">
                <h4>On this page</h4>
                <a href="#acceptance">1. Acceptance of Terms</a>
                <a href="#definitions">2. Definitions</a>
                <a href="#accounts">3. Accounts &amp; Eligibility</a>
                <a href="#publisher-obligations">4. Publisher Obligations</a>
                <a href="#advertiser-obligations">5. Advertiser Obligations</a>
                <a href="#prohibited">6. Prohibited Conduct</a>
                <a href="#payouts">7. Payouts &amp; Commissions</a>
                <a href="#fraud">8. Fraud &amp; Enforcement</a>
                <a href="#ip">9. Intellectual Property</a>
                <a href="#confidentiality">10. Confidentiality</a>
                <a href="#disclaimer">11. Disclaimer</a>
                <a href="#liability">12. Limitation of Liability</a>
                <a href="#indemnification">13. Indemnification</a>
                <a href="#termination">14. Termination</a>
                <a href="#governing-law">15. Governing Law</a>
                <a href="#changes">16. Changes to Terms</a>
                <a href="#contact">17. Contact</a>
            </aside>

            <!-- Content -->
            <div class="legal-content">

                <h2 id="acceptance">1. Acceptance of Terms</h2>
                <p>These Terms &amp; Conditions ("Terms") govern your use of the aparentlink website, dashboard, and services (collectively, the "Services") operated by aparentlink Pte Ltd ("aparentlink", "we", "us", or "our"). By accessing or using the Services, you agree to be bound by these Terms. If you do not agree, you may not access or use the Services.</p>
                <p>These Terms form a legally binding agreement between you and aparentlink. If you are using the Services on behalf of a company, you represent that you have authority to bind that company to these Terms.</p>

                <div class="legal-card">
                    <h3>Quick summary</h3>
                    <p>Be honest. Don't commit fraud. Respect the brands you promote. Pay partners what you owe them on time. We'll do the same for you. If anyone breaks the rules, we reserve the right to suspend accounts, claw back fraudulent earnings, and pursue legal remedies.</p>
                </div>

                <h2 id="definitions">2. Definitions</h2>
                <ul class="bullets">
                    <li><strong>"Platform"</strong> means the aparentlink affiliate tracking and reporting system.</li>
                    <li><strong>"Publisher"</strong> means a partner who promotes advertiser offers in exchange for commissions.</li>
                    <li><strong>"Advertiser"</strong> means a partner who lists offers on the Platform and pays commissions for results.</li>
                    <li><strong>"Creator"</strong> means a content publisher who monetizes their audience through brand collaborations.</li>
                    <li><strong>"Conversion"</strong> means a qualifying action (sale, lead, install) tracked by the Platform.</li>
                    <li><strong>"Commission"</strong> means the amount payable for a qualifying Conversion.</li>
                    <li><strong>"Payout"</strong> means a disbursement of earned Commissions to a Publisher or Creator.</li>
                </ul>

                <h2 id="accounts">3. Accounts &amp; Eligibility</h2>
                <p>To use the Services, you must:</p>
                <ul class="bullets">
                    <li>Be at least 16 years of age (or the age of digital consent in your jurisdiction).</li>
                    <li>Have the legal capacity to enter into a binding agreement.</li>
                    <li>Provide accurate, complete, and current registration information.</li>
                    <li>Maintain the security of your account credentials and accept responsibility for all activity under your account.</li>
                    <li>Complete identity verification (KYC) before receiving payouts.</li>
                </ul>
                <p>We reserve the right to reject or close any account at our discretion, particularly if we detect fraudulent activity, misrepresentation, or violation of these Terms.</p>

                <h2 id="publisher-obligations">4. Publisher Obligations</h2>
                <p>If you are a Publisher or Creator, you agree to:</p>
                <ul class="bullets">
                    <li>Promote offers only through the channels, geos, and methods approved by the relevant Advertiser.</li>
                    <li>Use only the tracking links provided by the Platform and not circumvent tracking in any way.</li>
                    <li>Disclose affiliate relationships clearly in your content, as required by FTC guidelines and equivalent local regulations.</li>
                    <li>Comply with all applicable advertising and consumer protection laws.</li>
                    <li>Not use incentivized traffic, bot traffic, brand bidding, or any traffic source that violates Advertiser terms.</li>
                    <li>Provide accurate tax documentation and report earnings as required by your local tax authority.</li>
                </ul>

                <h2 id="advertiser-obligations">5. Advertiser Obligations</h2>
                <p>If you are an Advertiser, you agree to:</p>
                <ul class="bullets">
                    <li>Provide accurate offer details, including payout rates, attribution windows, and approved traffic sources.</li>
                    <li>Honor all qualifying Conversions and pay Commissions through the Platform within the agreed terms.</li>
                    <li>Maintain a working postback or pixel integration and notify us of any changes that affect tracking.</li>
                    <li>Not unreasonably reject Conversions; all rejections must include a documented reason.</li>
                    <li>Comply with all applicable consumer protection, data privacy, and advertising laws.</li>
                </ul>

                <h2 id="prohibited">6. Prohibited Conduct</h2>
                <p>You agree not to engage in any of the following prohibited activities:</p>
                <ul class="bullets">
                    <li>Generating fraudulent, incentivized, bot, or non-human traffic.</li>
                    <li>Brand bidding, typosquatting, or trademark infringement on Advertiser brands.</li>
                    <li>Cookie stuffing, forced clicks, or any unauthorized tracking method.</li>
                    <li>Circumventing the Platform's tracking, attribution, or payout systems.</li>
                    <li>Using the Services to launder money, evade taxes, or facilitate any illegal activity.</li>
                    <li>Scraping, crawling, or otherwise extracting data from the Platform without authorization.</li>
                    <li>Attempting to interfere with the security, integrity, or availability of the Services.</li>
                    <li>Creating multiple accounts to circumvent suspensions or fraud detection.</li>
                </ul>

                <h2 id="payouts">7. Payouts &amp; Commissions</h2>
                <p>Payouts to Publishers and Creators are processed weekly, every Tuesday, for Commissions earned in the prior Monday-to-Sunday period, subject to the following:</p>
                <ul class="bullets">
                    <li>Minimum Payout threshold: $50 USD (or equivalent in your selected currency).</li>
                    <li>Commissions are subject to a 14-day clearing period to allow for Advertiser review and fraud screening.</li>
                    <li>Payouts are made in your selected method and currency; conversion fees may apply for non-USD methods.</li>
                    <li>You are responsible for any taxes owed on earnings; aparentlink does not withhold taxes except where required by law.</li>
                    <li>Chargebacks, refunds, and fraudulent Conversions will result in Commission clawbacks.</li>
                </ul>

                <div class="legal-card">
                    <h3>Payout schedule</h3>
                    <p>Commissions earned Monday–Sunday → cleared for 14 days → paid the third Tuesday after the earning period. Example: earnings from the week of June 1 are paid on Tuesday, June 23.</p>
                </div>

                <h2 id="fraud">8. Fraud &amp; Enforcement</h2>
                <p>We take fraud seriously. If we detect fraudulent activity, we may — at our discretion and without prior notice — take any of the following actions:</p>
                <ul class="bullets">
                    <li>Reject specific Conversions and reverse associated Commissions.</li>
                    <li>Suspend or permanently close your account.</li>
                    <li>Claw back previously paid Commissions attributable to fraud.</li>
                    <li>Withhold pending Payouts pending investigation.</li>
                    <li>Share fraud findings with other networks and Advertisers to prevent repeat offending.</li>
                    <li>Pursue civil or criminal legal action in cases of significant or organized fraud.</li>
                </ul>
                <p>You may appeal any enforcement action by contacting compliance@aparentlink.com within 14 days of notification. Appeals are reviewed by a senior compliance officer not involved in the original decision.</p>

                <h2 id="ip">9. Intellectual Property</h2>
                <p>The Platform, including its design, code, branding, and documentation, is the property of aparentlink and protected by intellectual property laws. Advertisers retain all rights to their offers, creatives, and trademarks. Publishers retain all rights to their original content.</p>
                <p>By submitting content to the Platform, you grant aparentlink a non-exclusive, royalty-free license to use, reproduce, and display that content solely for the purpose of operating the Services.</p>

                <h2 id="confidentiality">10. Confidentiality</h2>
                <p>Each party agrees to keep confidential any non-public information received from the other party, including payout rates, conversion data, and platform metrics. Confidential information may be shared only with employees and contractors who need it to perform their duties, and who are bound by equivalent confidentiality obligations.</p>
                <p>This obligation survives termination of your account for a period of 3 years.</p>

                <h2 id="disclaimer">11. Disclaimer</h2>
                <p>The Services are provided "as is" and "as available", without warranties of any kind, express or implied. We do not warrant that the Services will be uninterrupted, error-free, or secure, or that any particular result will be achieved. You use the Services at your own risk.</p>

                <h2 id="liability">12. Limitation of Liability</h2>
                <p>To the maximum extent permitted by law, aparentlink shall not be liable for any indirect, incidental, special, consequential, or punitive damages, including loss of profits, data, or goodwill, arising out of or related to the Services.</p>
                <p>Our total aggregate liability for any claim arising out of or related to these Terms shall not exceed the total Commissions we paid you in the 12 months preceding the event giving rise to the claim.</p>

                <h2 id="indemnification">13. Indemnification</h2>
                <p>You agree to indemnify and hold harmless aparentlink, its officers, directors, employees, and agents from any claims, damages, losses, or expenses (including reasonable legal fees) arising out of your use of the Services, your violation of these Terms, or your infringement of any third-party rights.</p>

                <h2 id="termination">14. Termination</h2>
                <p>You may close your account at any time by contacting support. We may suspend or terminate your account immediately and without notice if you violate these Terms, engage in fraudulent activity, or if we determine that continued association poses legal or reputational risk to aparentlink.</p>
                <p>Upon termination: (a) all tracking links cease to function; (b) pending Commissions are subject to the standard clearing period; (c) any Commissions attributable to fraud will be clawed back; (d) you must cease using the Platform and remove any aparentlink branding or creatives from your properties.</p>

                <h2 id="governing-law">15. Governing Law</h2>
                <p>These Terms are governed by the laws of the Republic of Singapore, without regard to its conflict of laws principles. Any dispute arising out of or related to these Terms shall be submitted to the exclusive jurisdiction of the courts of Singapore, except that aparentlink may seek injunctive relief in any court of competent jurisdiction to protect its intellectual property or confidential information.</p>

                <h2 id="changes">16. Changes to Terms</h2>
                <p>We may modify these Terms at any time. Material changes will be communicated via email and a prominent notice on our website at least 30 days before taking effect. Continued use of the Services after the effective date constitutes acceptance of the revised Terms.</p>

                <h2 id="contact">17. Contact</h2>
                <p>If you have questions about these Terms, please contact us:</p>
                <div class="legal-card">
                    <h3>Legal &amp; Compliance</h3>
                    <p>legal@aparentlink.com<br>aparentlink Pte Ltd<br>1 Raffles Place · #20-61<br>Singapore 048616</p>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
