<?php
/**
 * steps-section.php — Reusable 3-steps section partial
 * Pure PHP include · Pure CSS · No JavaScript
 *
 * Usage:
 *   $steps_title = 'Follow 3 Simple Steps To Start Earning With Aparentlink';
 *   $steps = [
 *     ['num' => '01', 'title' => 'Create Your Account', 'desc' => '...'],
 *     ['num' => '02', 'title' => 'Choose Campaigns', 'desc' => '...'],
 *     ['num' => '03', 'title' => 'Earn & Track Revenue', 'desc' => '...'],
 *   ];
 *   include 'steps-section.php';
 */
if (!isset($steps_title)) { $steps_title = 'Follow 3 Simple Steps'; }
if (!isset($steps)) {
    $steps = [
        ['num' => '01', 'title' => 'Step One', 'desc' => 'Description here.'],
        ['num' => '02', 'title' => 'Step Two', 'desc' => 'Description here.'],
        ['num' => '03', 'title' => 'Step Three', 'desc' => 'Description here.'],
    ];
}
?>
<section class="steps-section bg-soft">
    <div class="container">
        <div class="section-head reveal reveal-1">
            <span class="eyebrow">How It Works</span>
            <h2><?= htmlspecialchars($steps_title) ?></h2>
        </div>

        <div class="steps-grid">
            <?php foreach ($steps as $step): ?>
                <div class="step-card">
                    <div class="step-num"><?= htmlspecialchars($step['num']) ?></div>
                    <h3><?= htmlspecialchars($step['title']) ?></h3>
                    <p><?= htmlspecialchars($step['desc']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
