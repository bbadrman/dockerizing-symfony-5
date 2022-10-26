<?php

namespace ContainerJ5xhJSg;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5a0bb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc4e2c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdb044 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'getConnection', array(), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'getMetadataFactory', array(), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'getExpressionBuilder', array(), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'beginTransaction', array(), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'getCache', array(), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'transactional', array('func' => $func), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'commit', array(), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->commit();
    }

    public function rollback()
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'rollback', array(), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'getClassMetadata', array('className' => $className), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'createQuery', array('dql' => $dql), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'createNamedQuery', array('name' => $name), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'createQueryBuilder', array(), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'flush', array('entity' => $entity), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'clear', array('entityName' => $entityName), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->clear($entityName);
    }

    public function close()
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'close', array(), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->close();
    }

    public function persist($entity)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'persist', array('entity' => $entity), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'remove', array('entity' => $entity), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'refresh', array('entity' => $entity), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'detach', array('entity' => $entity), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'merge', array('entity' => $entity), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'contains', array('entity' => $entity), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'getEventManager', array(), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'getConfiguration', array(), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'isOpen', array(), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'getUnitOfWork', array(), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'getProxyFactory', array(), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'initializeObject', array('obj' => $obj), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'getFilters', array(), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'isFiltersStateClean', array(), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'hasFilters', array(), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return $this->valueHolder5a0bb->hasFilters();
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

        $instance->initializerc4e2c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5a0bb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5a0bb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5a0bb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, '__get', ['name' => $name], $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        if (isset(self::$publicPropertiesdb044[$name])) {
            return $this->valueHolder5a0bb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a0bb;

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

        $targetObject = $this->valueHolder5a0bb;
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
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a0bb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5a0bb;
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
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, '__isset', array('name' => $name), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a0bb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5a0bb;
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
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, '__unset', array('name' => $name), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a0bb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5a0bb;
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
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, '__clone', array(), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        $this->valueHolder5a0bb = clone $this->valueHolder5a0bb;
    }

    public function __sleep()
    {
        $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, '__sleep', array(), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;

        return array('valueHolder5a0bb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc4e2c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc4e2c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc4e2c && ($this->initializerc4e2c->__invoke($valueHolder5a0bb, $this, 'initializeProxy', array(), $this->initializerc4e2c) || 1) && $this->valueHolder5a0bb = $valueHolder5a0bb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a0bb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a0bb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
