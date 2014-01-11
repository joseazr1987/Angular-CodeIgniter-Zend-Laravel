
// Object to manupulate the Lib Messenger.
var Message = {

    config : {
        extraClasses: 'messenger-fixed messenger-on-top messenger-on-right',
        theme: 'air'
    },

    open: function(_meesage, _type){

        Messenger(this.config).post({
            message : _meesage,
            type: _type,
            showCloseButton : true
        });
    }
};


;(function(app){

    app
    .controller('appCtrl', ['$scope', function ($scope) {}])

    .controller('personCtrl', ['$scope', '$log', function ($scope, $log) {

        $scope.grid = [];

        // Data and Actions
        $scope.grid.persons = new kendo.data.DataSource({

            pageSize: 10, // pagination, number of row per page.

            transport: {
                read: { // Get the data from backend

                    url : '/Persons/All',
                    dataType: 'json'

                },

                update: { // Update the person

                    url : '/Persons/Update',
                    dataType: 'json',
                    complete: function(){

                        Message.open('The user update', 'success'); // message of succes
                        $scope.grid.persons.read(); // Reload the grid before complete the action

                    }
                },

                destroy: { // Delete the person

                    url: '/Persons/Delete' ,
                    dataType: 'json' ,
                    complete : function(){

                        Message.open('The user deleted successfull', 'success'); // message of succes
                        $scope.grid.persons.read(); // Reload the grid before complete the action

                    }
                },

                create: { // Create the person

                    url: '/Persons/Create' ,
                    dataType: 'json' ,
                    complete : function(){

                        Message.open('The user added successfull', 'success'); // message of succes
                        $scope.grid.persons.read(); // Reload the grid before complete the action

                    }
                },

                parameterMap: function(data, type){
                    // Method to convert the long date to sort date
                    if (type !== "read") {

                        data.birthday  = kendo.toString(new Date(data.birthday), "yyyy/MM/dd");
                        return data;

                    }
                }
            },

            schema: { // Schema of the object, needed to update and create with kendo
                model: {
                    id: 'id',
                    fields: {
                        'id'         : { type: 'number', editable: false },
                        'first_name' : { type: 'string' },
                        'last_name'  : { type: 'string' },
                        'birthday'   : { type: 'date' },
                    }
                }
            }
        });

        // How kendo will display the colums the configuration
        $scope.grid.columns = [
            { field: 'id', title : '&nbsp', width: '50px' },
            { field: 'first_name' , title: 'First Name' },
            { field: 'last_name' , title: 'Last Name' },
            { field: 'birthday' , title: 'Birthday' , format: '{0:MM/dd/yyyy}' },
            { command :
                ["edit", "destroy"] , width: "200px" // butons Edit and Delete on each row
            }

        ]

        // Grid options
        $scope.grid.options = {

            columns     : $scope.grid.columns, // How kendo will display the colums
            pageable: { refresh: true, pageSizes: [10, 20, 50] }, // the numbers of rows displayed per page
            selectable  : 'row', // The way of the user select a row
            sortable    : true, // Sort columns
            reorderable : true, // Order Columns
            filterable  : { extra: false }, // Filters
            editable    : { mode: 'popup' }, // the mode of the edit [ Can be inline ]
            toolbar     : [ "create" ], // The button of create new person

        }

        // When the user select a row
        $scope.onSelection = function(kendoEvent){}

    }])

})(angular.module('app', ['kendo.directives']));