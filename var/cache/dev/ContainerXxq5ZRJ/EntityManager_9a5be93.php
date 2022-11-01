<?php

namespace ContainerXxq5ZRJ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder39479 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer025bb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3c3c6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'getConnection', array(), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'getMetadataFactory', array(), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'getExpressionBuilder', array(), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'beginTransaction', array(), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'getCache', array(), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->getCache();
    }

    public function transactional($func)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'transactional', array('func' => $func), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'wrapInTransaction', array('func' => $func), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'commit', array(), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->commit();
    }

    public function rollback()
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'rollback', array(), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'getClassMetadata', array('className' => $className), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'createQuery', array('dql' => $dql), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'createNamedQuery', array('name' => $name), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'createQueryBuilder', array(), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'flush', array('entity' => $entity), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'clear', array('entityName' => $entityName), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->clear($entityName);
    }

    public function close()
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'close', array(), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->close();
    }

    public function persist($entity)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'persist', array('entity' => $entity), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'remove', array('entity' => $entity), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'refresh', array('entity' => $entity), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'detach', array('entity' => $entity), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'merge', array('entity' => $entity), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'getRepository', array('entityName' => $entityName), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'contains', array('entity' => $entity), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'getEventManager', array(), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'getConfiguration', array(), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'isOpen', array(), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'getUnitOfWork', array(), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'getProxyFactory', array(), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'initializeObject', array('obj' => $obj), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'getFilters', array(), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'isFiltersStateClean', array(), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'hasFilters', array(), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return $this->valueHolder39479->hasFilters();
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

        $instance->initializer025bb = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder39479) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder39479 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder39479->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, '__get', ['name' => $name], $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        if (isset(self::$publicProperties3c3c6[$name])) {
            return $this->valueHolder39479->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39479;

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

        $targetObject = $this->valueHolder39479;
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
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39479;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder39479;
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
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, '__isset', array('name' => $name), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39479;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder39479;
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
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, '__unset', array('name' => $name), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39479;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder39479;
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
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, '__clone', array(), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        $this->valueHolder39479 = clone $this->valueHolder39479;
    }

    public function __sleep()
    {
        $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, '__sleep', array(), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;

        return array('valueHolder39479');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer025bb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer025bb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer025bb && ($this->initializer025bb->__invoke($valueHolder39479, $this, 'initializeProxy', array(), $this->initializer025bb) || 1) && $this->valueHolder39479 = $valueHolder39479;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder39479;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder39479;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
