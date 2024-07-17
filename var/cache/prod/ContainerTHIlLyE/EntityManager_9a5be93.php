<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderc7b94 = null;
    private $initializer94d3c = null;
    private static $publicProperties4604f = [
        
    ];
    public function getConnection()
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'getConnection', array(), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'getMetadataFactory', array(), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'getExpressionBuilder', array(), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'beginTransaction', array(), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'getCache', array(), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->getCache();
    }
    public function transactional($func)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'transactional', array('func' => $func), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'wrapInTransaction', array('func' => $func), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'commit', array(), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->commit();
    }
    public function rollback()
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'rollback', array(), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'getClassMetadata', array('className' => $className), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'createQuery', array('dql' => $dql), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'createNamedQuery', array('name' => $name), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'createQueryBuilder', array(), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'flush', array('entity' => $entity), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'clear', array('entityName' => $entityName), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->clear($entityName);
    }
    public function close()
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'close', array(), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->close();
    }
    public function persist($entity)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'persist', array('entity' => $entity), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'remove', array('entity' => $entity), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'refresh', array('entity' => $entity), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'detach', array('entity' => $entity), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'merge', array('entity' => $entity), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'getRepository', array('entityName' => $entityName), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'contains', array('entity' => $entity), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'getEventManager', array(), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'getConfiguration', array(), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'isOpen', array(), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'getUnitOfWork', array(), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'getProxyFactory', array(), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'initializeObject', array('obj' => $obj), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'getFilters', array(), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'isFiltersStateClean', array(), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'hasFilters', array(), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return $this->valueHolderc7b94->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer94d3c = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderc7b94) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc7b94 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderc7b94->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, '__get', ['name' => $name], $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        if (isset(self::$publicProperties4604f[$name])) {
            return $this->valueHolderc7b94->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7b94;
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
        $targetObject = $this->valueHolderc7b94;
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
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7b94;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderc7b94;
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
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, '__isset', array('name' => $name), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7b94;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderc7b94;
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
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, '__unset', array('name' => $name), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7b94;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderc7b94;
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
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, '__clone', array(), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        $this->valueHolderc7b94 = clone $this->valueHolderc7b94;
    }
    public function __sleep()
    {
        $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, '__sleep', array(), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
        return array('valueHolderc7b94');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer94d3c = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer94d3c;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer94d3c && ($this->initializer94d3c->__invoke($valueHolderc7b94, $this, 'initializeProxy', array(), $this->initializer94d3c) || 1) && $this->valueHolderc7b94 = $valueHolderc7b94;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc7b94;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc7b94;
    }
}
