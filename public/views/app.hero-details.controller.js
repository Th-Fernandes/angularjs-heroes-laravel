import "/services/heroes.js";

angular
    .module("app.hero-detail.controller", ["app.heroes.service"])
    .controller(
        "app.hero-detail.controller",
        function ( $scope, $routeParams, $window, heroesService, authCheckerService){
            authCheckerService.isUserAuthorized()
                .then(({isAuth}) => redirectUnauthorizedUser(isAuth));

            function redirectUnauthorizedUser(isAuth) {
                if(!isAuth) $window.location.href = "http://localhost:8000/login";
            }

            heroesService.getById($routeParams.id)
                .then((hero) => ($scope.hero = hero));
        }
    );
