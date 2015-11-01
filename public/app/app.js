(
    function(){
      "use strict";
        var app = angular.module("APPNAME",
            [
                "app.constant",
                "app.routes",
                "app.common",
                "app.directives",
                "cgBusy"
            ]
        );

        //UcFirst
        app.filter('capitalize',
            function(){
                return function(input){
                    return (!!input) ? input.charAt(0).toUpperCase()+input.substr(1).toLowerCase() : "";
                }
            }
        );

        //Misc Configurations
        //cgBusy
        app.value('cgBusyDefaults',{
            message:'Loading...',
            delay: 300,
            minDuration: 300
        });

    }
)();