'use strict';

function UserController($scope, $location, $q, DataServices, UserServices) {
    $scope.data = DataServices.getData();
    $scope.data.error_message = '';
    $scope.data.success_message = '';
    
    if($location.path() === "/login" && $scope.data.loggedInUser !== undefined)
        $location.path("/index");

    $scope.register = function() {
        if ($scope.data.register.Password !== $scope.data.register.ConfirmPassword) {
            $scope.data.error_message = "Passwords do not match";
            return;
        }
        UserServices.addUser($scope.data.register).success(function(data) {
            //check the returned status
            //to see if the user was registered successfully
            $scope.data.success_message = data.msg;
            $scope.data.error_message = '';
        }).error(function(data) {
            $scope.data.success_message = '';
            $scope.data.error_message = data.msg;
        });
    }

    $scope.login = function() {
        UserServices.login($scope.data.login).success(function(data) {
            $scope.data.success_message = data.msg;
            $scope.data.error_message = '';
            
            $scope.data.loggedInUser = data.user;
            DataServices.setData($scope.data);
            
            //redirect
            $location.path('/index');
        }).error(function(data) {
            $scope.data.success_message = '';
            $scope.data.error_message = data.msg;
        });
    }

    $scope.forgotpassword = function() {
        $scope.data.sentcode = false;
        UserServices.forgotpassword($scope.data.resetpassword).success(function(data) {
            $scope.data.success_message = data.msg;
            $scope.data.error_message = '';

            $scope.data.sentcode = true;
        }).error(function(data) {
            $scope.data.success_message = '';
            $scope.data.error_message = data.msg;
        });
    }

    $scope.resetpassword = function() {
        if ($scope.data.resetpassword.Password !== $scope.data.resetpassword.ConfirmPassword) {
            $scope.data.error_message = "Passwords do not match";
            return;
        }

        UserServices.resetpassword($scope.data.resetpassword).success(function(data) {
            $scope.data.success_message = data.msg;
            $scope.data.error_message = '';
        }).error(function(data) {
            $scope.data.success_message = '';
            $scope.data.error_message = data.msg;
        });
    }
}