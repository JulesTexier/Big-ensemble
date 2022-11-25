<?php

namespace ContainerYx6RcyZ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere4145 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8cc1c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties43d8d = [
        
    ];

    public function getConnection()
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'getConnection', array(), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'getMetadataFactory', array(), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'getExpressionBuilder', array(), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'beginTransaction', array(), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'getCache', array(), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'transactional', array('func' => $func), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'commit', array(), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->commit();
    }

    public function rollback()
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'rollback', array(), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'getClassMetadata', array('className' => $className), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'createQuery', array('dql' => $dql), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'createNamedQuery', array('name' => $name), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'createQueryBuilder', array(), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'flush', array('entity' => $entity), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'clear', array('entityName' => $entityName), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->clear($entityName);
    }

    public function close()
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'close', array(), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->close();
    }

    public function persist($entity)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'persist', array('entity' => $entity), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'remove', array('entity' => $entity), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'refresh', array('entity' => $entity), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'detach', array('entity' => $entity), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'merge', array('entity' => $entity), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'contains', array('entity' => $entity), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'getEventManager', array(), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'getConfiguration', array(), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'isOpen', array(), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'getUnitOfWork', array(), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'getProxyFactory', array(), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'initializeObject', array('obj' => $obj), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'getFilters', array(), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'isFiltersStateClean', array(), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'hasFilters', array(), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return $this->valueHoldere4145->hasFilters();
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

        $instance->initializer8cc1c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldere4145) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere4145 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere4145->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, '__get', ['name' => $name], $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        if (isset(self::$publicProperties43d8d[$name])) {
            return $this->valueHoldere4145->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere4145;

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

        $targetObject = $this->valueHoldere4145;
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
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere4145;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere4145;
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
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, '__isset', array('name' => $name), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere4145;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere4145;
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
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, '__unset', array('name' => $name), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere4145;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere4145;
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
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, '__clone', array(), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        $this->valueHoldere4145 = clone $this->valueHoldere4145;
    }

    public function __sleep()
    {
        $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, '__sleep', array(), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;

        return array('valueHoldere4145');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8cc1c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8cc1c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8cc1c && ($this->initializer8cc1c->__invoke($valueHoldere4145, $this, 'initializeProxy', array(), $this->initializer8cc1c) || 1) && $this->valueHoldere4145 = $valueHoldere4145;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere4145;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere4145;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}