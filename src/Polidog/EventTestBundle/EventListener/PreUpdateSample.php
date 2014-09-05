<?php
/**
 * Created by PhpStorm.
 * User: polidog
 * Date: 2014/09/06
 * Time: 3:11
 */

namespace Polidog\EventTestBundle\EventListener;


use Doctrine\ORM\Event\LifecycleEventArgs;
use Monolog\Logger;

class PreUpdateSample
{
    private $logger;

    /**
     * constract
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function preUpdate(LifecycleEventArgs $args)
    {
        $this->logger->error('preUpdate execute');
    }
} 
