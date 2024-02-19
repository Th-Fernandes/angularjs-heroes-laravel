import "/services/opportunities.js";

angular
    .module("app.opportunities.controller", ["app.opportunities.service"])
    .controller("app.opportunities.controller", [
        "$scope",
        "opportunitiesService",
        function ($scope, opportunitiesService) {
            $scope.opportunities = opportunitiesService.opportunities();
        },
    ]);
