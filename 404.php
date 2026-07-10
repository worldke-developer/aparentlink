<?php
$page_active = '';
$page_title = 'Page Not Found';
include 'header.php';
?>

<!-- ===================== 404 ERROR ===================== -->
<section class="error-page">
    <div class="container">
        <div class="error-inner">

            <!-- CSS illustration: floating circles echoing the brand mark -->
            <div class="error-illustration" aria-hidden="true">
                <div class="e-circle e1"></div>
                <div class="e-circle e2"></div>
                <div class="e-circle e3"></div>
            </div>

            <div class="error-code">404</div>
            <h1>Page Not Found</h1>
            <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>

            <a href="index.php" class="btn btn-primary btn-lg">Return Home <span class="arrow" aria-hidden="true">&#8599;</span></a>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
