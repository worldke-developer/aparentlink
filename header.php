<?php
/**
 * header.php — Floating pill navigation for aparentlink.com
 * Pure PHP include · Pure CSS · No JavaScript
 *
 * Expects the including page to optionally set:
 *   $page_active  — one of: home, publishers, advertisers, creators,
 *                              about, contact, blog, support, get-started
 *   $page_title   — page <title> suffix
 *   $show_popup   — set to true on pages that should show the timed signup popup
 * If not set, defaults to '' (no active state).
 */
if (!isset($page_active)) { $page_active = ''; }
if (!isset($show_popup)) { $show_popup = false; }

// Company dropdown now: About, Contact, Blogs
$company_active = in_array($page_active, ['about', 'contact', 'blog'], true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="aparentlink — Grow your global affiliate revenue with smarter partnerships. Premium performance marketing for publishers, advertisers, and creators.">
    <title><?= isset($page_title) ? htmlspecialchars($page_title) . ' · aparentlink' : 'aparentlink · Smarter Affiliate Partnerships' ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style.css">
</head>
<body id="top">

<!-- Dismissible notification bar (pure CSS checkbox hack) -->
<input type="checkbox" id="notify-dismiss" aria-label="Dismiss notification">
<div class="notify-bar" role="region" aria-label="Promotional offer">
    <span class="notify-text">
        <strong>&#127881; LIMITED TIME OFFER:</strong> Create an account with us and get $100 transferred immediately.
        <a href="get-started.php">SIGN UP NOW!</a>
    </span>
    <label for="notify-dismiss" class="notify-close" aria-label="Close notification"></label>
</div>

<header class="site-header" role="banner">
    <nav class="nav-pill" aria-label="Primary">

        <!-- Brand (CSS-only logo mark) -->
        <a href="index.php" class="brand" aria-label="aparentlink home">
            <span class="brand-mark" aria-hidden="true">
                <span class="m1"></span>
                <span class="m2"></span>
                <span class="m3"></span>
            </span>
            aparentlink
        </a>

        <!-- Desktop navigation -->
        <ul class="nav-list" role="menubar">
            <li class="nav-item" role="none">
                <a href="index.php" class="nav-link <?= $page_active === 'home' ? 'is-active' : '' ?>" role="menuitem">HOME</a>
            </li>
            <li class="nav-item" role="none">
                <a href="publishers.php" class="nav-link <?= $page_active === 'publishers' ? 'is-active' : '' ?>" role="menuitem">PUBLISHERS</a>
            </li>
            <li class="nav-item" role="none">
                <a href="advertisers.php" class="nav-link <?= $page_active === 'advertisers' ? 'is-active' : '' ?>" role="menuitem">ADVERTISERS</a>
            </li>
            <li class="nav-item" role="none">
                <a href="creators.php" class="nav-link <?= $page_active === 'creators' ? 'is-active' : '' ?>" role="menuitem">CREATORS</a>
            </li>
            <li class="nav-item has-dropdown" role="none">
                <a href="#" class="nav-link <?= $company_active ? 'is-active' : '' ?>" role="menuitem" aria-haspopup="true" aria-expanded="false">
                    COMPANY <span class="chevron" aria-hidden="true"></span>
                </a>
                <div class="dropdown" role="menu" aria-label="Company">
                    <a href="about.php" role="menuitem"><span class="dot" aria-hidden="true"></span> About</a>
                    <a href="contact.php" role="menuitem"><span class="dot" aria-hidden="true"></span> Contact</a>
                    <a href="blog.php" role="menuitem"><span class="dot" aria-hidden="true"></span> Blogs</a>
                </div>
            </li>
        </ul>

        <!-- Header CTA -->
        <div class="nav-cta">
            <a href="get-started.php" class="btn btn-primary">Start Earning <span class="arrow" aria-hidden="true">&#8599;</span></a>
        </div>

        <!-- Mobile navigation (Pure CSS checkbox hack) -->
        <div class="mobile-nav">
            <input type="checkbox" id="nav-toggle" aria-label="Toggle navigation menu">
            <label for="nav-toggle" class="mobile-toggle" aria-hidden="true">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <div class="mobile-menu" role="dialog" aria-label="Mobile navigation">
                <a href="index.php" class="m-link <?= $page_active === 'home' ? 'is-active' : '' ?>">HOME</a>
                <a href="publishers.php" class="m-link <?= $page_active === 'publishers' ? 'is-active' : '' ?>">PUBLISHERS</a>
                <a href="advertisers.php" class="m-link <?= $page_active === 'advertisers' ? 'is-active' : '' ?>">ADVERTISERS</a>
                <a href="creators.php" class="m-link <?= $page_active === 'creators' ? 'is-active' : '' ?>">CREATORS</a>
                <a href="about.php" class="m-link <?= $page_active === 'about' ? 'is-active' : '' ?>">About</a>
                <a href="contact.php" class="m-link <?= $page_active === 'contact' ? 'is-active' : '' ?>">Contact</a>
                <a href="blog.php" class="m-link <?= $page_active === 'blog' ? 'is-active' : '' ?>">Blogs</a>
                <a href="support.php" class="m-link <?= $page_active === 'support' ? 'is-active' : '' ?>">Support</a>
                <a href="get-started.php" class="btn btn-primary">Start Earning <span class="arrow" aria-hidden="true">&#8599;</span></a>
            </div>
        </div>

    </nav>
</header>

<main id="main-content">
