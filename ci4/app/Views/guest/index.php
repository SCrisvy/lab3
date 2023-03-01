<h2><?= esc($title) ?></h2>

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>


        <div class="main">
            <h3><?= esc($news_item['name']) ?><h3>
			<p><?= esc($news_item['email']) ?><p>
			<p><?= esc($news_item['comment']) ?><p>
        </div>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Guest</h3>
    <p>Unable to find any news for you.</p>

<?php endif ?>