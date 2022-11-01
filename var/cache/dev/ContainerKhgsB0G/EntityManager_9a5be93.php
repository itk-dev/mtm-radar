<?php

namespace ContainerKhgsB0G;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderacdb6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7764f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9f854 = [
        
    ];

    public function getConnection()
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'getConnection', array(), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'getMetadataFactory', array(), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'getExpressionBuilder', array(), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'beginTransaction', array(), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'getCache', array(), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'transactional', array('func' => $func), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'commit', array(), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->commit();
    }

    public function rollback()
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'rollback', array(), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'getClassMetadata', array('className' => $className), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'createQuery', array('dql' => $dql), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'createNamedQuery', array('name' => $name), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'createQueryBuilder', array(), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'flush', array('entity' => $entity), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'clear', array('entityName' => $entityName), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->clear($entityName);
    }

    public function close()
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'close', array(), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->close();
    }

    public function persist($entity)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'persist', array('entity' => $entity), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'remove', array('entity' => $entity), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'refresh', array('entity' => $entity), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'detach', array('entity' => $entity), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'merge', array('entity' => $entity), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'contains', array('entity' => $entity), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'getEventManager', array(), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'getConfiguration', array(), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'isOpen', array(), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'getUnitOfWork', array(), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'getProxyFactory', array(), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'initializeObject', array('obj' => $obj), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'getFilters', array(), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'isFiltersStateClean', array(), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'hasFilters', array(), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return $this->valueHolderacdb6->hasFilters();
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

        $instance->initializer7764f = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderacdb6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderacdb6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderacdb6->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, '__get', ['name' => $name], $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        if (isset(self::$publicProperties9f854[$name])) {
            return $this->valueHolderacdb6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderacdb6;

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

        $targetObject = $this->valueHolderacdb6;
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
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderacdb6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderacdb6;
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
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, '__isset', array('name' => $name), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderacdb6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderacdb6;
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
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, '__unset', array('name' => $name), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderacdb6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderacdb6;
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
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, '__clone', array(), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        $this->valueHolderacdb6 = clone $this->valueHolderacdb6;
    }

    public function __sleep()
    {
        $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, '__sleep', array(), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;

        return array('valueHolderacdb6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7764f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7764f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7764f && ($this->initializer7764f->__invoke($valueHolderacdb6, $this, 'initializeProxy', array(), $this->initializer7764f) || 1) && $this->valueHolderacdb6 = $valueHolderacdb6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderacdb6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderacdb6;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
