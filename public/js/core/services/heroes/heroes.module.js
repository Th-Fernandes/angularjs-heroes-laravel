import { HeroesService } from "./heroes.service.js";

angular
  .module("myApp.heroes.service", ["ngResource"])
  .factory("HeroesService", HeroesService);
  