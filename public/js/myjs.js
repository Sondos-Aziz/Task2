
var myApp =angular.module('myApp',["ngRoute",'angularUtils.directives.dirPagination']);
myApp.config(function($routeProvider) {
    $routeProvider

        .when("/", {
            templateUrl: "../views/sponsor/index.blade.php",
            controller: "infoUserController"
        })
        // .when("/create",{
        //     templateUrl : "sponsor/create.blade.php",
        //     controller: "createUserController"
        // })
        .when("/edit/:id",{
        templateUrl : "../views/sponsor/edit.blade.php",
        controller: "editUserController"
    })
    //     .when("/search",{
    //     templateUrl : "sponsor/index.blade.php",
    //     controller: "searchUserController"
    // })
        .otherwise({
            template: "<h1>None</h1><p>Nothing has been selected</p>"
        });

});

/////////
myApp.controller('infoUserController', function ($scope, $http,$window ) {


$scope.users=[];
    $scope.countries =[];
    $scope.cities =[];
    $scope.govs =[];
    $scope.neighs =[];
    $scope.nationalities =[];


    //******* using pagination

//******* for index using pagination

    var vm = this;
    vm.users= [];
    vm.pageno = 1;
    vm.total_count = 0;
    vm.itemsPerPage = 2;
    vm.getData = function(pageno){ // This would fetch the data on page change.
        vm.users = [];
        $http.get("/sponsor")
            . then (function success(response) {
                vm.users = response.data.users;
                vm.total_count = response.total_count;
            });
    };
    vm.getData(vm.pageno);

    //*********

    //*********

    // List users
    $scope.loadUsers = function () {
        $http.get('/sponsor')
            .then(function success(e) {
                $scope.users = e.data.users;
                $scope.countries = e.data.countries;
                $scope.cities = e.data.cities;
                $scope.govs = e.data.govs;
                $scope.neighs = e.data.neighs;
                $scope.nationalities = e.data.nationalities;
            });
    };
    $scope.loadUsers();



    ////////////////////
//make the delete button
    $scope.confirmDelete = function(id) {

        var isConfirmDelete = confirm('Are you sure you want this record?');
        if (isConfirmDelete) {
            var url='/sponsor/' + id;

            $http.delete(url).then(function (data) {

                // console.log(data);
                    location.reload();
                // $scope.loadUsers();

            }, function (response) {
                // console.log(data);
                alert('Unable to delete');

            });
        } else {
            return false;
        }
    };


//search

    users = {
        firstName: '',
        secondName: '',
        thirdName: '',
        fourthName: '',
        governorate:'',
        city:'',
        neighborhood:'',
        nationality:'',
        countryOfResidence:'',
        definitionType:'',
        phone1: '',
        phone2: '',
        address: '',
        email:'',
        mobile: '',
        password: '',
        identificationNum: '',
        contactPerson:'',
        type: '',

    };

    $scope.doSearch= function () {
        console.log('search');
        $http.post('/sponsor/search', {
            type: $scope.type,
            firstName: $scope.firstName,
            secondName: $scope.secondName,
            thirdName: $scope.thirdName,
            fourthName: $scope.fourthName,
            governorate: $scope.governorate,
            city: $scope.city,
            nationality: $scope.nationality,
            countryOfResidence: $scope.countryOfResidence,
            identificationNum: $scope.identificationNum,
            contactPerson: $scope.contactPerson,

        }).then(function success(e) {
            $scope.users = e.data.users;
        }), function error(e) {
            // alert( e.data.msg);
            alert('error in search');
        };

    };

    // Add new User
    $scope.addSponsor = function () {
        $http.post('/sponsor', {
            firstName: $scope.firstName,//the right direction from ng-model that is exist in view
            secondName: $scope.secondName,
            thirdName: $scope.thirdName,
            fourthName: $scope.fourthName,
            email: $scope.email,
            password: $scope.password,
            definitionType: $scope.definitionType,
            identificationNum: $scope.identificationNum,
            governorate: $scope.governorate,
            city: $scope.city,
            neighborhood: $scope.neighborhood,
            address: $scope.address,
            phone1: $scope.phone1,
            mobile: $scope.mobile,
            nationality: $scope.nationality,
            countryOfResidence: $scope.countryOfResidence,
            type: $scope.type,
            contactPerson: $scope.contactPerson,
            phone2: $scope.phone2,
        }).then(function success(e) {
            location.reload();
            // $window.location = '#!/';
        });
    };

});

