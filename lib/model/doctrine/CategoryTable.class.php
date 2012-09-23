<?php

/**
 * CategoryTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CategoryTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object CategoryTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Category');
    }
    
    public function getAllWithoutSymfony(Doctrine_Query $q) 
    {
       $alisas = $q->getRootAlias();
        
       //$q->andWhere($alisas.'.name LIKE ?', 'Symfony%');
       
       return $q;
    }
}