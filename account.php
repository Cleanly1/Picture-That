<?php

declare(strict_types=1); ?>
<img class="background-image" src="assets/images/abstract-2.jpeg" alt="abstract image">
<?php require __DIR__ . '/views/header.php'; ?>
<?php require __DIR__ . '/app/posts/show.php'; ?>
<?php require __DIR__ . '/app/users/showavatar.php'; ?>

<?php if (!isset($_SESSION['user'])) {
    redirect('/');
} ?>

<div class="account-container">

    <section class="posts-wrapper">

        <section class="account">
            <div class="posts-header">

                <h1 class="posts-h1">Your posts</h1>
            </div>
            <img class="avatar-img" src="/uploads/avatar/<?php echo $avatar['avatar']; ?>" alt="avatar">
            <div class="account-settings">
                <a href="settings.php">
                    <h1 class="posts-h1">Settings</h1>
                </a>
            </div>
        </section>

        <div class="posts-container">

            <?php foreach ($posts as $post) : ?>
                <div class="posts" data-id="<?php echo $post['id']; ?>">
                    <a href="editpost.php?id=<?php echo $post['id']; ?>">
                        <img class="posts-in-account" src="/uploads/posts/<?php echo $post['image']; ?>" alt="<?php echo $post['caption']; ?>">
                    </a>
                    <p><?php echo $post['caption']; ?></p>
                </div>
            <?php endforeach; ?>

        </div>
    </section>

    <script src="/assets/scripts/confirm.js"></script>

    <?php require __DIR__ . '/views/footer.php';
