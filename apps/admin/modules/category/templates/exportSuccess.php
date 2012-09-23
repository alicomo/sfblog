id,name,create_at
<?php foreach($pager->getResults() as $category): ?>
    <?php echo $category->getId().",".$category->getName().",".$category->getCreatedAt()."\n"; ?>
<?php endforeach; ?>

