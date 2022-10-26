<?php

namespace ContainerOlXwQiY;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb4930 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer455ff = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7ffd5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'getConnection', array(), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'getMetadataFactory', array(), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'getExpressionBuilder', array(), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'beginTransaction', array(), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'getCache', array(), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->getCache();
    }

    public function transactional($func)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'transactional', array('func' => $func), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'wrapInTransaction', array('func' => $func), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'commit', array(), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->commit();
    }

    public function rollback()
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'rollback', array(), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'getClassMetadata', array('className' => $className), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'createQuery', array('dql' => $dql), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'createNamedQuery', array('name' => $name), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'createQueryBuilder', array(), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'flush', array('entity' => $entity), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'clear', array('entityName' => $entityName), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->clear($entityName);
    }

    public function close()
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'close', array(), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->close();
    }

    public function persist($entity)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'persist', array('entity' => $entity), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'remove', array('entity' => $entity), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'refresh', array('entity' => $entity), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'detach', array('entity' => $entity), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'merge', array('entity' => $entity), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'getRepository', array('entityName' => $entityName), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'contains', array('entity' => $entity), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'getEventManager', array(), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'getConfiguration', array(), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'isOpen', array(), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'getUnitOfWork', array(), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'getProxyFactory', array(), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'initializeObject', array('obj' => $obj), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'getFilters', array(), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'isFiltersStateClean', array(), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'hasFilters', array(), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return $this->valueHolderb4930->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer455ff = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb4930) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb4930 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb4930->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, '__get', ['name' => $name], $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        if (isset(self::$publicProperties7ffd5[$name])) {
            return $this->valueHolderb4930->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4930;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb4930;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4930;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb4930;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, '__isset', array('name' => $name), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4930;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb4930;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, '__unset', array('name' => $name), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4930;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb4930;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, '__clone', array(), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        $this->valueHolderb4930 = clone $this->valueHolderb4930;
    }

    public function __sleep()
    {
        $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, '__sleep', array(), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;

        return array('valueHolderb4930');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer455ff = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer455ff;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer455ff && ($this->initializer455ff->__invoke($valueHolderb4930, $this, 'initializeProxy', array(), $this->initializer455ff) || 1) && $this->valueHolderb4930 = $valueHolderb4930;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb4930;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb4930;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
