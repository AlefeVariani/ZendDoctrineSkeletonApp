<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\Pessoa;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $objectManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
 
        $pessoa = new Pessoa();
        $pessoa->setNome("Alefe Variani");
        $pessoa->setDescricao("Web Developer Chapecó/Brasil");
        
        try {
            $objectManager->persist($pessoa);
            $objectManager->flush();            
        } catch (Exception $ex) {
            throw new \InvalidArgumentException("erro");
        }
        
        return new ViewModel();
    }
}
