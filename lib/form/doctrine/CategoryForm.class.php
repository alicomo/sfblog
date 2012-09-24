<?php

/**
 * Category form.
 *
 * @package    sfblog
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CategoryForm extends BaseCategoryForm
{
  public function configure()
  {
      unset($this['created_at'],$this['updated_at'], $this['deleted_at'], $this['created_by'],$this['updated_by']);
      
      //$this->widgetSchema['system'] = new sfWidgetFormChoice(array('choices' => sfConfig::get('app_system_config') ));
      //$this->getWidgetSchema()->setNameFormat('group[%s]');
      
      $this->validatorSchema['name']->setMessage('invalid', 'Number is not allowed');
      $this->validatorSchema['name']->setMessage('required', 'Oops What are you doing................!');
  }
}
