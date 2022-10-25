<?php

namespace ContainerYshqxZC;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera0d17 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera261f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf9d7b = [
        
    ];

    public function getConnection()
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'getConnection', array(), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'getMetadataFactory', array(), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'getExpressionBuilder', array(), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'beginTransaction', array(), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'getCache', array(), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->getCache();
    }

    public function transactional($func)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'transactional', array('func' => $func), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'wrapInTransaction', array('func' => $func), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'commit', array(), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->commit();
    }

    public function rollback()
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'rollback', array(), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'getClassMetadata', array('className' => $className), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'createQuery', array('dql' => $dql), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'createNamedQuery', array('name' => $name), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'createQueryBuilder', array(), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'flush', array('entity' => $entity), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'clear', array('entityName' => $entityName), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->clear($entityName);
    }

    public function close()
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'close', array(), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->close();
    }

    public function persist($entity)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'persist', array('entity' => $entity), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'remove', array('entity' => $entity), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'refresh', array('entity' => $entity), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'detach', array('entity' => $entity), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'merge', array('entity' => $entity), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'getRepository', array('entityName' => $entityName), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'contains', array('entity' => $entity), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'getEventManager', array(), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'getConfiguration', array(), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'isOpen', array(), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'getUnitOfWork', array(), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'getProxyFactory', array(), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'initializeObject', array('obj' => $obj), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'getFilters', array(), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'isFiltersStateClean', array(), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'hasFilters', array(), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return $this->valueHoldera0d17->hasFilters();
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

        $instance->initializera261f = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldera0d17) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera0d17 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera0d17->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, '__get', ['name' => $name], $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        if (isset(self::$publicPropertiesf9d7b[$name])) {
            return $this->valueHoldera0d17->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0d17;

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

        $targetObject = $this->valueHoldera0d17;
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
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0d17;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera0d17;
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
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, '__isset', array('name' => $name), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0d17;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera0d17;
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
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, '__unset', array('name' => $name), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0d17;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera0d17;
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
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, '__clone', array(), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        $this->valueHoldera0d17 = clone $this->valueHoldera0d17;
    }

    public function __sleep()
    {
        $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, '__sleep', array(), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;

        return array('valueHoldera0d17');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera261f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera261f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera261f && ($this->initializera261f->__invoke($valueHoldera0d17, $this, 'initializeProxy', array(), $this->initializera261f) || 1) && $this->valueHoldera0d17 = $valueHoldera0d17;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera0d17;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera0d17;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
