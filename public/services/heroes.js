angular
  .module('app.heroes.service', [])
  .factory('heroesService', 
    function($resource) {
      function heroes() {
        return $resource('/api/heroes').query();
      }

      return { heroes }
    })