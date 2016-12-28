<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Common\Enum\SncOptions;
use Application\Service\SyncSnc;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    /** @var SyncSnc */
    protected $client;

    public function indexAction()
    {
        $view = new ViewModel();
        return $view;
    }

    public function getlistAction()
    {
        return new JsonModel(array());
    }

    /**
     * Тестовая страница на получение списка контрагентов в виде json массива
     * @return JsonModel
     */
    public function testAction()
    {
        $bodySncCompany = $this->getClient()->getClient()->getAPIData(SncOptions::API_URL_COMPANY);
        return new JsonModel($bodySncCompany);
    }

    /**
     * @return SyncSnc
     */
    public function getClient()
    {
        if (!$this->client) {
            $this->client = $this->getServiceLocator()->get('snc_client_service');
            $this->client->init();
        }
        return $this->client;
    }

    /**
     * @param SyncSnc $client
     * @return $this
     */
    public function setClient($client)
    {
        $this->client = $client;
        return $this;
    }
}
