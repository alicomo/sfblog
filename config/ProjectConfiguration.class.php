<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('sfRedminishAdminPlugin');
    $this->enablePlugins('sfDoctrineActAsSignablePlugin');
    $this->enablePlugins('sfFormExtraPlugin');
    $this->enablePlugins('sfAdminThemejRollerPlugin');
  }
}
