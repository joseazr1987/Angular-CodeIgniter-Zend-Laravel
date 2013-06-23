<div ng-controller="personsCtrl">
  <h1><?=$action?> Person</h1>
  <div class="body">
    <form id="person">
      <div class="control-group">
        <label class="control-label" for="person.name">Name</label>
        <div class="controls">
          <input type="text" ng-model="person.name" placeholder="Name">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="person.lastName">Last Name</label>
        <div class="controls">
          <input type="text" ng-model="person.lastName" placeholder="Last Name">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="person.birthdate">Birthdate</label>
        <div class="controls">
          <input type="date" ng-model="person.birthdate">
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <button class="btn" ng-click="Save(person)">Save</button>
          <button class="btn" ng-click="Cancel(person)">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>