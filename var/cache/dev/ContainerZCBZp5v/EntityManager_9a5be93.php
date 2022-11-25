<?php

namespace ContainerZCBZp5v;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder69b06 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer73eaf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties74d1e = [
        
    ];

    public function getConnection()
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'getConnection', array(), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'getMetadataFactory', array(), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'getExpressionBuilder', array(), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'beginTransaction', array(), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'getCache', array(), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->getCache();
    }

    public function transactional($func)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'transactional', array('func' => $func), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'wrapInTransaction', array('func' => $func), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'commit', array(), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->commit();
    }

    public function rollback()
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'rollback', array(), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'getClassMetadata', array('className' => $className), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'createQuery', array('dql' => $dql), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'createNamedQuery', array('name' => $name), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'createQueryBuilder', array(), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'flush', array('entity' => $entity), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'clear', array('entityName' => $entityName), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->clear($entityName);
    }

    public function close()
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'close', array(), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->close();
    }

    public function persist($entity)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'persist', array('entity' => $entity), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'remove', array('entity' => $entity), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'refresh', array('entity' => $entity), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'detach', array('entity' => $entity), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'merge', array('entity' => $entity), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'getRepository', array('entityName' => $entityName), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'contains', array('entity' => $entity), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'getEventManager', array(), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'getConfiguration', array(), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'isOpen', array(), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'getUnitOfWork', array(), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'getProxyFactory', array(), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'initializeObject', array('obj' => $obj), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'getFilters', array(), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'isFiltersStateClean', array(), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'hasFilters', array(), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return $this->valueHolder69b06->hasFilters();
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

        $instance->initializer73eaf = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder69b06) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder69b06 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder69b06->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, '__get', ['name' => $name], $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        if (isset(self::$publicProperties74d1e[$name])) {
            return $this->valueHolder69b06->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69b06;

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

        $targetObject = $this->valueHolder69b06;
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
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69b06;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder69b06;
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
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, '__isset', array('name' => $name), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69b06;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder69b06;
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
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, '__unset', array('name' => $name), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69b06;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder69b06;
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
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, '__clone', array(), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        $this->valueHolder69b06 = clone $this->valueHolder69b06;
    }

    public function __sleep()
    {
        $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, '__sleep', array(), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;

        return array('valueHolder69b06');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer73eaf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer73eaf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer73eaf && ($this->initializer73eaf->__invoke($valueHolder69b06, $this, 'initializeProxy', array(), $this->initializer73eaf) || 1) && $this->valueHolder69b06 = $valueHolder69b06;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder69b06;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder69b06;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
