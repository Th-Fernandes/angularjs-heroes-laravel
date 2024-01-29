angular
    .module("myApp", [
        "ngRoute",
        "ngResource",
        "myApp.signIn",
        "myApp.layout.header",
        "myApp.auth",
    ])
    .run()
    .constant("API_ENDPOINTS", {
        HEROES: "http://localhost:3000/heroes",
        OPPORTUNITIES: "http://localhost:3000/opportunities",
    });