<main class="container section">
    <h1>Create new property</h1>

    <a href="/admin" class="button-green">Go back</a>

    <?php foreach ($errors as $error) : ?>
        <div class="alert error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="form" method="POST" enctype="multipart/form-data">
        <?php include __DIR__ . "/form.php";?>
        <input type="submit" value="Create property" class="button-green">
    </form>
</main>