

angular.module("myApp.signIn.signInFormComponent", []).component("signInForm", {
  templateUrl: "/js/feature/sign-in/components/sign-in/sign-in.html",
  controller: 
    function ($location, AuthService) {
      this.inputs = new InputGroupFactory();
      this.signInPromise = AuthService.signPromiseFactory(); 

      this.onSubmitSignInCredentials = () => {
        this.signInPromise.isLoading = true;

        AuthService.signIn(this.inputs.values)
          .catch(errorMessage => onSignInError(errorMessage))
          .then((hasSignInSucceded) => hasSignInSucceded && $location.path("/heroes"))
          .finally(() => this.signInPromise.isLoading = false)
      };

      const onSignInError = (errorMessage) => {
        this.signInPromise.errorMessage = errorMessage;
        cleanUpInputs();
      }

      const cleanUpInputs = () => {
        const cleanedUpCredentials = new InputGroupFactory();
        Object.assign(this.inputs , cleanedUpCredentials);
      };
    },
});


class InputGroupFactory {
  email = {
      value: '',
      pattern: /^(([^<>()\[\]\.,;:\s@\”]+(\.[^<>()\[\]\.,;:\s@\”]+)*)|(\”.+\”))@(([^<>()[\]\.,;:\s@\”]+\.)+[^<>()[\]\.,;:\s@\”]{2,})$/i
  }

  password = {
      value: "",
      pattern: /^([^A-Z]*[A-Z][^A-Z]*){2}.*$/,
  }

  get values() {
    return { email: this.email.value, password: this.password.value }
  }
}