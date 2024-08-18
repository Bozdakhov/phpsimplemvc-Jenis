<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <?php if ($post): ?>
            <h1 class="mb-4"><?php echo htmlspecialchars($post['title']); ?></h1>
            
            <img src="/uploads/<?php echo $post['image']; ?>" class="card-img-top" alt="<?php echo $post['title']; ?>">
            <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
            <p><strong>Author:</strong> <?php echo htmlspecialchars($post['author_name']); ?></p>
            <p><strong>Created At:</strong> <?php echo htmlspecialchars($post['created_at']); ?></p>
            <p><strong>Updated At:</strong> <?php echo htmlspecialchars($post['updated_at']); ?></p>
            <a href="/posts/edit?id=<?php echo htmlspecialchars($post['id']); ?>" class="btn btn-warning">Edit</a>
            <a href="/posts" class="btn btn-primary">Back to Posts</a>
        <?php else: ?>
            <h1>Post Not Found</h1>
            <p>Sorry, but the post you are looking for does not exist.</p>
            <a href="/posts" class="btn btn-primary">Back to Posts</a>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>