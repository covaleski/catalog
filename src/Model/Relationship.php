<?php

namespace Covaleski\Laravel\Catalog\Model;

class Relationship
{
    /**
     * Create the relationship instance.
     */
    public function __construct(
        /**
         * Relation class name.
         */
        public string $relation,

        /**
         * Related model class name.
         */
        public string $model,
    ) {
        //
    }
}
