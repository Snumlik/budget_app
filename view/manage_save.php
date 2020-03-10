<!DOCTYPE html>
<html lang="en-us">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/budget/common/css.php'; ?>

    <meta name="description" content="Budget Manage Saving Page">
    <title>Saving | Budget My Life</title>
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/budget/common/header.php'; ?>
    </header>
    <nav>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/budget/common/nav.php'; ?>
    </nav>
    <main>
        <div class="hero">
            <div>
                <div class="page_title">
                    <h1>Use Our Tools to Maximize Your Savings</h1>
                </div>
                <picture class="hero_image">
                    <source media="(max-width: 400px)" srcset="/budget/images/micheile-henderson-ZVprbBmT8QA-unsplash_400.jpg">
                    <source media="(max-width: 650px)" srcset="/budget/images/micheile-henderson-ZVprbBmT8QA-unsplash_650.jpg">
                    <img title="Make a Change"  src="/budget/images/micheile-henderson-ZVprbBmT8QA-unsplash_900.jpg" alt="Seedling and coins in a glass cup">
                </picture>
            </div>
        </div>

        <div class="error_message">
            <!-- Display an error message if one exists -->
            <?php
                if (isset($message)) {
                    echo $message;
                }
            ?>
        </div>

        <article class="trackers">
            <div>
                <div class="info">
                    <div class="info_header">
                        <h2>Savings Trackers</h2>
                    </div>
                </div>

                <!-- class box_1 for any saved trackers to be displayed -->
                <?php

                    if(isset($_SESSION['loggedin'])) {
                        echo "<div class='tracker_link'>
                                 <div><a href='/budget/saving/?action=addSave'>Start a New Tracker</a></div>
                              </div>";

                        $save = getSaveTrackers($_SESSION['userData']['userId'], $type);

                        if (sizeof($save) > 0) {
                            $saveTrackersData = buildSaveTrackers($save);
                            echo $saveTrackersData;
                        }
                    } else {
                        echo 
                        "<div class='info'>
                            <div>
                                <p>It looks like you haven't started any saving trackers yet.</p>
                                <p>Your trackers will appear here after logging in and creating them.</p>
                                <p>Click below to set up your user account to begin tracking or login to check your progress.</p>
                                <div class='abutton'><a href='/budget/accounts/?action=Login' title='My Account'>Track My Savings</a></div>
                            </div>
                        </div>";
                    }
                ?>
            </div>
        </article>

        <article class="tips">
            <div>
                <div class="info">
                    <!-- <div class="info_header">
                        <h2>Budgeting Tips & Tricks</h2>
                    </div>
                    <picture class="info_image">
                        <source media="(max-width: 400px)" srcset="/budget/images/budget_tips_350.jpg">
                        <img title="Budget charts"  src="/budget/images/budget_tips_550.jpg" alt="Budget charts">
                    </picture>
                    <div class="info_text">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    </div> -->
                </div>
            </div>
        </article>
        
    </main>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/budget/common/footer.php'; ?>
    </footer>
    <script src="/budget/js/hamburger.js"></script>
</body>

</html>
