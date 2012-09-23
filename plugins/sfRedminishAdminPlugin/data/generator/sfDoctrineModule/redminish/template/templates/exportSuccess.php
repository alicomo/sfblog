<?php foreach ($this->configuration->getValue('list.display') as $name => $field): ?>
    <?php echo  $field->getConfig('label', '', true).',' ?>
<?php endforeach; ?>
<?php echo "\n"; ?>

[?php foreach ($pager->getResults() as $i => $<?php echo $this->getSingularName() ?>): $odd = fmod(++$i, 2) ? 'odd' : 'even' ?]
          [?php include_partial('<?php echo $this->getModuleName() ?>/list_export ?>', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>)) ?]
          [?php echo "\n"; ?]
[?php endforeach; ?]


