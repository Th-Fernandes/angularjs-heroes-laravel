export default angular
    .module("app.opportunities.service", [])
    .factory("opportunitiesService", [
        "$resource",
        function ($resource) {
            let fetchedOpportunities = null;

            function opportunities() {
                if (!fetchedOpportunities)
                    fetchedOpportunities = $resource("/api/opportunities").query().$promise;
                return fetchedOpportunities;
            }

            return {
                opportunities,
            };
        },
    ]);
