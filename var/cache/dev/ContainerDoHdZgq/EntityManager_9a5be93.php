<?php

namespace ContainerDoHdZgq;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera3aad = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5caa7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties274e7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'getConnection', array(), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'getMetadataFactory', array(), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'getExpressionBuilder', array(), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'beginTransaction', array(), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'getCache', array(), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'transactional', array('func' => $func), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'commit', array(), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->commit();
    }

    public function rollback()
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'rollback', array(), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'getClassMetadata', array('className' => $className), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'createQuery', array('dql' => $dql), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'createNamedQuery', array('name' => $name), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'createQueryBuilder', array(), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'flush', array('entity' => $entity), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'clear', array('entityName' => $entityName), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->clear($entityName);
    }

    public function close()
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'close', array(), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->close();
    }

    public function persist($entity)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'persist', array('entity' => $entity), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'remove', array('entity' => $entity), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'refresh', array('entity' => $entity), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'detach', array('entity' => $entity), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'merge', array('entity' => $entity), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'contains', array('entity' => $entity), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'getEventManager', array(), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'getConfiguration', array(), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'isOpen', array(), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'getUnitOfWork', array(), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'getProxyFactory', array(), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'initializeObject', array('obj' => $obj), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'getFilters', array(), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'isFiltersStateClean', array(), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'hasFilters', array(), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return $this->valueHoldera3aad->hasFilters();
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

        $instance->initializer5caa7 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldera3aad) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera3aad = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera3aad->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, '__get', ['name' => $name], $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        if (isset(self::$publicProperties274e7[$name])) {
            return $this->valueHoldera3aad->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3aad;

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

        $targetObject = $this->valueHoldera3aad;
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
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3aad;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera3aad;
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
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, '__isset', array('name' => $name), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3aad;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera3aad;
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
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, '__unset', array('name' => $name), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3aad;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera3aad;
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
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, '__clone', array(), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        $this->valueHoldera3aad = clone $this->valueHoldera3aad;
    }

    public function __sleep()
    {
        $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, '__sleep', array(), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;

        return array('valueHoldera3aad');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5caa7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5caa7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5caa7 && ($this->initializer5caa7->__invoke($valueHoldera3aad, $this, 'initializeProxy', array(), $this->initializer5caa7) || 1) && $this->valueHoldera3aad = $valueHoldera3aad;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera3aad;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera3aad;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
