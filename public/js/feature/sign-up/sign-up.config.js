angular
  .module("myApp.signUp", [
    'myApp.signUp.signUpFormComponent'
  ])
  .config(
    function($routeProvider) {
      $routeProvider
        .when('/sign-up', {
          template: '<sign-up-form></sign-up-form>'
        })        
    }
  )  

