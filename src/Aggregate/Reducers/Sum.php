<?php

namespace Ehann\RediSearch\Aggregate\Reducers;

class Sum extends AbstractReducer
{
    public function toArray(): array
    {
        return ['SUM', '1', $this->fieldName];
    }
}
