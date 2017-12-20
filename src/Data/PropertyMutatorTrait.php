<?php

declare (strict_types=1);

namespace Maleficarum\Data;

trait PropertyMutatorTrait {
    /**
     * @param string $propertyName
     *
     * @return string
     */
    protected function getGetterMethod(string $propertyName): string {
        return 'get' . str_replace(' ', '', ucwords($propertyName));
    }

    /**
     * @param string $propertyName
     *
     * @return string
     */
    protected function getSetterMethod(string $propertyName): string {
        return 'set' . str_replace(' ', '', ucwords($propertyName));
    }
}