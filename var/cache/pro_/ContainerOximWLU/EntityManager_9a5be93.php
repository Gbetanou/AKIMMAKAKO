<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5870b = null;
    private $initializer16369 = null;
    private static $publicPropertiese8cbc = [
        
    ];
    public function getConnection()
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'getConnection', array(), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'getMetadataFactory', array(), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'getExpressionBuilder', array(), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'beginTransaction', array(), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'getCache', array(), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->getCache();
    }
    public function transactional($func)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'transactional', array('func' => $func), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'commit', array(), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->commit();
    }
    public function rollback()
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'rollback', array(), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'getClassMetadata', array('className' => $className), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'createQuery', array('dql' => $dql), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'createNamedQuery', array('name' => $name), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'createQueryBuilder', array(), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'flush', array('entity' => $entity), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'clear', array('entityName' => $entityName), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->clear($entityName);
    }
    public function close()
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'close', array(), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->close();
    }
    public function persist($entity)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'persist', array('entity' => $entity), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'remove', array('entity' => $entity), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'refresh', array('entity' => $entity), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'detach', array('entity' => $entity), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'merge', array('entity' => $entity), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'contains', array('entity' => $entity), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'getEventManager', array(), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'getConfiguration', array(), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'isOpen', array(), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'getUnitOfWork', array(), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'getProxyFactory', array(), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'initializeObject', array('obj' => $obj), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'getFilters', array(), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'isFiltersStateClean', array(), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'hasFilters', array(), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return $this->valueHolder5870b->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer16369 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder5870b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5870b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder5870b->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, '__get', ['name' => $name], $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        if (isset(self::$publicPropertiese8cbc[$name])) {
            return $this->valueHolder5870b->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5870b;
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
        $targetObject = $this->valueHolder5870b;
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
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5870b;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder5870b;
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
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, '__isset', array('name' => $name), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5870b;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder5870b;
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
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, '__unset', array('name' => $name), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5870b;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5870b;
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
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, '__clone', array(), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        $this->valueHolder5870b = clone $this->valueHolder5870b;
    }
    public function __sleep()
    {
        $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, '__sleep', array(), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
        return array('valueHolder5870b');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer16369 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer16369;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer16369 && ($this->initializer16369->__invoke($valueHolder5870b, $this, 'initializeProxy', array(), $this->initializer16369) || 1) && $this->valueHolder5870b = $valueHolder5870b;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5870b;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5870b;
    }
}
