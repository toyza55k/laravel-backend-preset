<?php

namespace Toyza55k\Backend\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use InvalidArgumentException;
use Symfony\Component\Console\Input\InputOption;
use Toyza55k\Backend\Commands\ModelReplacements;

class BackendMakeExportCommand extends GeneratorCommand
{
    use ModelReplacements;

    protected $name = 'make:backend-export';

    protected $description = 'Create Backend Export';

    protected $type = 'Export';

    protected function getStub()
    {
        return __DIR__.'/../stubs/backend/export.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Exports\Backend';
    }

    protected function buildClass($name)
    {
        $replace = [];

        if ($this->option('model')) {
            $replace = $this->buildModelReplacements($replace, $this->option('model'));
        }

        return str_replace(
            array_keys($replace), array_values($replace), parent::buildClass($name)
        );
    }

    protected function getOptions()
    {
        return [
            ['model', 'm', InputOption::VALUE_OPTIONAL, 'Generate a resource request for the given model.']
        ];
    }
}
