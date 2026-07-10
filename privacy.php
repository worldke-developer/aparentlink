<?php
$page_active = 'privacy';
$page_title = 'Privacy Policy';
include 'header.php';
?>

<!-- ===================== PAGE HERO ===================== -->
<section class="page-hero">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <span class="sep">/</span>
            <span>Privacy Policy</span>
        </div>
        <span class="eyebrow">Legal</span>
        <h1>Privacy Policy</h1>
        <p class="lead">How aparentlink collects, uses, and protects your data. Last updated: <?= date('F j, Y') ?>.</p>
    </div>
</section>

<!-- ===================== LEGAL CONTENT ===================== -->
<section class="section">
    <div class="container">
        <div class="legal-layout">

            <!-- TOC -->
            <aside class="legal-toc" aria-label="Table of contents">
                <h4>On this page</h4>
                <a href="#overview">1. Overview</a>
                <a href="#data-we-collect">2. Data We Collect</a>
                <a href="#how-we-use">3. How We Use Data</a>
                <a href="#sharing">4. Sharing &amp; Disclosure</a>
                <a href="#cookies">5. Cookies &amp; Tracking</a>
                <a href="#retention">6. Data Retention</a>
                <a href="#security">7. Security</a>
                <a href="#rights">8. Your Rights</a>
                <a href="#international">9. International Transfers</a>
                <a href="#children">10. Children's Privacy</a>
                <a href="#changes">11. Changes to This Policy</a>
                <a href="#contact">12. Contact Us</a>
            </aside>

            <!-- Content -->
            <div class="legal-content">

                <h2 id="overview">1. Overview</h2>
                <p>aparentlink ("we", "us", "our") operates a global performance marketing platform that connects publishers, advertisers, and creators. This Privacy Policy explains what information we collect, how we use it, and the choices you have regarding your data.</p>
                <p>By accessing or using our website, dashboard, or services (collectively, the "Services"), you agree to the practices described in this policy. If you do not agree, please do not use the Services. This policy applies to all visitors, registered partners, and prospective customers.</p>

                <div class="legal-card">
                    <h3>In short</h3>
                    <p>We collect the minimum data needed to operate a transparent, reliable affiliate platform — account information, traffic and conversion events, and payout details. We never sell your personal data, and we never share it with third parties for cross-context behavioral advertising.</p>
                </div>

                <h2 id="data-we-collect">2. Data We Collect</h2>
                <p>We collect three categories of information, each tied to a specific business purpose:</p>

                <h3>2.1 Information you provide</h3>
                <ul class="bullets">
                    <li>Account registration: name, email, company name, website or platform URLs, and country of residence.</li>
                    <li>Payout information: preferred payout method, tax identification number, and bank or wallet details (processed by our PCI-DSS compliant payment partners).</li>
                    <li>Communication data: messages you send via our contact form, in-app chat, or email.</li>
                    <li>Campaign details (advertisers only): offer names, payout rates, attribution rules, and creative assets.</li>
                </ul>

                <h3>2.2 Information collected automatically</h3>
                <ul class="bullets">
                    <li>Tracking events: clicks, impressions, conversions, and revenue events associated with your tracking links.</li>
                    <li>Device and connection data: IP address (truncated for privacy), browser type, operating system, and screen resolution.</li>
                    <li>Usage data: pages visited within the dashboard, features used, and timestamps.</li>
                    <li>Trust &amp; safety signals: device fingerprint, behavioral patterns, velocity metrics, and reputation scores.</li>
                </ul>

                <h3>2.3 Information from third parties</h3>
                <ul class="bullets">
                    <li>Advertiser-provided conversion data (postback events, order values).</li>
                    <li>Public social platform metrics for creators who connect their accounts.</li>
                    <li>Identity verification results from our KYC/AML partners.</li>
                </ul>

                <h2 id="how-we-use">3. How We Use Data</h2>
                <p>We use the information we collect for the following specific, legitimate business purposes:</p>
                <ul class="bullets">
                    <li>Operating the affiliate platform — tracking, attribution, reporting, and weekly payouts.</li>
                    <li>Detecting, preventing, and investigating fraud, abuse, and policy violations.</li>
                    <li>Verifying partner identity and complying with KYC/AML regulations.</li>
                    <li>Providing customer support and account management.</li>
                    <li>Sending service-related notifications (payout confirmations, fraud alerts, policy updates).</li>
                    <li>Improving our Services through aggregated analytics and product research.</li>
                    <li>Complying with legal obligations and responding to lawful requests from authorities.</li>
                </ul>

                <h2 id="sharing">4. Sharing &amp; Disclosure</h2>
                <p>We share your information only in the limited circumstances described below. We never sell your personal data.</p>
                <ul class="bullets">
                    <li><strong>Between partners:</strong> Advertisers see aggregated conversion data from publishers; publishers see campaign performance from advertisers. Both sides see identical numbers — that's our transparency commitment.</li>
                    <li><strong>Service providers:</strong> We share data with subprocessors who help us operate (cloud hosting, payment processors, email delivery, analytics). All are bound by data processing agreements.</li>
                    <li><strong>Legal compliance:</strong> We may disclose data when required by law, court order, or to protect our rights, property, or safety.</li>
                    <li><strong>Business transfers:</strong> In the event of a merger, acquisition, or asset sale, data may be transferred subject to confidentiality obligations.</li>
                </ul>

                <h2 id="cookies">5. Cookies &amp; Tracking</h2>
                <p>We use cookies and similar tracking technologies for the following purposes:</p>
                <ul class="bullets">
                    <li><strong>Essential cookies:</strong> Required for authentication, session management, and security. Cannot be disabled.</li>
                    <li><strong>Functional cookies:</strong> Remember preferences such as dashboard filters and timezone. Optional.</li>
                    <li><strong>Analytics cookies:</strong> Help us understand how partners use the platform so we can improve it. Optional.</li>
                    <li><strong>Affiliate tracking cookies:</strong> Set when a user clicks a partner's tracking link, to attribute conversions. 7–60 days depending on the offer.</li>
                </ul>
                <p>You can manage cookie preferences in your dashboard settings or through your browser. Disabling non-essential cookies will not affect your ability to use the core platform.</p>

                <div class="legal-card">
                    <h3>Tracking for trust &amp; safety</h3>
                    <p>We use cookieless, server-side tracking (device fingerprints and behavioral signals) to ensure platform integrity and protect partners. These signals are processed in aggregate and never used for cross-context behavioral advertising.</p>
                </div>

                <h2 id="retention">6. Data Retention</h2>
                <p>We retain your information for as long as your account is active or as needed to provide the Services. After account closure:</p>
                <ul class="bullets">
                    <li>Account data is retained for 90 days, then permanently deleted.</li>
                    <li>Tracking event logs are retained for 7 years for audit and tax compliance, then automatically purged.</li>
                    <li>Trust &amp; safety signals are retained for 24 months to protect the network.</li>
                    <li>Payout records are retained for 7 years to comply with financial regulations.</li>
                </ul>

                <h2 id="security">7. Security</h2>
                <p>We implement industry-standard security measures to protect your data, including:</p>
                <ul class="bullets">
                    <li>TLS 1.3 encryption for all data in transit.</li>
                    <li>AES-256 encryption for sensitive data at rest.</li>
                    <li>SOC 2 Type II certified infrastructure.</li>
                    <li>Strict role-based access controls and quarterly access reviews.</li>
                    <li>Continuous security and intrusion monitoring.</li>
                    <li>Annual third-party security audits and penetration testing.</li>
                </ul>
                <p>Despite these measures, no system is 100% secure. If a breach occurs that poses a risk to your rights, we will notify affected users and the relevant supervisory authority within 72 hours, as required by GDPR.</p>

                <h2 id="rights">8. Your Rights</h2>
                <p>Depending on your jurisdiction, you may have the following rights regarding your personal data:</p>
                <ul class="bullets">
                    <li><strong>Access:</strong> Request a copy of the personal data we hold about you.</li>
                    <li><strong>Rectification:</strong> Request correction of inaccurate or incomplete data.</li>
                    <li><strong>Erasure:</strong> Request deletion of your data, subject to legal retention obligations.</li>
                    <li><strong>Restriction:</strong> Request that we limit processing of your data in certain circumstances.</li>
                    <li><strong>Portability:</strong> Receive your data in a structured, machine-readable format.</li>
                    <li><strong>Objection:</strong> Object to processing based on legitimate interests.</li>
                    <li><strong>Withdrawal of consent:</strong> Withdraw consent for processing based on consent at any time.</li>
                </ul>
                <p>To exercise any of these rights, contact us at privacy@aparentlink.com. We will respond within 30 days.</p>

                <h2 id="international">9. International Transfers</h2>
                <p>aparentlink operates globally, and your data may be processed in countries other than your country of residence. When transferring data outside the European Economic Area, the United Kingdom, or Switzerland, we rely on Standard Contractual Clauses approved by the European Commission, adequacy decisions, or other lawful transfer mechanisms.</p>

                <h2 id="children">10. Children's Privacy</h2>
                <p>Our Services are not intended for individuals under the age of 16. We do not knowingly collect personal information from children. If you believe we have collected information from a minor, please contact us immediately and we will delete it.</p>

                <h2 id="changes">11. Changes to This Policy</h2>
                <p>We may update this Privacy Policy from time to time. Material changes will be communicated via email and a prominent notice on our website at least 30 days before taking effect. The "Last updated" date at the top of this page reflects the most recent revision.</p>

                <h2 id="contact">12. Contact Us</h2>
                <p>If you have questions about this Privacy Policy or our data practices, please contact our Data Protection Officer:</p>
                <div class="legal-card">
                    <h3>Data Protection Officer</h3>
                    <p>privacy@aparentlink.com<br>aparentlink Pte Ltd<br>1 Raffles Place · #20-61<br>Singapore 048616</p>
                </div>
                <p>For EU/UK residents, you also have the right to lodge a complaint with your local data protection authority.</p>

            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
