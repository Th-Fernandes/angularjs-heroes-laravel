angular
    .module("app.authChecker.service", [])
    .factory("authCheckerService", function ($resource) {
        const fetchedAuthorizedStatus = $resource("/isUserAuthorized");

        function isUserAuthorized() {
            return fetchedAuthorizedStatus.get().$promise;
        }

        return { isUserAuthorized };
    });
