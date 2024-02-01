angular
  .module('myApp.dashboard.heroOpportunitiesComponent', [])
  .component('signedInHeroOpportunities', {
    templateUrl: '/js/feature/dashboard/components/signed-in-hero-opportunities.html',
    controller: Controller
  })

function Controller(OpportunitiesService, PageErrorsHandlerService){
  this.opportunities = OpportunitiesService.GETLifeCycle();

  OpportunitiesService.getByCreatorId()
    .then((res) => (this.opportunities.data = res))
    .catch(() => PageErrorsHandlerService.notifyError())
    .finally(() => (this.opportunities.isFetchLoading = false));
}