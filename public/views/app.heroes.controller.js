import "/services/heroes.js";
import "/services/authChecker.js";

angular
    .module("app.heroes.controller", [
        "app.heroes.service",
        "app.authChecker.service",
    ])
    .controller(
        "app.heroes.controller",
        function ($scope, heroesService, ) {
            heroesService.heroes()
                .then((heroes) => ($scope.heroes = heroes));

            $scope.setUserPhotoSrc = (photoUrl) => {
                if(!photoUrl) return "/assets/default-user-profile-picture.webp";
                return photoUrl
            }
        }
    );
