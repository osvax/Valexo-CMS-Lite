<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\File;

class GenerateRoutesJson extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'route:json';

    /**
     * @var
     */
    protected $router;


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Создание роутов в формате json';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Router $router)
    {
        parent::__construct();

        $this->setRouter($router);
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $routes = [];

        foreach ($this->getRouter()->getRoutes() as $route){
            $routes[ $route->getName() ] = $route->uri();
        }

        File::put(resource_path('../routes/routes.json'), json_encode($routes, JSON_PRETTY_PRINT));

    }

    /**
     * @return mixed
     */
    public function getRouter(): Router
    {
        return $this->router;
    }

    /**
     * @param mixed $router
     */
    public function setRouter( Router $router ): void
    {
        $this->router = $router;
    }
}
