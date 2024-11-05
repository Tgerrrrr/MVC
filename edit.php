<form action="?c=Post&m=<?php echo isset($post) ? 'edit_process' : 'create_process'; ?>" method="post">
    <?php if (isset($post)): ?>
        <input type="hidden" name="id" value="<?php echo $post->id; ?>">
    <?php endif; ?>
    <label>
        Title:
        <input type="text" name="title" value="<?php echo isset($post) ? htmlspecialchars($post->title) : ''; ?>" required autofocus>
    </label>
    <br>
    <label>
        Content:
        <textarea name="content" cols="30" rows="10" required><?php echo isset($post) ? htmlspecialchars($post->content) : ''; ?></textarea>
    </label>
    <br>
    <input type="submit" value="Post">
</form>