<?php


trait CamelCase
{

    public function __set($name, $value)
    {
        $method = $this->snakeCaseToCamelCase($name);
        if (method_exists($this, $method)) {
            $this->$method($value);
        }
    }

    protected function snakeCaseToCamelCase($str)
    {
        $upperCamelCase = str_replace('_', '', ucwords($str, '_'));

        return 'set' . ucwords(strtolower(substr($upperCamelCase, 0, 1)) . substr($upperCamelCase, 1));
    }

}