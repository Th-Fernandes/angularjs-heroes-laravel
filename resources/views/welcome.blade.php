<!DOCTYPE html>
<html lang="en-US" ng-app="myApp">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <layout-header></layout-header>
    <ng-view></ng-view>

    <!-- angular-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.5/angular.min.js" integrity="sha512-8HMKqVxk5EaXfHPCUE6YwxvObaL288uUUKL5JA7Py7DKmHaox9DJmKUuUJIX4l8vvyuwjKBmGFrGYBALXVtYFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-route/1.7.5/angular-route.min.js" integrity="sha512-wcLvfyuqjF3dvC2eg3V3SIUoAafQO8Nkrb8VPmaKgv+IW2J4vP5bFv71GGxChyyTCL/ViggVNvuZ3uu8WKlbBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-resource/1.7.5/angular-resource.min.js" integrity="sha512-PK7RpL0pJr+SB/HESItDG4s/UlFJk/JOg+i4cypqZcGtvyf1AfIyGNCGhw/tjMyXbtsRMyIkmhZiTyz7QdFF0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="/js/app.js"></script>
    <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/angular-messages/1.8.3/angular-messages.js"></script>
    <!--Third party libs -->
    <script type="module" src="https://unpkg.com/uuid@8.1.0/dist/umd/uuidv4.min.js"></script>
    <!--Route features-->
    <script type="module" src="/js/feature/dashboard/dashboard.config.js"></script>
    <script type="module" src="/js/feature/heroes/heroes.config.js"></script>
    <script type="module" src="/js/feature/opportunities/opportunities.config.js"></script>
    <!--services-->
    <script type="module" src="/js/core/services/auth/auth.module.js"></script>
    <script type="module" src="/js/core/services/page-errors-handler/page-errors-handler.module.js"></script>
    <script type="module" src="/js/core/services/heroes/heroes.module.js"></script>
    <script type="module" src="/js/core/services/opportunities/opportunities.service.js"></script>
    <!--Filters-->
    <script type="module" src="/js/feature/opportunities/services/millisecondsToDate.filter.js"></script>
    <!--components-->
    <script type="module" type="module" src="/js/core/layout/header.component.js"></script>
    <script type="module" src="/js/core/components/core-components.js"></script>
    <script type="module" src="/js/core/components/page-errors-handler/page-errors-handler.component.js"></script>
    <script type="module" src="/js/feature/dashboard/components/last-created-hero.component.js"></script>
    <script type="module" src="/js/feature/dashboard/components/signed-in-hero-opportunities.component.js"></script>
    <script type="module" src="/js/feature/heroes/components/heroes-list/heroes-list.component.js"></script>
    <script type="module" src="/js/feature/heroes/components/hero-details/hero-details.component.js"></script>
    <script type="module" src="/js/feature/opportunities/components/publish-opportunity-redirector/publish-opportunity-redirector.component.js"></script>
    <script type="module" src="/js/feature/opportunities/components/opportunities-list/opportunities-list.component.js"></script>
    <script type="module" src="/js/feature/opportunities/components/publish-opportunity-form/publish-opportunity-form.component.js"></script>
</body>

</html>