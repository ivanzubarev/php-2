<style>
    form {
        text-align: center;
    }

    form, table {
        max-width: 1200px;
        margin: auto;
    }

    table td {
        padding: 15px;
    }
</style>
<form action="/admin.php?new_article" method="POST">
    <input type="text" name="title" placeholder="Название статьи">
    <br>
    <textarea name="article_text" placeholder="Текст статьи"></textarea>
    <br>
    <button type="submit">Создать новость</button>
</form>

<hr>
<?php if (count($articles) > 0) { ?>
<table border="1">
    <tr>
        <td>id</td>
        <td>Title</td>
        <td>Article Text</td>
        <td>Actions</td>
    </tr>
    <?php foreach ($articles as $article) { ?>
        <tr>
            <td><?php echo $article->id; ?></td>
            <td><?php echo $article->title; ?></td>
            <td><?php echo $article->article_text; ?></td>
            <td>
                <a href="/admin.php?edit=<?php echo $article->id; ?>">Edit</a>
                <br>
                <a href="/admin.php?delete=<?php echo $article->id; ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
<?php } else { ?>
<p style="text-align: center;">В настоящее время нет ни одной новости.</p>
<?php } ?>
