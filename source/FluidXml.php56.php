<?php

namespace FluidXml;

trait FluidXmlShadowTrait
{
}

trait FluidContextShadowTrait
{
        public function __call($method, $arguments)
        {
                $m = "{$method}_";

                if (\method_exists($this, $m)) {
                        return $this->$m(...$arguments);
                }

                throw new \Exception("Method '$method' not found.");
        }
}
