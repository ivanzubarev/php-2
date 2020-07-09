<a href="/">На главную</a>
<h1><?php echo $this->article->title; ?></h1>

<i>Автор: <?php echo ($this->article->author != null) ? $this->article->author->name : 'Аноним'; ?></i>

<p>
    <?php echo $this->article->article_text; ?>
</p>