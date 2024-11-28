<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>posts</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>

    <?php foreach($posts as $post) : ?>
        <article>
            <?php echo $post; ?>
        </article>
    <?php endforeach ?>


</body>
<script src="./app.js"></script>
</html>