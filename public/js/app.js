angular
    .module("myApp", [
        "ngRoute",
        "ngResource",
        "ngMessages",
        "myApp.layout.header",
        "myApp.auth",
        "myApp.core.services.pageErrorsHandlerService",
        "myApp.dashboard",
        "myApp.core.components",
        "myApp.heroes.service",
        "myApp.opportunitiesService",
        "myApp.heroes",
        "myApp.opportunities",
        "myApp.signIn",
        "myApp.signUp",
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
        HEROES: "http://localhost:8000/api/heroes",
        OPPORTUNITIES: "http://localhost:8000/api/opportunities",
    })
    .config([
        "$locationProvider",
        "$routeProvider",
        function ($locationProvider, $routeProvider) {
            $locationProvider.hashPrefix("!");
            $routeProvider.otherwise({ redirectTo: "/dashboard" });
        },
    ]);