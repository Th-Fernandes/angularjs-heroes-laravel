angular
    .module("app.routes", [
        "ngRoute",
        "app.heroes.controller",
        "app.hero-detail.controller",
    ])
    .config([
        "$routeProvider",
        function ($routeProvider) {
            $routeProvider
                .when("/opportunities", {
                    template: "templa resource",
                })
                .when("/heroes", {
                    templateUrl: "/views/app.heroes.html",
                })
                .when("/heroes/:id", {
                    templateUrl: "/views/app.hero-details.html",
                });
        },
    ]);
