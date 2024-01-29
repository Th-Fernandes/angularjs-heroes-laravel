angular
  .module('myApp.core.components.pageErrorsHandlerComponent', [])
  .component('pageErrorsHandler', {
    templateUrl: '/js/core/components/page-errors-handler/page-errors-handler.html', 
    transclude: true,
    controller: function(PageErrorsHandlerService, $window) { 
      this.errorHandler = PageErrorsHandlerService;
      this.refreshPage = () => $window.location.reload();
    }
  })