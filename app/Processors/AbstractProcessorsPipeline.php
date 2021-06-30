<?php


namespace App\Processors;


use App\Contracts\StringDataProcessor;

abstract class AbstractProcessorsPipeline implements \App\Contracts\ProcessorsPipeline
{
    private $processors = [];
    private $defaultProcessors = [];

    public function construct()
    {
        $this->setDefaultProcessors();
        $this->setProcessors($this->defaultProcessors);
    }

    public function doProcess(string $value):string
    {
        foreach ($this->processors as $processor) {
            $value = $processor->process($value);
        }
        return $value;
    }

    protected function setProcessors(array $processorsList) {
        foreach ($processorsList as $processorName) {
            if (class_exists($processorName)) {
                $processor = new $processorName();
                if ($processor instanceof StringDataProcessor) {
                    $this->processors[] = $processor;
                } else {
                    echo($processorName.' class is not StringDataProcessor');
                    //In real project code-throw wrong type exception
                }
            } else {
                echo($processorName.' class dont exists');
                //In real project code-throw class dont exists exception
            }
        }
    }
    abstract protected function setDefaultProcessors(): array;
}
