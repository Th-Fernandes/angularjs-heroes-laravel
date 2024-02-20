import "/services/heroes.js";

angular
    .module("app.hero-detail.controller", ["app.heroes.service"])
    .controller(
        "app.hero-detail.controller",
        function ($scope, $routeParams, heroesService) {
            heroesService.getById($routeParams.id)
                .then(hero => $scope.hero = hero);
        }
    );
