<?php

/**
 * Post form.
 *
 * @package    sfblog
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PostForm extends BasePostForm
{
  public function configure()
  {
      $this->useFields(array('title', 'category_id', 'body'));
      $this->widgetSchema['body']->setLabel('Content');
      $this->widgetSchema['input'] =  new sfWidgetFormInput();
      $this->widgetSchema['text_area'] =  new sfWidgetFormTextarea();
      $this->widgetSchema['checkbox'] =  new sfWidgetFormInputCheckbox();
      $this->widgetSchema['password'] =  new sfWidgetFormInputPassword();
      $this->widgetSchema['select'] =  new sfWidgetFormSelect(array('choices' => sfConfig::get('app_system_config')));
      $this->widgetSchema['choice'] =  new sfWidgetFormChoice(array('choices' => sfConfig::get('app_system_config'), 'expanded' => true, 'multiple' => true));
      $this->widgetSchema['double_select'] =  new sfWidgetFormSelectDoubleList(array('choices' => sfConfig::get('app_system_config')));
      $this->widgetSchema['file'] =  new sfWidgetFormInputFile();
      $this->widgetSchema['date'] =  new sfWidgetFormDate();
      $this->widgetSchema['date_time'] =  new sfWidgetFormDateTime();
      $this->widgetSchema['time'] =  new sfWidgetFormTime();
      $this->widgetSchema['calendar'] =  new sfWidgetFormJqueryDate();
      $this->widgetSchema['doctrine_choice'] = new sfWidgetFormDoctrineChoice(array('model' => 'Category', 'add_empty' => 'Select'));
      $this->widgetSchema['doctrine_choice_grouped'] = new sfWidgetFormDoctrineChoiceGrouped(array('model' => 'Category', 'add_empty' => 'Select', 'group_by' => 'created_by'));
      $this->setOption('url', sfContext::getInstance()->getController()->genUrl('category/ajax'));
      $this->widgetSchema['category_autocomplete'] = new sfWidgetFormDoctrineJQueryAutocompleter(
                                            array(
                                            	'model' => 'Category',
                                                'url'   => $this->getOption('url')
                                              ));
      
      $this->getWidgetSchema()->setFormFormatterName('vertical');
      
  }
}
