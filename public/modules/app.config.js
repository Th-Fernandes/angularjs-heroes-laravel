angular
    .module("app.routes", [
        "ngRoute",
        "app.heroes.controller",
        "app.hero-detail.controller",
        "app.opportunities.controller"
    ])
    .config([
        "$routeProvider",
        function ($routeProvider) {
            $routeProvider
                .when("/opportunities", {
                    templateUrl: "/views/app.opportunities.html",     
                })
                .when("/heroes", {
                    templateUrl: "/views/app.heroes.html",
                })
                .when("/heroes/:id", {
                    templateUrl: "/views/app.hero-details.html",
                });
        },
    ]);
