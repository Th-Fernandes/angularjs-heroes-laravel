export default angular
    .module("app.opportunities.service", [])
    .factory("opportunitiesService", [
        "$resource",
        function ($resource) {
            function opportunities() {
                return $resource("/api/opportunities").query();
            }

            return {
                opportunities,
            };
        },
    ]);
