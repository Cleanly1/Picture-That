<?php

declare(strict_types=1); ?>
<img class="background-image" src="assets/images/abstract-2.jpeg" alt="picture of a blue orange">
<?php require __DIR__ . '/views/header.php'; ?>

<?php if (!isset($_SESSION['user'])) {
    redirect('/');
} ?>

<div class="pwd-change-container">
    <section class="pwd-change">
        <h2>Change password</h2>
        <form class="form-section" action="/app/users/account.php" method="post">
            <label for="oldpassword">Current password</label>
            <input type="password" name="oldpassword" id="oldpassword">
            <label for="password">New password</label>
            <input type="password" name="password" id="password">
            <label for="passwordrepeat">Confirm new password</label>
            <input type="password" name="passwordconfirm" id="passwordconfirm">

            <div class="btns-container">
                <button type="submit">Reset</button>
                <button class="logout"><a href="/app/users/logout.php">Log out</a></button>
            </div>
        </form>
    </section>
</div>



<?php require __DIR__ . '/views/footer.php';
