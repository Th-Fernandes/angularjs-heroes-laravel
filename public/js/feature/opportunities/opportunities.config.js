"use strict";

angular
  .module("myApp.opportunities", [
    'myApp.opportunities.publishOpportunityRedirectorComponent',
    'myApp.opportunities.opportunitiesListComponent',
    'myApp.opportunities.millisecondsToDate',
    'myApp.opportunities.publishOpportunityFormComponent',
  ])
  .config([
    "$routeProvider",
    function($routeProvider) {
      $routeProvider
        .when("/opportunities", {
          template: 
            '<page-errors-handler>'+
              '<publish-opportunity-redirector> </publish-opportunity-redirector>'+
              '<opportunities-list></opportunities-list>'+
            '</page-errors-handler>',
          })
        .when("/opportunities/publish", {
          template: '<publish-opportunity-form></publish-opportunity-form>',
          private: true
        })    
    }
  ])


  
