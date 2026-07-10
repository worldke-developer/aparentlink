<?php
$page_active = 'blog';
$page_title = 'Blog';
$show_popup = true;

// All blog posts data
$all_posts = [
    ['tag' => 'Affiliate Marketing', 'date' => 'Jul 8, 2025', 'readtime' => '6 min read', 'title' => 'Top Strategies for Quick Success in Affiliate Marketing', 'excerpt' => 'Discover the proven tactics that top affiliates use to accelerate revenue growth from day one.', 'grad' => 'blog-grad-1'],
    ['tag' => 'Affiliate Marketing', 'date' => 'Jul 5, 2025', 'readtime' => '8 min read', 'title' => 'Avoid Common Affiliate Marketing Errors That Cost You Revenue', 'excerpt' => 'Learn the most costly mistakes affiliates make and how to avoid them for maximum earnings.', 'grad' => 'blog-grad-2'],
    ['tag' => 'Advertiser Strategies', 'date' => 'Jul 2, 2025', 'readtime' => '7 min read', 'title' => 'Discover How Strategic Influencer Collaborations Can Amplify Your Brand Reach', 'excerpt' => 'How strategic partnerships with creators can exponentially expand your brand audience.', 'grad' => 'blog-grad-3'],
    ['tag' => 'Affiliate Marketing', 'date' => 'Jun 28, 2025', 'readtime' => '9 min read', 'title' => 'Best Tools and Resources for Success in Affiliate Marketing', 'excerpt' => 'The essential toolkit every affiliate needs to streamline campaigns and maximize conversions.', 'grad' => 'blog-grad-4'],
    ['tag' => 'Affiliate Marketing', 'date' => 'Jun 25, 2025', 'readtime' => '10 min read', 'title' => 'Affiliate Marketing Plan for Success: A Step-by-Step Guide', 'excerpt' => 'A complete roadmap from choosing offers to scaling your affiliate income to full-time levels.', 'grad' => 'blog-grad-5'],
    ['tag' => 'Creator Insights', 'date' => 'Jun 22, 2025', 'readtime' => '7 min read', 'title' => 'How Changing Consumer Expectations Are Reshaping Affiliate Marketing', 'excerpt' => 'What creators and publishers need to know about shifting consumer behavior and how to adapt.', 'grad' => 'blog-grad-6'],
    ['tag' => 'Affiliate Marketing', 'date' => 'Jun 18, 2025', 'readtime' => '6 min read', 'title' => 'Grow Your Digital Marketing Business with Affiliate Partnerships', 'excerpt' => 'How to leverage affiliate marketing to grow your digital marketing business sustainably.', 'grad' => 'blog-grad-1'],
    ['tag' => 'Advertiser Strategies', 'date' => 'Jun 15, 2025', 'readtime' => '8 min read', 'title' => 'Strategies to Scale Your Ecommerce Business Through Affiliate Marketing', 'excerpt' => 'Proven tactics for using affiliate partnerships to scale your ecommerce revenue.', 'grad' => 'blog-grad-2'],
    ['tag' => 'Publisher Tips', 'date' => 'Jun 12, 2025', 'readtime' => '7 min read', 'title' => 'Choosing the Best Web Development Frameworks for Affiliate Sites', 'excerpt' => 'Technical guide for publishers building their own affiliate sites and landing pages.', 'grad' => 'blog-grad-3'],
];

include 'header.php';
?>

<!-- ===================== PAGE HERO ===================== -->
<section class="page-hero">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <span class="sep">/</span>
            <span>Blog</span>
        </div>
        <span class="eyebrow">Blog</span>
        <h1>Insights &amp; Updates from <span class="text-blue">aparentlink</span></h1>
        <p class="lead">Affiliate marketing news, tips, and strategies to help publishers, advertisers, and creators grow their revenue and partnerships.</p>
    </div>
</section>

<!-- ===================== BLOG LISTING ===================== -->
<section class="section">
    <div class="container">
        <div class="blog-layout">

            <!-- Main blog grid -->
            <div>
                <div class="blog-grid">
                    <?php foreach ($all_posts as $post): ?>
                        <a href="#" class="blog-card">
                            <div class="blog-card-img <?= $post['grad'] ?>">
                                <span class="blog-tag"><?= $post['tag'] ?></span>
                            </div>
                            <div class="blog-card-body">
                                <div class="blog-card-meta">
                                    <span><?= $post['date'] ?></span>
                                    <span class="meta-dot"></span>
                                    <span><?= $post['readtime'] ?></span>
                                </div>
                                <h3><?= $post['title'] ?></h3>
                                <p><?= $post['excerpt'] ?></p>
                                <span class="blog-readmore">Read More <span class="arrow" aria-hidden="true">&#8594;</span></span>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>

                <!-- Pagination -->
                <nav class="pagination" aria-label="Blog pagination">
                    <a href="#" class="nav" aria-label="Previous page">&#8592; Previous</a>
                    <a href="#" class="active" aria-label="Page 1">1</a>
                    <a href="#" aria-label="Page 2">2</a>
                    <a href="#" aria-label="Page 3">3</a>
                    <a href="#" class="nav" aria-label="Next page">Next &#8594;</a>
                </nav>
            </div>

            <!-- Sidebar -->
            <aside class="blog-sidebar">

                <!-- Popular Posts -->
                <div class="sidebar-block">
                    <h4>Popular Posts</h4>
                    <?php for ($i = 0; $i < 4; $i++):
                        $p = $all_posts[$i]; ?>
                        <a href="#" class="popular-post">
                            <div class="pp-img <?= $p['grad'] ?>"></div>
                            <div class="pp-body">
                                <h5><?= $p['title'] ?></h5>
                                <span><?= $p['date'] ?> &middot; <?= $p['readtime'] ?></span>
                            </div>
                        </a>
                    <?php endfor; ?>
                </div>

                <!-- Categories -->
                <div class="sidebar-block">
                    <h4>Categories</h4>
                    <nav class="cat-list" aria-label="Blog categories">
                        <a href="#"><span>Affiliate Marketing</span><span class="cat-count">12</span></a>
                        <a href="#"><span>Publisher Tips</span><span class="cat-count">8</span></a>
                        <a href="#"><span>Advertiser Strategies</span><span class="cat-count">7</span></a>
                        <a href="#"><span>Creator Insights</span><span class="cat-count">6</span></a>
                    </nav>
                </div>

            </aside>

        </div>
    </div>
</section>

<!-- ===================== NEWSLETTER CTA ===================== -->
<section class="section bg-soft">
    <div class="container">
        <div class="footprint reveal reveal-1">
            <span class="eyebrow eyebrow-on-dark">Stay in the loop</span>
            <h2>Never miss a new post.</h2>
            <p>Get our latest affiliate marketing insights, strategies, and platform updates delivered straight to your inbox.</p>
            <a href="get-started.php" class="btn btn-primary btn-lg">Join aparentlink <span class="arrow" aria-hidden="true">&#8599;</span></a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