/////////////////
//2. show the create form
// myApp.controller('createUserController', function ($scope, $http ,$window) {
//
//     $scope.users = {
//         firstName: '',
//         secondName: '',
//         thirdName: '',
//         fourthName: '',
//         email: '',
//         password: '',
//         governorate: '',
//         city: '',
//         neighborhood: '',
//         mobile: '',
//         nationality: '',
//         countryOfResidence: '',
//         definitionType: '',
//         phone1: '',
//         phone2: '',
//         address: '',
//         identificationNum: '',
//         type: '',
//         contactPerson: '',
//     };
//     // $scope.countries = [];
//     // $scope.cities = [];
//     // $scope.govs = [];
//     // $scope.neighs = [];
//     // $scope.nationalities = [];
//
//     // $http.get('/sponsor/create')
//     //     .then(function success(e) {
//     //         // console.log('get create');
//     //         $scope.users = e.data.users;
//     //         $scope.countries = e.data.countries;
//     //         $scope.cities = e.data.cities;
//     //         $scope.govs = e.data.govs;
//     //         $scope.neighs = e.data.neighs;
//     //         $scope.nationalities = e.data.nationalities;
//     //     });
//
// // Add new User
//     $scope.addSponsor = function () {
//             $http.post('/sponsor', {
//                 firstName: $scope.firstName,//the right direction from ng-model that is exist in view
//                 secondName: $scope.secondName,
//                 thirdName: $scope.thirdName,
//                 fourthName: $scope.fourthName,
//                 email: $scope.email,
//                 password: $scope.password,
//                 definitionType: $scope.definitionType,
//                 identificationNum: $scope.identificationNum,
//                 governorate: $scope.governorate,
//                 city: $scope.city,
//                 neighborhood: $scope.neighborhood,
//                 address: $scope.address,
//                 phone1: $scope.phone1,
//                 mobile: $scope.mobile,
//                 nationality: $scope.nationality,
//                 countryOfResidence: $scope.countryOfResidence,
//                 type: $scope.type,
//                 contactPerson: $scope.contactPerson,
//                 phone2: $scope.phone2,
//             }).then(function success(e) {
//                 $window.location = '#!/';
//             });
//     };
// });
/////edit
    myApp.controller('editUserController', function ($scope, $http ,$window,$routeParams) {

        $scope.user=[];
        $scope.countries = [];

        $scope.edit = function (id) {
            $http.get('/sponsor/' + $routeParams.id + '/edit')
                .then(function success(e) {
                    $scope.user = e.data.user;
                    $scope.countries = e.data.countries;
                });
        }
        $scope.edit();

        $scope.user = {
            firstName: '',
            secondName: '',
            thirdName: '',
            fourthName: '',
            countryOfResidence: '',
            phone1: '',
            address: '',
        };

        $scope.update = function (id) {
            $http.put('/sponsor/' + $scope.user.id, {

                firstName: $scope.user.firstName,
                secondName: $scope.user.secondName,
                thirdName: $scope.user.thirdName,
                fourthName: $scope.user.fourthName,
                address: $scope.user.address,
                phone1: $scope.user.phone1,
                countryOfResidence: $scope.user.countryOfResidence

            }).then(function success(response) {
                    console.log(response);
                    $window.location.href = '#!/';

                }, function error(response) {
                    console.log(response);
                    alert('Submit Error');
                }
            );
        };

    });



