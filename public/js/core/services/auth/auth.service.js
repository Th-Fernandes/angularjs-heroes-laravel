import { HeroModel } from "./HeroModel.js";

export class AuthService {
    constructor(
        $rootScope,
        $location,
        $q,
        JwtService,
        $resource,
        API_ENDPOINTS
    ) {
        this.$rootScope = $rootScope;
        this.$location = $location;
        this.$q = $q;
        this.JwtService = JwtService;
        this.$resource = $resource;
        this.API_ENDPOINTS = API_ENDPOINTS;
    }

    redirectUnauthorizedUser() {
        this.$rootScope.$on("$routeChangeStart", (event, next) => {
            this.JwtService.onRouteChanging();
            const { isUnavailable } = this.JwtService.getToken();

            if (next.$$route?.private && isUnavailable)
                this.$location.path("/sign-in");
        });
    }

    signIn({ email, password }) {
        const queryUrl =
            this.API_ENDPOINTS.HEROES + `/isValid?email=${email}&password=${password}`;

        return this.$resource(queryUrl).save().$promise
            .catch((e) => this.$q.reject("API OFF: ", e))
            .then((res) => {
                const signedInUserId = res[0].id;
                this.JwtService.storeOnClient(signedInUserId);
                return this.$q.resolve(true);
            });
    }

    signPromiseFactory() {
        return { isLoading: false, errorMessage: null };
    }

    signUp(heroData) {
        // TODO: REFACTOR THIS SECTION INTO A NEW METHOD
        const heroDataChecking = this.$q.defer();
        const standardizedHero = new HeroModel(heroData).set();
        if (standardizedHero.hasError) {
            heroDataChecking.reject(standardizedHero.errorMessage);
            return heroDataChecking.promise;
        }
        /* ===================== */
        return this.$resource(this.API_ENDPOINTS.HEROES)
            .save(standardizedHero)
            .$promise.catch(() => this.$q.reject("API OFF"))
            .then(() => this.$q.resolve(true));
    }

    signOut() {
        this.JwtService.removeToken();
        this.$location.path("/sign-in");
    }
}
