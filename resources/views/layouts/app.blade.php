<!DOCTYPE html>
<html lang="en" ng-app="app">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
  <header class="bg-sky-700 text-white flex flex-col sm:flex-row justify-between p-4">
    <div class="flex flex-col sm:flex-row text-center gap-4">
      <h1 class="text-md font-bold">ANGULARJS + LARAVEL HEROES</h1>
      <nav>
        <ul class="sm:flex gap-2">
          <li><a href="#!/heroes">Heroes</a></li>
          <li><a href="#!/opportunities">opportunities</a></li>
        </ul>
      </nav>
    </div>

    <button><a href="login">Sign in</a></button>
  </header>

  <ng-view>
  </ng-view>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.5/angular.min.js" integrity="sha512-8HMKqVxk5EaXfHPCUE6YwxvObaL288uUUKL5JA7Py7DKmHaox9DJmKUuUJIX4l8vvyuwjKBmGFrGYBALXVtYFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-route/1.7.5/angular-route.min.js" integrity="sha512-wcLvfyuqjF3dvC2eg3V3SIUoAafQO8Nkrb8VPmaKgv+IW2J4vP5bFv71GGxChyyTCL/ViggVNvuZ3uu8WKlbBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-resource/1.7.5/angular-resource.min.js" integrity="sha512-PK7RpL0pJr+SB/HESItDG4s/UlFJk/JOg+i4cypqZcGtvyf1AfIyGNCGhw/tjMyXbtsRMyIkmhZiTyz7QdFF0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="/modules/app.module.js" type="module"></script>
  <script src="/modules/app.config.js" type="module"></script>
  <script src="/views/app.heroes.controller.js" type="module"></script>
  <script src="/views/app.hero-details.controller.js" type="module"></script>
  <script src="/views/app.opportunities.controller.js" type="module"></script>
</body>

</html>