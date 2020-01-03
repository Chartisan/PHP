<?php

declare(strict_types = 1);

namespace Chartisan\PHP;

/**
 * Represents the dataset information.
 */
class DatasetData
{
    /**
     * Stores the dataset ID.
     *
     * @var int
     */
    public int $id;

    /**
     * Stores the dataset name.
     *
     * @var string
     */
    public string $name;

    /**
     * Stores the dataset values.
     *
     * @var int[]
     */
    public array $values;

    /**
     * Stores the dataset extra information if needed.
     *
     * @var array
     */
    public array $extra;

    /**
     * Creates a new instance of DatasetData.
     *
     * @param string $name
     * @param array $values
     * @param integer $id
     * @param array $extra
     */
    public function __construct(string $name, array $values, int $id, array $extra)
    {
        $this->name = $name;
        $this->values = $values;
        $this->id = $id;
        $this->extra = $extra;
    }
}
