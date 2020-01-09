<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

header('Content-Type: application/json');

$like = 'like';

if (isset($_POST['postid'])) {
    $statement = $pdo->prepare('SELECT * FROM reactions WHERE user_id = :userid AND post_id = :postid');

    $statement->execute([
        ':userid' => $_SESSION['user']['id'],
        ':postid' => $_POST['postid']
    ]);



    $isLiked = $statement->fetch(pdo::FETCH_ASSOC);


    if ($isLiked['user_id'] === $_SESSION['user']['id'] && $isLiked['post_id'] === $_POST['postid']) {
        $statement = $pdo->prepare('DELETE FROM reactions WHERE user_id = :userid AND post_id = :postid');

        $statement->execute([
            'userid' => $_SESSION['user']['id'],
            ':postid' => $_POST['postid']
        ]);

        $notLiked = ['src' => 'heart.svg'];

        echo json_encode($notLiked);
    }

    if (empty($isLiked)) {

        $statement = $pdo->prepare('INSERT INTO reactions (user_id, post_id, reaction_type) VALUES(:userid, :postid, :like)');

        $statement->execute([
            ':userid' => $_SESSION['user']['id'],
            ':postid' => $_POST['postid'],
            ':like' => $like,
        ]);

        $liked = ['src' => 'like.png'];

        echo json_encode($liked);
    }
}
