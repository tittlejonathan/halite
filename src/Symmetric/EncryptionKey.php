<?php
namespace ParagonIE\Halite\Symmetric;

final class EncryptionKey extends SecretKey
{
    /**
     * @param string $keyMaterial - The actual key data
     */
    public function __construct($keyMaterial = '', ...$args)
    {
        parent::__construct($keyMaterial, false);
    }
}
