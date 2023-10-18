<main class="container section">
    <h1>Real Estate Administrator</h1>

    <?php
    $message = showNotification(intval($result));
    if ($message) { ?>
        <p class="alert correct"><?php echo $message; ?></p>
    <?php } ?>


    <a href="/properties/create" class="button-green">New property</a>
    <a href="/admin/sellers/create.php" class="button-yellow">New seller</a>
    
    <h2 class="no-margin-top">Properties</h2>
    <table class="properties">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($properties as $property) : ?>
                <tr>
                    <td><?php echo $property->id; ?></td>
                    <td><?php echo $property->title; ?></td>
                    <td>
                        <img src="/images/<?php echo $property->image; ?>" alt="property image" class="image-table">
                    </td>
                    <td><?php echo "$" . $property->price; ?></td>
                    <td>
                        <a href="/properties/update?id=<?php echo $property->id; ?>" class="button-yellow-block">Update</a>
                        <a href="/properties/delete?id=<?php echo $property->id; ?>" class="button-red-block">Eliminate</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>