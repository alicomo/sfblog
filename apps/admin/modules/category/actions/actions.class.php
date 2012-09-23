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

}
