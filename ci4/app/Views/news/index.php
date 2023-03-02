

<header>
<h2><?= esc($title) ?></h2>

<?php echo link_tag('css/main.css'); ?>

<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>
		

        <h3><?= esc($news_item['title']) ?></h3>
		<br>

        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
		
		<br>
        <p><a href="news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>
		

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>

</header>