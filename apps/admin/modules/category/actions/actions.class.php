<?php

require_once dirname(__FILE__).'/../lib/categoryGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/categoryGeneratorHelper.class.php';

/**
 * category actions.
 *
 * @package    sfblog
 * @subpackage category
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class categoryActions extends autoCategoryActions
{
//    public function executeExport(sfWebRequest $request) {
//       // sorting
//        if ($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort')))
//        {
//        $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
//        }
//
//        // pager
//        if ($request->getParameter('page'))
//        {
//        $this->setPage($request->getParameter('page'));
//        }
//
//        $this->pager = $this->getPager();
//        $this->sort = $this->getSort();
//        
//        $this->getResponse()->setContentType('application/x-csv');
//        $this->getResponse()->setHttpHeader('Content-Disposition', 'attachment; filename=export.csv');
//    
//    
//    }
    
    public function executeTest(sfWebRequest $request) {
        $system_config =  sfConfig::get('app_system_config');
       print_r($system_config); exit;
    }
    
    public function executeAjax(sfWebRequest $request)
  {
//    $this->getResponse()->setContentType('application/json');
//    $categories = Doctrine_Query::create()
//                    ->form('Category c')
//                    ->where('c.name LIKE ?', '%'.$request->getParameter('q').'%')
//                    ->limit($request->getParameter('limit'))
//                    ->orderBy('c.name')
//                    ->execute();
    $category = new Category();
    $category->setName('some');
    $category->setJoke('some');
    $category->save();
    return $this->renderText(json_encode($category->toArray()));  

  }
  
  public function executeExample(sfWebRequest $request) {
      $category = $this->getRoute()->getObject();
      print_r($category->toArray());exit;
  }
  
  public function executeActivate(sfWebRequest $request) 
  {
      $category = $this->getRoute()->getObject();
      if($this->getUser()->getAttribute('activated_categories') == null) {
          $i = 0;
      }else {
          $i = $this->getUser()->getAttribute('activated_categories');
      }
      if($this->getUser()->isSuperAdmin()) {
          $this->getUser()->setAttribute('activated_categories', $i+1);
          $category->setIsActive(true);
          $category->save();
      }
      
      
      
      
      if($category->getIsActive() && $this->getUser()->isSuperAdmin()) {
          $this->getUser()->setFlash('notice', 'Selected category has been activated. Total item: '.$this->getUser()->getAttribute('activated_categories'));
      }
      else if(!$this->getUser()->isSuperAdmin()){
          $this->getUser()->setFlash('error', 'You cant do it');
      }
      else {
          $this->getUser()->setFlash('error', 'Opps');
      }
      
      $this->redirect('@category');
  }

}
