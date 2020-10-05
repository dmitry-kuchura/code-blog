<?php

namespace App\Models\Enum;

abstract class Enum
{
    /** @var array */
    private static $cache = [];

    /** @var array */
    private static $objectCache = [];

    /** @var string $value */
    private $value = '';

    /** @var string[] */
    protected static $names = [];

    protected function __construct(string $value)
    {
        if (!static::isValid($value)) {
            throw new \UnexpectedValueException("Value '$value' is not part of the enum " . get_called_class());
        }

        $class = get_called_class();
        self::$objectCache[$class][$value] = $this;

        $this->value = $value;
    }

    public static function getInstance(string $value)
    {
        $class = get_called_class();
        if (isset(self::$objectCache[$class][$value])) {
            return self::$objectCache[$class][$value];
        }

        return new static($value);
    }

    public static function isValid(?string $value): bool
    {
        return in_array($value, static::toArray(), true);
    }

    public static function toArray(): array
    {
        $class = get_called_class();
        if (!array_key_exists($class, self::$cache)) {
            try {
                $reflection = new \ReflectionClass($class);
                self::$cache[$class] = $reflection->getConstants();
            } catch (\Throwable $e) {
                self::$cache[$class] = [];
            }
        }

        return self::$cache[$class];
    }

    public static function values(): array
    {
        $values = [];
        foreach (static::toArray() as $key => $value) {
            $values[$key] = static::getInstance($value);
        }

        return $values;
    }

    public static function getNames(): array
    {
        $names = [];
        foreach (static::toArray() as $value) {
            $names[$value] = static::$names[$value] ?? '';
        }

        return $names;
    }

    public function __toString()
    {
        return $this->getValue();
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function getName(): string
    {
        return static::$names[$this->getValue()] ?? $this->getValue();
    }

    final public function equals(?Enum $enum): bool
    {
        return $enum && ($this->getValue() === $enum->getValue()) && (get_called_class() === get_class($enum));
    }

    private function __clone()
    {

    }
}
