angular
  .module('app.subscriptions.service', [])
  .factory('subscriptionsService', 
    function() {
      let fetchedOpportunities = null;

      function opportunitiesSubscribedBySignedInUser() {
        if(!fetchedOpportunities)
          fetchedOpportunities = $resource("/subscriptions").query().$promise;

        return fetchedOpportunities;
      }

      return {opportunitiesSubscribedBySignedInUser}
    }
  )