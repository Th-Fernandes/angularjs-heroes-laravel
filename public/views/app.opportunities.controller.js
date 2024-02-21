import "/services/opportunities.js";

angular
    .module("app.opportunities.controller", ["app.opportunities.service"])
    .controller("app.opportunities.controller", [
        "$scope",
        "opportunitiesService",
        function ($scope, opportunitiesService) {
            opportunitiesService.opportunities()
                .then(opportunities => $scope.opportunities = opportunities);
        },
    ]);
