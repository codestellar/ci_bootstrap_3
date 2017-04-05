<?php
defined('BASEPATH') OR exit('No direct script access allowed');

namespace MySwaggerDefinitions;

/**
 * @SWG\Definition(
 *   definition="User",
 *   type="object"
 * )
 */
class User {
    /**
     * @SWG\Property(type="string")
     */
    public $name;
}