angular
    .module("app.heroes.controller", [])
    .controller("app.heroes.controller", [
        "$scope",
        function ($scope) {
            $scope.viewName = "heroes";
        },
    ]);