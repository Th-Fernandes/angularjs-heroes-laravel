"use strict";

angular
  .module("myApp.heroes", [
    "ngRoute",
    "myApp.heroes.listComponent", 
    "myApp.heroes.heroDetailsComponent",
  ])
  .config([
    "$routeProvider",
    function ($routeProvider) {
      $routeProvider
        .when("/heroes", {
          template: 
            '<page-errors-handler>'+
              '<heroes-list> </heroes-list>'+    
            '</page-errors-handler>',
        })
        .when("/heroes/:uuid", {
          template: 
          '<page-errors-handler>'+
            '<hero-details> </hero-details>'+
          '</page-errors-handler>',
          private: true
        })
    },
  ]);
