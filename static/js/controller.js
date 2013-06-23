
// Global vars
var BASE_URL = "http://localhost/CodeIgniter/ci2/";
var dialogOptions = { controller: 'modalCtrl' };
var alerts = [];


var app = angular.module('myApp', ['ui.bootstrap']);

// Controlador de alertas
app.controller('AlertCtrl',
   function AlertCtrl($scope){
    $scope.alerts = alerts;
    $scope.closeAlert = function(index) { $scope.alerts.splice(index, 1); };
  });

// Controlador de los modales
app.controller('modalCtrl',
   function modalCtrl($scope, dialog, person){
    $scope.person = person;
    $scope.Save = function(result){ dialog.close(result); };
    $scope.Cancel = function(){ dialog.close(undefined); };
  });


/// person
app.controller('personsCtrl',
   function personsCtrl($scope, $dialog, $http){

    $scope.persons = []; // empty list

    // get all persons
    $http.get(BASE_URL + 'Persons/PersonsList').success(function(data){ $scope.persons = data; });

    // Add Action
    $scope.Add = function(){
      dialogOptions.resolve = { person: function(){ return undefined; } }; // this will help to use the modal controler in Add and Edit Methods
      $dialog.dialog(dialogOptions)
      .open(BASE_URL + 'Persons/Add') // use the view
      .then(function(person){
        // send the data from the view to the controller with ajax
        $http({
          url: BASE_URL + 'Persons/Create', // send to controller
          method: 'post',
          data: person
        }).success(function(res){
          if(res == 1){
            // complete without error
            alerts.push({ type: 'success', msg: 'Person added' });
            $http.get(BASE_URL + 'Persons/PersonsList').success(function(data){ $scope.persons = data; });
          }else{
            // somthing is wrong
            alerts.push({ type: 'error', msg: 'Error' + res });
          }
        });
      });
    };

    $scope.Update = function(index){
      // get the person data with the array index
      var person = $scope.persons[index];
      // send the objetd person to dialog
      dialogOptions.resolve = { person: function(){ return person; }};

      $dialog.dialog(dialogOptions)
      .open(BASE_URL + 'Persons/Edit') // view for the dialog
      .then(function(result){
        // send the data to the controller with ajax
        $http({
          method: 'post',
          url: BASE_URL + 'Persons/Update',
          data: person
        }).success(function(res){
          if(res == 1){
            // complete without error
            alerts.push({ type: 'success', msg: 'Person updated' });
            $scope.persons[index] = person; // update the person in the array
          }else{
            // somthing is wrong
            alerts.push({ type: 'error', msg: 'Error' + res });
          }
        })
      });
    };

    $scope.Delete = function(index){
      var person = $scope.persons[index]; // get the data of the persons on the array
      var title = "Delete Person";
      var msg = "Are you sure want to delete this person " + person.name + ' ' + person.lastName + '?';
      var btns = [ { result: 'true', label: 'Accept', cssClass:"btn-primary" } , { result: 'cancel', label: 'Cancel'}];

      $dialog.messageBox( title, msg, btns).open()
      .then(function(result){
        if(result){
          $http({
            method: 'post',
            url: BASE_URL + 'Persons/Delete',
            data: person
          }).success(function(res){
            if(res == 1){
              // complete without error
              alerts.push({ type: 'success', msg: 'Person deleted' });
              $scope.persons.splice(index, 1); // remove from the array the object and the space
            }else{
              // somthing is wrong
              alerts.push({ type: 'error', msg: 'Error' + res });
            }
          });
        }
      });

    };
   }
);