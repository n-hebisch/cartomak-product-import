<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderf52bf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer79032 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6c247 = [
        
    ];

    public function getConnection()
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'getConnection', array(), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'getMetadataFactory', array(), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'getExpressionBuilder', array(), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'beginTransaction', array(), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'getCache', array(), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->getCache();
    }

    public function transactional($func)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'transactional', array('func' => $func), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->transactional($func);
    }

    public function commit()
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'commit', array(), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->commit();
    }

    public function rollback()
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'rollback', array(), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'getClassMetadata', array('className' => $className), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'createQuery', array('dql' => $dql), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'createNamedQuery', array('name' => $name), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'createQueryBuilder', array(), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'flush', array('entity' => $entity), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'clear', array('entityName' => $entityName), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->clear($entityName);
    }

    public function close()
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'close', array(), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->close();
    }

    public function persist($entity)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'persist', array('entity' => $entity), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'remove', array('entity' => $entity), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'refresh', array('entity' => $entity), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'detach', array('entity' => $entity), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'merge', array('entity' => $entity), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'getRepository', array('entityName' => $entityName), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'contains', array('entity' => $entity), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'getEventManager', array(), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'getConfiguration', array(), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'isOpen', array(), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'getUnitOfWork', array(), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'getProxyFactory', array(), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'initializeObject', array('obj' => $obj), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'getFilters', array(), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'isFiltersStateClean', array(), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'hasFilters', array(), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return $this->valueHolderf52bf->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? $reflection = new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer79032 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf52bf) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf52bf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf52bf->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, '__get', ['name' => $name], $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        if (isset(self::$publicProperties6c247[$name])) {
            return $this->valueHolderf52bf->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf52bf;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolderf52bf;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf52bf;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderf52bf;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, '__isset', array('name' => $name), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf52bf;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf52bf;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, '__unset', array('name' => $name), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf52bf;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf52bf;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, '__clone', array(), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        $this->valueHolderf52bf = clone $this->valueHolderf52bf;
    }

    public function __sleep()
    {
        $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, '__sleep', array(), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;

        return array('valueHolderf52bf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer79032 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer79032;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer79032 && ($this->initializer79032->__invoke($valueHolderf52bf, $this, 'initializeProxy', array(), $this->initializer79032) || 1) && $this->valueHolderf52bf = $valueHolderf52bf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf52bf;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolderf52bf;
    }


}
