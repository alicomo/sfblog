<?php

require_once dirname(__FILE__).'/../lib/postGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/postGeneratorHelper.class.php';

/**
 * post actions.
 *
 * @package    sfblog
 * @subpackage post
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class postActions extends autoPostActions
{
    public function executePublish(sfWebRequest $request)
    {
//        $post = $this->getRoute()->getObject();
//        $post->setPublishedAt(date('Y-m-d h:i:s'));
//        $post->save();
//        
//        $this->getUser()->setFlash('notice', 'The selected item has been published successfully');
//        
//        $this->redirect('@post');
        
       $this->form = new PostForm();
    }
    
    
    
    
  
}
