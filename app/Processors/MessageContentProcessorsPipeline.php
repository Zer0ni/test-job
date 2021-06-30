<?php


namespace App\Processors;


class MessageContentProcessorsPipeline extends AbstractProcessorsPipeline implements \App\Contracts\ProcessorsPipeline
{
    protected function setDefaultProcessors():array {
        return [
            'EscapeTagsProcessor',
            'CensorProcessor',
        ];
    }
}
