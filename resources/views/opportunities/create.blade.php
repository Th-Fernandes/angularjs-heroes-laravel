<x-guest-layout>
  <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
    <form method="POST" action="{{ route('opportunities.store') }}" ng-app="postOpportunityPage" name="postOpportunityForm" ng-model-options="{debounce: 400}">
      @csrf

      <!-- Title -->
      <div>

        <x-input-label for="title" :value="__('Title')" />
        <x-text-input id="title" type="text" name="title" required ng-model="inputs.values.title" ng-minlength="5" />

        <ng-messages for="postOpportunityForm.title.$error" ng-cloak>
          <ng-message when="minlength">your title is too short!</ng-message>
        </ng-messages>
      </div>


      <!-- Description -->
      <div>
        <x-input-label for="description" :value="__('Description')" />
        <x-text-input id="description" type="text" name="description" required ng-model="inputs.values.description" ng-minlength="30" ng-required="true" />

        <ng-messages ng-show="postOpportunityForm.description.$dirty" for="postOpportunityForm.description.$error" ng-cloak>
          <ng-message when="minlength">your description should have at least 30 characters</ng-message>
          <ng-message when="required">This field is required</ng-message>
        </ng-messages>
      </div>

      <button type="submit">{{__('Submit')}}</button>
    </form>
  </div>
</x-guest-layout>

<script>
  const postOpportunityPage = angular.module('postOpportunityPage', ['ngMessages']);
</script>