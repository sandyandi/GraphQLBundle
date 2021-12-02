<?php

declare(strict_types=1);

namespace Overblog\GraphQLBundle\Config;

class InterfaceTypeDefinition extends TypeWithOutputFieldsDefinition
{
    public function getDefinition()
    {
        $node = self::createNode('_interface_config');

        $node
            ->children()
                ->append($this->nameSection())
                ->append($this->outputFieldsSelection())
                ->append($this->resolveTypeSection())
                ->append($this->descriptionSection())
                ->append($this->descriptionSection())
                ->arrayNode('interfaces')
                    ->prototype('scalar')->info('One of internal or custom interface types.')->end()
            ->end();

        return $node;
    }
}
