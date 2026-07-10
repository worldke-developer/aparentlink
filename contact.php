<?php
$page_active = 'contact';
$page_title = 'Contact';
include 'header.php';
?>

<!-- ===================== PAGE HERO ===================== -->
<section class="page-hero">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <span class="sep">/</span>
            <span>Contact</span>
        </div>
        <span class="eyebrow">Get in touch</span>
        <h1>Let's talk about your <span class="text-blue">partnership goals.</span></h1>
        <p class="lead">Whether you're a publisher ready to monetize, an advertiser ready to scale, or a creator looking for the right brand campaigns — we'll match you with the right team within 24 hours.</p>
    </div>
</section>

<!-- ===================== CONTACT GRID ===================== -->
<section class="section">
    <div class="container">
        <div class="contact-grid">

            <!-- LEFT — Contact info -->
            <div class="contact-info reveal reveal-1">
                <div>
                    <span class="eyebrow">Reach us directly</span>
                    <h2 class="contact-heading">Talk to a real human.</h2>
                    <p class="contact-sub">No ticket queues, no chatbots. Every inquiry lands with a named account manager who responds within 4 business hours.</p>
                </div>

                <div class="contact-card">
                    <div class="ci-icon"><span class="ci-mail" aria-hidden="true"></span></div>
                    <div>
                        <h4>Email</h4>
                        <p>hello@aparentlink.com<br>partners@aparentlink.com</p>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="ci-icon"><span class="ci-pin" aria-hidden="true"></span></div>
                    <div>
                        <h4>Headquarters</h4>
                        <p>1 Raffles Place · Singapore 048616<br>Regional offices in Lisbon &amp; Toronto</p>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="ci-icon"><span class="ci-phone" aria-hidden="true"></span></div>
                    <div>
                        <h4>Support Hours</h4>
                        <p>24/7 in-app chat · 14 languages<br>4-hour SLA on every priority ticket</p>
                    </div>
                </div>

                <div class="contact-card contact-card-highlight">
                    <div class="ci-icon ci-icon-highlight"><span class="icon-shape support ci-support"></span></div>
                    <div>
                        <h4>Already a partner?</h4>
                        <p>Log in to your dashboard for priority support, live chat, and your dedicated account manager's direct contact details.</p>
                    </div>
                </div>
            </div>

            <!-- RIGHT — Form -->
            <div class="contact-form reveal reveal-2">
                <h3 class="form-heading">Send us a message</h3>
                <p class="form-sub">Fill out the form below and the right team will reach out within 4 business hours.</p>

                <form action="#" method="post" aria-label="Contact form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full name</label>
                            <input type="text" id="name" name="name" class="form-input" placeholder="Jane Doe" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" id="email" name="email" class="form-input" placeholder="jane@company.com" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="company">Company</label>
                            <input type="text" id="company" name="company" class="form-input" placeholder="Acme Inc.">
                        </div>
                        <div class="form-group">
                            <label for="role">I am a…</label>
                            <select id="role" name="role" class="form-select">
                                <option value="">Select…</option>
                                <option value="publisher">Publisher</option>
                                <option value="advertiser">Advertiser</option>
                                <option value="creator">Creator</option>
                                <option value="press">Press / Media</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" class="form-textarea" placeholder="Tell us about your traffic sources, audience, or campaign goals…" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Send Message <span class="arrow" aria-hidden="true">↗</span>
                    </button>

                    <p class="form-disclaimer">
                        By submitting, you agree to our <a href="privacy.php" class="link-blue">Privacy Policy</a> and <a href="terms.php" class="link-blue">Terms</a>. We'll never share your information.
                    </p>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- ===================== OFFICES ===================== -->
<section class="section bg-soft">
    <div class="container">
        <div class="section-head reveal reveal-1">
            <span class="eyebrow">Our Offices</span>
            <h2>Three offices. One global team.</h2>
            <p>Remote-first in 14 countries, with hub offices in Singapore, Lisbon, and Toronto.</p>
        </div>

        <div class="grid grid-3">
            <div class="card reveal reveal-1 text-center">
                <div class="icon-box icon-box-centered"><span class="icon-shape pin"></span></div>
                <h3>Singapore</h3>
                <p class="office-address">1 Raffles Place · #20-61<br>Singapore 048616<br><strong class="office-tag">Headquarters</strong></p>
            </div>
            <div class="card reveal reveal-2 text-center">
                <div class="icon-box icon-box-centered"><span class="icon-shape pin"></span></div>
                <h3>Lisbon</h3>
                <p class="office-address">Avenida da Liberdade 110<br>1269-046 Lisboa, Portugal<br><strong class="office-tag">EMEA Hub</strong></p>
            </div>
            <div class="card reveal reveal-3 text-center">
                <div class="icon-box icon-box-centered"><span class="icon-shape pin"></span></div>
                <h3>Toronto</h3>
                <p class="office-address">120 Adelaide Street West<br>Suite 2500, Toronto ON M5H 1T1<br><strong class="office-tag">Americas Hub</strong></p>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
