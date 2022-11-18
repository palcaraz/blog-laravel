<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1024, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <article>
        <h1><?= $post->title; ?></h1>
        <div>
            <?= $post->body; ?>
        </div>
    </article>
	<a href="/">Go back</a>

</body>
</html>