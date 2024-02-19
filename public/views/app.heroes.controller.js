import "/services/heroes.js";

angular
    .module("app.heroes.controller", ["app.heroes.service"])
    .controller("app.heroes.controller", function ($scope, heroesService) {
        $scope.heroes = heroesService.heroes();
    });
