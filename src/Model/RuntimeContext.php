<?php

namespace Kodus\Sentry\Model;

class RuntimeContext implements Context
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $version;

    /**
     * @var string
     */
    public string $raw_description;

    public function __construct(string $name, string $version, string $raw_description)
    {
        $this->name = $name;
        $this->version = $version;
        $this->raw_description = $raw_description;
    }

    public function getType(): string
    {
        return "runtime";
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}
