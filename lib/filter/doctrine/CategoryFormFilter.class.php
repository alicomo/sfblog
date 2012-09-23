<?php

/**
 * Category filter form.
 *
 * @package    sfblog
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CategoryFormFilter extends BaseCategoryFormFilter
{
  public function configure()
  {
      $this->widgetSchema['author'] = new sfWidgetFormDoctrineChoice(array('model' => 'sfGuardUser', 'add_empty' => 'Select'));
      $this->validatorSchema['author'] =  new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')); 
  
      //$this->getValidatorSchema()->setOption('allow_extra_fields', true);
  }
  
  public function getFields() {
      $fields = parent::getFields();
      $fields['author'] = 'ForeignKey';
      
      return $fields;
  }
  
  public function addAuthorColumnQuery(Doctrine_Query $query, $field, $values)
  {
      $alias = $query->getRootAlias();
      
      $query->andWhere($alias.'.created_by = ?', $values);
      //$query->orWhere($alias.'.updated_by = ?', $values);
      
      //echo $query->getSqlQuery(); exit;
      
      return $query;
  }
}
