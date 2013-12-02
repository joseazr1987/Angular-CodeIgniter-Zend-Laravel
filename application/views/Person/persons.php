<h1>List of Persons</h1>
<!-- structure for a list of persons, with the CRUD -->
<div class="body" ng-controller="personsCtrl">
  <div class="text-right">
    <!-- <input type="text" class="search-query" placeholder="Search" ng-model="search_query"> -->
    <button ng-click="Add()" class="btn btn-primary" ><i class="icon-plus icon-white"></i></button><br><br>
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
        <tr ng-repeat=" (index, person) in filteredPersons">
          <td ng-bind="person.name"></td>
          <td ng-bind="person.lastName"></td>
          <td ng-bind="person.birthdate"></td>
          <td style="text-align: right!important;">
            <button class="btn btn-info" ng-click="Update(index)"><i class="icon-pencil icon-white"></i></button>
            <button class="btn btn-danger" ng-click="Delete(index)"><i class="icon-remove icon-white"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="text-right"
    data-pagination=""
    data-num-pages="numPages()"
    data-current-page="currentPage"
    data-max-size="maxSize"
    data-boundary-links="true">
  </div>
  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>