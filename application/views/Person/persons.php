<h1>List of Persons</h1>
<!-- structure for a list of persons, with the CRUD -->
<div class="body" ng-controller="personsCtrl">
  <div class="text-right">
    <button ng-click="Add()" class="btn" >Add Person</button><br><br>
  </div>
  <div class="text-right">
    <input type="text" class="search-query" placeholder="Search" ng-model="search_query">
  </div>
  <div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Last Name</th>
          <th>Date of Birth</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr ng-repeat="(index, person) in persons | filter: search_query">
          <td ng-bind="person.name"></td>
          <td ng-bind="person.lastName"></td>
          <td ng-bind="person.birthdate"></td>
          <td style="text-align: right!important;">
            <button class="btn" ng-click="Update(index)">Update</button>
            <button class="btn" ng-click="Delete(index)">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>