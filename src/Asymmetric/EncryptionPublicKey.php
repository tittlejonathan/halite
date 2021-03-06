<?php
namespace ParagonIE\Halite\Asymmetric;

final class EncryptionPublicKey extends PublicKey
{
    /**
     * @param string $keyMaterial - The actual key data
     * @param bool $signing - Is this a signing key?
     */
    public function __construct($keyMaterial = '', ...$args) 
    {
        parent::__construct($keyMaterial, false);
    }
}
