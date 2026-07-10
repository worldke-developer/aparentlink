<?php
/**
 * footer.php — Dark theme footer for aparentlink.com
 * Pure PHP include · Pure CSS · No JavaScript
 *
 * Optional: set $show_popup = true on pages that should show the timed popup.
 */
?>
</main>

<!-- Timed popup (pure CSS animation-delay, dismissible via checkbox) -->
<?php if (!empty($show_popup)): ?>
<input type="checkbox" id="popup-dismiss" aria-label="Dismiss popup">
<div class="popup-overlay" role="dialog" aria-label="Limited time offer">
    <div class="popup-box">
        <label for="popup-dismiss" class="popup-close" aria-label="Close popup"></label>
        <div class="popup-icon"><span class="gift">$</span></div>
        <h3>Limited Time Offer</h3>
        <p>Create an account with us and get $100 transferred immediately to your new partner account.</p>
        <div class="popup-amount">$100</div>
        <p>Bonus on first qualifying conversion</p>
        <a href="get-started.php" class="btn btn-primary btn-lg">Sign Up Now <span class="arrow" aria-hidden="true">&#8599;</span></a>
        <p class="popup-note">New partners only. Bonus credited after first approved conversion.</p>
    </div>
</div>
<?php endif; ?>

<!-- Back to top button -->
<a href="#top" class="back-to-top" aria-label="Back to top"></a>

<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="footer-grid">

            <!-- Brand + Contact -->
            <div class="footer-brand">
                <a href="index.php" class="brand" aria-label="aparentlink home">
                    <span class="brand-mark" aria-hidden="true">
                        <span class="m1"></span>
                        <span class="m2"></span>
                        <span class="m3"></span>
                    </span>
                    aparentlink
                </a>
                <p>The premium global affiliate platform connecting publishers, advertisers, and creators through transparent, performance-driven partnerships.</p>

                <!-- Contact details -->
                <div class="footer-contact">
                    <p class="fc-address">APARENT LINK INC<br>5430 48TH STREET SUITE 4<br>MASPETH, NY, 11378, USA</p>
                    <p class="fc-phone"><a href="tel:+17187373002">+1 718-737-3002</a></p>
                </div>

                <!-- Social media icons (text-based, CSS circles) -->
                <div class="social-row" aria-label="Social media">
                    <a href="https://www.facebook.com/aparentlink" class="social-circle" aria-label="Facebook" target="_blank" rel="noopener">FB</a>
                    <a href="https://www.instagram.com/aparentlink/" class="social-circle" aria-label="Instagram" target="_blank" rel="noopener">IG</a>
                    <a href="https://www.youtube.com/@Aparentlink" class="social-circle" aria-label="YouTube" target="_blank" rel="noopener">YT</a>
                    <a href="https://www.linkedin.com/" class="social-circle" aria-label="LinkedIn" target="_blank" rel="noopener">IN</a>
                    <a href="https://www.pinterest.com/" class="social-circle" aria-label="Pinterest" target="_blank" rel="noopener">PI</a>
                    <a href="https://www.twitter.com/" class="social-circle" aria-label="Twitter / X" target="_blank" rel="noopener">X</a>
                </div>
            </div>

            <!-- Company -->
            <div class="footer-col">
                <h5>Company</h5>
                <ul>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="blog.php">Blogs</a></li>
                </ul>
            </div>

            <!-- Platform -->
            <div class="footer-col">
                <h5>Platform</h5>
                <ul>
                    <li><a href="publishers.php">Publishers</a></li>
                    <li><a href="advertisers.php">Advertisers</a></li>
                    <li><a href="creators.php">Creators</a></li>
                    <li><a href="get-started.php">Get Started</a></li>
                    <li><a href="support.php">Support</a></li>
                </ul>
            </div>

            <!-- Legal + Newsletter -->
            <div class="newsletter footer-col">
                <h5>Stay Updated</h5>
                <p>Get partnership insights, payout updates, and industry benchmarks delivered monthly.</p>
                <form class="newsletter-form" aria-label="Newsletter signup">
                    <input type="email" name="email" placeholder="you@company.com" aria-label="Email address" required>
                    <button type="submit">Subscribe</button>
                </form>
                <div class="footer-legal-links">
                    <a href="privacy.php">Privacy Policy</a>
                    <a href="terms.php">Terms &amp; Conditions</a>
                </div>
            </div>

        </div>

        <div class="footer-bottom">
            <p>&copy; <?= date('Y') ?> aparentlink. All rights reserved.</p>
            <div class="legal-links">
                <a href="privacy.php">Privacy</a>
                <a href="terms.php">Terms</a>
                <a href="support.php">Support</a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
