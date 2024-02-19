export default angular
    .module("app.opportunities.service", [])
    .factory("opportunitiesService", [
        "$resource",
        function ($resource) {
            function opportunities() {
                return $resource("localhost:8000/api/opportunities").query();
            }

            return {
                opportunities,
            };
        },
    ]);
