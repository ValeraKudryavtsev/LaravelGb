<h2>Categories list</h2> <br />
<?php foreach($categoriesList as $categories): ?>
<div>
    <h4><a href="<?=route('news.index')?>"><?=$categories['title']?></a></h4>
</div><hr /><br />
<?php endforeach; ?>
