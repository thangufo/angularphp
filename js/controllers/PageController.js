'use strict';

function PageController($scope, $location, $q,DataServices,UserServices){
    $scope.data = DataServices.getData();
    if ($scope.data.loggedInUser === undefined){
        UserServices.getLoggedInUser($scope.data.login).success(function(data) {
            $scope.data.loggedInUser = data.user;
            
            if($location.path() === "/login")
                $location.path("/index");
        }).error(function(data) {
            $location.path("/login");
        });
    }else{
        if($location.path() === "/login")
            $location.path("/index");
    }
    
    $scope.isLoginPage = function(){
        var path = $location.path();
        if (path == "/login")
            return true;
        else return false;
    }
    
    $scope.logout = function(){
        UserServices.logout();
        $scope.data.loggedInUser = undefined;
        DataServices.setData($scope.data);
        
        $location.path("/login");
    }
}