<?php
namespace EmployeePerformanceManagement;

use EmployeePerformanceManagement\Models\Employee;
use EmployeePerformanceManagement\Repositories\Criteria\Trashed as TrashedCriteria;
use EmployeePerformanceManagement\Repositories\ObjectivesPlansRepository;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

/**
 * ClosureTable service provider
 *
 * @package Franzose\ClosureTable
 */
class EmployeePerformanceServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('EmployeePerformanceManagement\Contracts\DocumentPreparer', function () {
            $model = new Employee();
            return $model;
        });

        app()->bind('EmployeePerformanceManagement\Contracts\Employee', function () {
            $model = new Employee();
            return $model;
        });

        app()->bind('EmployeePerformanceManagement\Repositories\ObjectivesPlansRepository', function ($app) {
            return new ObjectivesPlansRepository($app, (new Collection([
                new TrashedCriteria(false)
            ])));
        });

        app()->singleton('EmployeePerformanceManagement\DocumentsTypesList', function() {
            return new Collection([
                'ObjectivesPlan'
//                'EmployeePerformanceManagement\Models\ObjectivesPlan'
            ]);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}
