'use strict';

/* Services */

var services = angular.module('walkerServices', ['ngResource']);

services.factory('DataServices',function($resource,$http){
    var data = {};
    return {
        getData: function () {
            return data;
        },
        
        setData: function (newData) {
            data = newData;
        },
        
        listFactor: function(){
           var url = "api/factor";
           return $http.get(url);
        },
                
        addFactor: function(factor){
            var url = "api/factor";
            return $http({
                url:url,
                data : $.param(factor),
                method : 'POST',
                headers : {'Content-Type':'application/x-www-form-urlencoded; charset=UTF-8'}
            });
        },
        
        updateFactor: function(factor){
            var url = "api/factor/"+factor.Id;
            return $http.put(url,factor);
        },
        
        deleteFactor: function(factor){
            var url = "api/factor/"+factor.Id;
            return $http.delete(url);
        },
        
        updateFactorData: function(year,site_id,data){
            var url = "api/factorData";
            return $http.post(url,{year: year, 'site_id' :site_id,data: data});
        },
        
        getFactorData: function(site_id,year){
            var url = "api/factorData/"+site_id+"/"+year;
            return $http.get(url);
        },
        
        /** List community **/
        listCommunity: function(){
           var url = "api/community";
           return $http.get(url);
        },
                
        addCommunity: function(community){
            var url = "api/community";
            return $http.post(url,community);
        },
        
        updateCommunity: function(community){
            var url = "api/community/"+community.Id;
            return $http.put(url,community);
        },
        
        deleteCommunity: function(community){
            var url = "api/community/"+community.Id;
            return $http.delete(url);
        },
                
        /** States **/
        listState: function(){
           var url = "api/state";
           return $http.get(url);
        },
                
        /** Time Zones **/
        listTimeZone: function(){
           var url = "api/timezone";
           return $http.get(url);
        },
                
        /** Sponsor services **/
        listSponsor: function(){
           var url = "api/sponsor";
           return $http.get(url);
        },
                
        addSponsor: function(sponsor){
            var url = "api/sponsor";
            return $http.post(url,sponsor);
        },
        
        updateSponsor: function(sponsor){
            var url = "api/sponsor/"+sponsor.Id;
            return $http.put(url,sponsor);
        },
        
        deleteSponsor: function(sponsor){
            var url = "api/sponsor/"+sponsor.Id;
            return $http.delete(url);
        },
                
        /** Organizations services **/
        listOrganization: function(){
           var url = "api/organization";
           return $http.get(url);
        },
                
        addOrganization: function(organization){
            var url = "api/organization";
            return $http.post(url,organization);
        },
        
        updateOrganization: function(organization){
            var url = "api/organization/"+organization.Id;
            return $http.put(url,organization);
        },
        
        deleteOrganization: function(organization){
            var url = "api/organization/"+organization.Id;
            return $http.delete(url);
        },
    }
});