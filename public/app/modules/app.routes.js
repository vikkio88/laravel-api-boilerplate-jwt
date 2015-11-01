(
    function() {
        "use strict";
        var app_routes = angular.module("app.routes",
            [
                "ui.router",
                "ncy-angular-breadcrumb"
            ]
        );

        app_routes.config(
            [
                "$stateProvider",
                "$urlRouterProvider",
                "$locationProvider",
                function(
                    $stateProvider,
                    $urlRouterProvider,
                    $locationProvider
                )
                {
                    /*
                    Unfortunately laravel router makes this unable to work
                    $locationProvider.html5Mode({
                        enabled: true,
                        requireBase: false
                    });
                    */

                    //Hashbang
                    $locationProvider.hashPrefix("!");

                    $urlRouterProvider.otherwise("/default");

                    $stateProvider
                    //Sections
                        .state("ping",
                            {
                                url:"/ping",
                                templateUrl: "app/",
                                controller: "ControllerCtrl as vm",
                                ncyBreadcrumb: {
                                    label: 'Ping'
                                }
                            }
                        );
                }]
        );

    }
)();