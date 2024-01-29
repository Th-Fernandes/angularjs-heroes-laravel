angular
  .module('myApp.dashboard.lastCreatedHeroComponent', [])
  .component('lastCreatedHero', {
    templateUrl: '/js/feature/dashboard/components/last-created-hero.html',
    controller: function(HeroesService, PageErrorsHandlerService) {
      this.hero = HeroesService.GETLifeCycle();

      HeroesService.GET()
        .then(heroes => this.hero.data = heroes.at(-1))
        .catch(() => PageErrorsHandlerService.notifyError())
        .finally(() => this.hero.isFetchLoading = false);
    }
  })
