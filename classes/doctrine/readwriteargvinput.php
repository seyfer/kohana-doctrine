<?php

/**
 * option parsing
 */
class Doctrine_ReadWriteArgvInput extends Symfony\Component\Console\Input\ArgvInput
{

    public function setOption($name, $value)
    {
        if (!$this->hasOption($name)) {
            $this->definition->addOption(new \Symfony\Component\Console\Input\InputOption($name));
        }
        parent::setOption($name, $value);
    }

    /**
     * Binds the current Input instance with the given arguments and options.
     * @param Symfony\Component\Console\Input\InputDefinition $definition A InputDefinition instance
     */
    public function bind(Symfony\Component\Console\Input\InputDefinition $definition)
    {
        $this->definition = $definition;
        $this->parse();
    }

}
