angular
  .module('myApp.layout.header', [])
  .component('layoutHeader', {
    templateUrl: '/js/core/layout/header.html',
    controller: function($rootScope,) {
        // this.signOut = () => AuthService.signOut();

        $rootScope.$watch('userToken', value => {
         value ? this.isUserSignedIn = true : this.isUserSignedIn = false;
        });
      }
  })