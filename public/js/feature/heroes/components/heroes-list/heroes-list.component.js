angular
  .module('myApp.heroes.listComponent', [])
  .component('heroesList', {
    templateUrl: '/js/feature/heroes/components/heroes-list/heroes-list.html',
    controller: 
      function (HeroesService, PageErrorsHandlerService) {
        this.heroes = HeroesService.GETLifeCycle();
        
        HeroesService.GET()
          .catch(() => PageErrorsHandlerService.notifyError())
          .then(heroes => this.heroes.data = heroes)
          .finally(() => this.heroes.isFetchLoading = false)
      }
  })