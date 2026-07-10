<?php
/**
 * blog-section.php — Reusable blog section partial
 * Pure PHP include · Pure CSS · No JavaScript
 *
 * Usage: <?php
 *   $blog_section_title = 'Publisher Insights & Tips';
 *   $blog_section_subtitle = '...';
 *   include 'blog-section.php';
 * ?>
 *
 * Pass $blog_posts as an array of [tag, date, readtime, title, excerpt, grad] to customize.
 */
if (!isset($blog_section_title)) { $blog_section_title = 'Popular Blog Posts'; }
if (!isset($blog_section_subtitle)) { $blog_section_subtitle = 'Insights, strategies, and tips to help you grow.'; }
if (!isset($blog_posts)) {
    $blog_posts = [
        ['tag' => 'Affiliate Marketing', 'date' => 'Jul 8, 2025', 'readtime' => '6 min read', 'title' => 'Top Strategies for Quick Success in Affiliate Marketing', 'excerpt' => 'Discover the proven tactics that top affiliates use to accelerate revenue growth from day one.', 'grad' => 'blog-grad-1'],
        ['tag' => 'Publisher Tips', 'date' => 'Jul 5, 2025', 'readtime' => '8 min read', 'title' => 'Avoid Common Affiliate Marketing Errors That Cost You Revenue', 'excerpt' => 'Learn the most costly mistakes affiliates make and how to avoid them for maximum earnings.', 'grad' => 'blog-grad-2'],
        ['tag' => 'Advertiser Strategies', 'date' => 'Jul 2, 2025', 'readtime' => '7 min read', 'title' => 'Discover How Strategic Influencer Collaborations Can Amplify Your Brand Reach', 'excerpt' => 'How strategic partnerships with creators can exponentially expand your brand audience.', 'grad' => 'blog-grad-3'],
    ];
}
?>
<section class="section bg-soft">
    <div class="container">
        <div class="section-head reveal reveal-1">
            <span class="eyebrow">From Our Blog</span>
            <h2><?= htmlspecialchars($blog_section_title) ?></h2>
            <p><?= htmlspecialchars($blog_section_subtitle) ?></p>
        </div>

        <div class="blog-grid">
            <?php foreach ($blog_posts as $post): ?>
                <a href="blog.php" class="blog-card">
                    <div class="blog-card-img <?= $post['grad'] ?>">
                        <span class="blog-tag"><?= htmlspecialchars($post['tag']) ?></span>
                    </div>
                    <div class="blog-card-body">
                        <div class="blog-card-meta">
                            <span><?= htmlspecialchars($post['date']) ?></span>
                            <span class="meta-dot"></span>
                            <span><?= htmlspecialchars($post['readtime']) ?></span>
                        </div>
                        <h3><?= htmlspecialchars($post['title']) ?></h3>
                        <p><?= htmlspecialchars($post['excerpt']) ?></p>
                        <span class="blog-readmore">Read More <span class="arrow" aria-hidden="true">&#8594;</span></span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <div class="text-center cta-mt">
            <a href="blog.php" class="btn btn-outline btn-lg">View All Posts <span class="arrow" aria-hidden="true">&#8594;</span></a>
        </div>
    </div>
</section>
