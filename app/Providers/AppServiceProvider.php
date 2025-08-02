<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        Paginator::defaultView('vendor.pagination.bootstrap-4');
//
//        DB::listen(function (QueryExecuted $query){
//            Log::debug('SQL RUN BEAcHES: ' . $query->sql);
//        });

        if (config('app.debug')) {
            DB::listen(function (QueryExecuted $query) {
                $sql = str_replace(['%', '?'], ['%%', "'%s'"], $query->sql);
                $fullSql = vsprintf($sql, $query->bindings);

                Log::debug('SQL RUN BEAcHES:', [
                    'query' => $fullSql,
                    'time' => $query->time.'ms',
                    'connection' => $query->connectionName
                ]);
            });
        }
    }
}
