<style>
    body {
        max-width: 960px;
        margin: auto;
    }

    form {
        text-align: center;
    }

    table td {
        padding: 15px;
    }
</style>

<div style="text-align: Center;">
    <p>
        <a href="/">На главную</a>
    </p>
    <button type="button" onclick="location.href = '/create.php';">Создать новость</button>
</div>

<hr>
<?php if (count($this->articles) > 0) { ?>
<table border="1" width="100%">
    <tr>
        <td>id</td>
        <td>Title</td>
        <td>Article Text</td>
        <td>Author</td>
        <td>Actions</td>
    </tr>
    <?php foreach ($this->articles as $article) { ?>
        <tr>
            <td><?php echo $article->getId(); ?></td>
            <td><?php echo $article->title; ?></td>
            <td><?php echo $article->article_text; ?></td>
            <td><?php echo ($article->author != null) ? $article->author->name : 'Аноним'; ?></td>
            <td>
                <a href="/edit.php?id=<?php echo $article->getId();; ?>">Edit</a>
                <br>
                <a href="/delete.php?id=<?php echo $article->getId();; ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
<?php } else { ?>
<p style="text-align: center;">В настоящее время нет ни одной новости.</p>
<?php } ?>
