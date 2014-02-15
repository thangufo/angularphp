'use strict';

/* Services */

var services = angular.module('walkerServices');

services.factory('UserServices',function($resource,$http){
    return {
        isLoggedIn: function (){
            
        },
        login: function(params){
            var url = "/api/user/login";
            return $http.post(url,params);
        },
        getLoggedInUser: function(params){
            var url = "/api/user/getLoggedInUser";
            return $http.get(url,params);
        },
                
        addUser: function (params){
            var url = "/api/user";
            return $http.post(url,params);
        },
                
        updateUser: function (params){
            var url = "/api/user";
            return $http.put(url,params);
        },
        
        logout: function(){
            var url = "/api/user/logout";
            return $http.get(url);
        },
        forgotpassword: function (params){
            var url = "/api/user/forgotpassword";
            return $http.post(url,params);
        },
        resetpassword: function (params){
            var url = "/api/user/resetpassword";
            return $http.post(url,params);
        },
    }
});