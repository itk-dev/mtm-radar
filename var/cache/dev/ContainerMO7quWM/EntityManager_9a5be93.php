<?php

namespace ContainerMO7quWM;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6b7cb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0a996 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese5cf5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'getConnection', array(), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'getMetadataFactory', array(), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'getExpressionBuilder', array(), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'beginTransaction', array(), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'getCache', array(), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'transactional', array('func' => $func), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'commit', array(), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->commit();
    }

    public function rollback()
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'rollback', array(), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'getClassMetadata', array('className' => $className), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'createQuery', array('dql' => $dql), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'createNamedQuery', array('name' => $name), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'createQueryBuilder', array(), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'flush', array('entity' => $entity), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'clear', array('entityName' => $entityName), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->clear($entityName);
    }

    public function close()
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'close', array(), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->close();
    }

    public function persist($entity)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'persist', array('entity' => $entity), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'remove', array('entity' => $entity), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'refresh', array('entity' => $entity), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'detach', array('entity' => $entity), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'merge', array('entity' => $entity), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'contains', array('entity' => $entity), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'getEventManager', array(), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'getConfiguration', array(), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'isOpen', array(), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'getUnitOfWork', array(), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'getProxyFactory', array(), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'initializeObject', array('obj' => $obj), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'getFilters', array(), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'isFiltersStateClean', array(), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'hasFilters', array(), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return $this->valueHolder6b7cb->hasFilters();
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

        $instance->initializer0a996 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder6b7cb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6b7cb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6b7cb->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, '__get', ['name' => $name], $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        if (isset(self::$publicPropertiese5cf5[$name])) {
            return $this->valueHolder6b7cb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b7cb;

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

        $targetObject = $this->valueHolder6b7cb;
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
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b7cb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6b7cb;
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
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, '__isset', array('name' => $name), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b7cb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6b7cb;
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
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, '__unset', array('name' => $name), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b7cb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6b7cb;
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
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, '__clone', array(), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        $this->valueHolder6b7cb = clone $this->valueHolder6b7cb;
    }

    public function __sleep()
    {
        $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, '__sleep', array(), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;

        return array('valueHolder6b7cb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0a996 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0a996;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0a996 && ($this->initializer0a996->__invoke($valueHolder6b7cb, $this, 'initializeProxy', array(), $this->initializer0a996) || 1) && $this->valueHolder6b7cb = $valueHolder6b7cb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6b7cb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6b7cb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
