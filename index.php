<img class="background-image" src="assets/images/abstract-2.jpeg" alt="abstract image">
<?php require __DIR__ . '/views/header.php'; ?>
<article>

    <?php if (isset($_SESSION['user'])) : ?>

        <?php require __DIR__ . '/app/posts/show.php'; ?>

        <div class="content-wrapper">
            <section class="content-feed">
                <?php foreach ($posts as $post) : ?>
                    <div class="posts-in-feed" data-id="<?php echo $post['id']; ?>">
                        <img class="post-in-feed" src="/uploads/posts/<?php echo $post['image']; ?>" alt="<?php echo $post['caption']; ?>">
                        
                        <form action="/app/posts/reaction.php" methor="post">
                            <button class="no-style-plz" type="submit"><img class="icons" src="/assets/icons/heart.svg" alt=""></button>
                            <img class="icons" src="/assets/icons/comment.svg" alt="">
                        </form>

                        <p class="poster-name-in-feed"><?php echo $post['firstname'] . ' ' . $post['lastname']; ?></p>
                        <p class="post-caption-in-feed"><?php echo $post['caption']; ?></p>
                    </div>
                <?php endforeach; ?>
            </section>
        </div>

    <?php else : ?>
        <div class="start-info-container">
            <section class="start-info">
                <h1>Welcome to Picture This!</h1>
                <h5>This is just a simple btec version of Instagram made by Andreas Lindberg.</h5>
                <h5>Don't have an account already? <br> Click below to sign up and enjoy this crappy version of Instagram.</h5>
                <button> <a class="sign-up-btn" href="signup.php">SIGN UP</a></button>
            </section>
        </div>

    <?php endif; ?>
</article>

<?php require __DIR__ . '/views/footer.php'; ?>