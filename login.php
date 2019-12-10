<img class="background-image" src="assets/images/abstract-1.jpeg" alt="picture of a blue orange">

<?php
require __DIR__ . '/views/header.php';
?>

<div class="login-container">
    <article class="login">
        <h1>Login</h1>

        <form action="app/users/login.php" method="post">
            <div class="form-section">
                <label for="email">Email</label>
                <input class="input" type="email" id="email" name="email" placeholder="example@email.com" required>
            </div>

            <div class="form-section">
                <label for="password">Password</label>
                <input class="input" type="password" id="password" name="password" placeholder="*********" required>
            </div>

            <button type="submit">Login</button>
        </form>
    </article>
</div>

<?php require __DIR__ . '/views/footer.php'; ?>