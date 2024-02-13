const app = angular.module("app", ["ngRoute", "app.routes"]);

app.config([
    "$locationProvider",
    "$routeProvider",
    function ($locationProvider, $routeProvider) {
        $locationProvider.hashPrefix("!");
        $routeProvider.otherwise({ redirectTo: "/heroes" });
    },
]);
