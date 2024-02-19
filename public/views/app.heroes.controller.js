import "/services/heroes.js";

angular
    .module("app.heroes.controller", ["app.heroes.service"])
    .controller("app.heroes.controller", function ($scope, heroesService) {
        heroesService.heroes()
            .then((heroes) => $scope.heroes = heroes);
    });
