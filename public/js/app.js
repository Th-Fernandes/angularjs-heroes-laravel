angular
    .module("myApp", [
        "ngRoute",
        "ngResource",
        "myApp.signIn",
        "myApp.layout.header",
        "myApp.auth",
        "myApp.core.services.pageErrorsHandlerService",
    ])
    .run([
        "AuthService",
        "PageErrorsHandlerService",
        (AuthService, PageErrorsHandlerService) => {
            AuthService.redirectUnauthorizedUser();
            PageErrorsHandlerService.clearPreviousErrorsOnRouteChanging();
        },
    ])
    .constant("API_ENDPOINTS", {
        HEROES: "http://localhost:3000/heroes",
        OPPORTUNITIES: "http://localhost:3000/opportunities",
    })
    .config([
        "$locationProvider",
        "$routeProvider",
        function ($locationProvider, $routeProvider) {
            $locationProvider.hashPrefix("!");
            $routeProvider.otherwise({ redirectTo: "/dashboard" });
        },
    ]);