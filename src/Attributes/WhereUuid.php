<?php


namespace Spatie\RouteDiscovery\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_CLASS)]
class WhereUuid extends Where
{
    public function __construct(string $param)
    {
        $this->param = $param;

        $this->constraint = '[\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}';
    }
}
