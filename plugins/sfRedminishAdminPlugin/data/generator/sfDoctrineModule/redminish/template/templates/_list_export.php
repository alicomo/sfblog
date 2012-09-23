<?php foreach ($this->configuration->getValue('list.display') as $name => $field): ?>
<?php echo $this->addCredentialCondition(sprintf(<<<EOF
  [?php echo %s."," ?]
EOF
, strtolower($field->getType()), $name, $this->renderField($field)), $field->getConfig()) ?>
<?php endforeach; ?>