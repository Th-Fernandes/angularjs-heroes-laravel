angular
  .module('myApp.heroes.heroDetailsComponent', [])
  .component('heroDetails', {
    templateUrl: '/js/feature/heroes/components/hero-details/hero-details.html',
    controller: 
      function($routeParams, HeroesService, PageErrorsHandlerService) {
        this.hero = HeroesService.GETLifeCycle();

        HeroesService.findByUuid($routeParams.uuid)
          .catch(() => PageErrorsHandlerService.notifyError())
          .then(hero => this.hero.data = hero)
          .finally(() => this.hero.isFetchLoading = false)
      }
  })