<a href="?c=Post&m=create_form">Create Post</a>

<?php if (!$posts->num_rows): ?>
    <p>No posts.</p>
<?php else: ?>
    <?php while ($post = $posts->fetch_object()): ?>
        <h3><?php echo htmlspecialchars($post->title); ?></h3>
        <a href="?c=Post&m=edit&id=<?php echo $post->id; ?>">Edit</a>
        <form action="?c=Post&m=delete" method="post">
            <input type="hidden" name="id" value="<?php echo $post->id; ?>">
            <input type="submit" value="Delete">
        </form>
        <p align="justify"><?php echo htmlspecialchars($post->content); ?></p>
    <?php endwhile; ?>
<?php endif; ?>