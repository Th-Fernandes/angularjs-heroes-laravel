angular
  .module('app.heroes.service', [])
  .factory('heroesService', 
    function($resource) {
      let fetchedHeroes = null

      function heroes() {
        if(!fetchedHeroes)
          fetchedHeroes = $resource("/api/heroes").query().$promise;
        return fetchedHeroes
      }

      return { heroes }
    })