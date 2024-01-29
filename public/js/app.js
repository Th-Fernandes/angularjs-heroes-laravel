angular
    .module("myApp", [
        "ngRoute",
        "myApp.signIn",
        "myApp.layout.header"
    ])
    .run()
    .constant('API_ENDPOINTS', {
        HEROES: 'http://localhost:3000/heroes',
        OPPORTUNITIES: "http://localhost:3000/opportunities"
    })