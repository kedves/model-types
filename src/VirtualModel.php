<?php

namespace Gimmersta\Cronos\Core\Models\Types;

use Illuminate\Database\Eloquent\Model;

abstract class VirtualModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $table = false;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = false;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Save the model to the database.
     *
     * @param array $options
     *
     * @throws \LogicException
     *
     * @return void
     */
    public function save(array $options = [])
    {
        throw new \LogicException('Cannot save virtual model');
    }

    /**
     * Get the value of the model's primary key.
     *
     * @throws \InvalidArgumentException
     *
     * @return mixed
     */
    public function getKey()
    {
        if (! $this->getKeyName()) {
            throw new \InvalidArgumentException("Virtual model doesn't have a primary key");
        }
        return parent::getKey();
    }
}
