<?php

namespace DoctrineProxies\__CG__\Schweppesale\Module\Access\Domain\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \Schweppesale\Module\Access\Domain\Entities\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'confirmationCode', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'confirmed', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'createdAt', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'deletedAt', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'email', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'id', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'name', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'password', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'permissions', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'rememberToken', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'roles', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'status', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'accessToken', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'updatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'confirmationCode', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'confirmed', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'createdAt', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'deletedAt', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'email', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'id', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'name', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'password', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'permissions', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'rememberToken', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'roles', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'status', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'accessToken', '' . "\0" . 'Schweppesale\\Module\\Access\\Domain\\Entities\\User' . "\0" . 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function generateToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'generateToken', []);

        return parent::generateToken();
    }

    /**
     * {@inheritDoc}
     */
    public function addPermission(\Schweppesale\Module\Access\Domain\Entities\Permission $permission): \Schweppesale\Module\Access\Domain\Entities\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPermission', [$permission]);

        return parent::addPermission($permission);
    }

    /**
     * {@inheritDoc}
     */
    public function addRole(\Schweppesale\Module\Access\Domain\Entities\Role $role): \Schweppesale\Module\Access\Domain\Entities\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRole', [$role]);

        return parent::addRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function can($permission): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'can', [$permission]);

        return parent::can($permission);
    }

    /**
     * {@inheritDoc}
     */
    public function canMultiple(array $permissions, $strict = true): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'canMultiple', [$permissions, $strict]);

        return parent::canMultiple($permissions, $strict);
    }

    /**
     * {@inheritDoc}
     */
    public function changePassword(\Schweppesale\Module\Access\Domain\Values\Password $password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'changePassword', [$password]);

        return parent::changePassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function confirm(): \Schweppesale\Module\Access\Domain\Entities\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'confirm', []);

        return parent::confirm();
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthIdentifierName(): \Schweppesale\Module\Access\Domain\Values\EmailAddress
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthIdentifierName', []);

        return parent::getAuthIdentifierName();
    }

    /**
     * {@inheritDoc}
     */
    public function getRememberToken(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRememberToken', []);

        return parent::getRememberToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setRememberToken($rememberToken): \Schweppesale\Module\Access\Domain\Entities\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRememberToken', [$rememberToken]);

        return parent::setRememberToken($rememberToken);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfirmationCode(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfirmationCode', []);

        return parent::getConfirmationCode();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): \DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getDeletedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeletedAt', []);

        return parent::getDeletedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): \Schweppesale\Module\Access\Domain\Values\EmailAddress
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailForPasswordReset(): \Schweppesale\Module\Access\Domain\Values\EmailAddress
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailForPasswordReset', []);

        return parent::getEmailForPasswordReset();
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): \Schweppesale\Module\Access\Domain\Values\HashedPassword
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissions', []);

        return parent::getPermissions();
    }

    /**
     * {@inheritDoc}
     */
    public function hasPermissionTo($permission): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasPermissionTo', [$permission]);

        return parent::hasPermissionTo($permission);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus(): \Schweppesale\Module\Access\Domain\Values\User\Status
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): \DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function hasRole(string $name): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasRole', [$name]);

        return parent::hasRole($name);
    }

    /**
     * {@inheritDoc}
     */
    public function hasRoles(array $roles, $strict = true): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasRoles', [$roles, $strict]);

        return parent::hasRoles($roles, $strict);
    }

    /**
     * {@inheritDoc}
     */
    public function isConfirmed(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isConfirmed', []);

        return parent::isConfirmed();
    }

    /**
     * {@inheritDoc}
     */
    public function markAsDeleted(): \Schweppesale\Module\Access\Domain\Entities\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'markAsDeleted', []);

        return parent::markAsDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function must($permission)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'must', [$permission]);

        return parent::must($permission);
    }

    /**
     * {@inheritDoc}
     */
    public function preUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpdate', []);

        return parent::preUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name): \Schweppesale\Module\Access\Domain\Entities\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function setPermissions(array $permissions): \Schweppesale\Module\Access\Domain\Entities\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPermissions', [$permissions]);

        return parent::setPermissions($permissions);
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \Schweppesale\Module\Access\Domain\Entities\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function updateEmail(\Schweppesale\Module\Access\Domain\Values\EmailAddress $email): \Schweppesale\Module\Access\Domain\Entities\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateEmail', [$email]);

        return parent::updateEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function updateStatus(\Schweppesale\Module\Access\Domain\Values\User\Status $status): \Schweppesale\Module\Access\Domain\Entities\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateStatus', [$status]);

        return parent::updateStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthIdentifier', []);

        return parent::getAuthIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthPassword', []);

        return parent::getAuthPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getRememberTokenName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRememberTokenName', []);

        return parent::getRememberTokenName();
    }

}
