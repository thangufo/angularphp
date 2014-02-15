/**
 * 
 * Developed by Thang Nguyen, 12/2013
 * 
 */

'use strict';

function CommunityController($scope, $location, $q,$modal,DataServices){
    $scope.data = DataServices.getData();
    var i = 0;

    $scope.refreshData = function(){
        DataServices.listCommunity().success(function(data){
            $scope.data.communities = data.communities;
        });
        
        DataServices.listState().success(function(data){
            $scope.data.states = data.states;
        });
        
        DataServices.listTimeZone().success(function(data){
            $scope.data.timezones = data.timezones;
        });
        $scope.data.community = {};
    }
    
    
    $scope.refreshData();
    
    
    $scope.deleteCommunity = function(community){
        if (confirm("Are you sure you want to delete this item")){
            DataServices.deleteCommunity(community);
            
            //update the list
            //remove this item
            var i =  $scope.data.communities.indexOf(community);
            $scope.data.communities.splice(i,1);
            DataServices.setData($scope.data);
            $scope.data.gridData = undefined;
        }
    }
    
    $scope.addCommunity = function (community) {
        if (community != null)
            $scope.data.community = community;
        else
            $scope.data.community = {};
        
        $modal.open({
            templateUrl: 'addEditCommunity.html',
            backdrop: true,
            windowClass: 'modal',
            controller: function ($scope, $modalInstance, $log, data,DataServices) {
                /*$scope.community = community;
                $scope.communities = communities;*/
                $scope.data = data;
                //clone the object
                $scope.tmpcommunity = jQuery.extend({}, $scope.data.community);
                
                $scope.submit = function () {
                    //copy the value
                    data.community.Name = $scope.tmpcommunity.Name;
                    data.community.City = $scope.tmpcommunity.City;
                    data.community.StateId = $scope.tmpcommunity.StateId;
                    data.community.Contactname  = $scope.tmpcommunity.Contactname;
                    data.community.Contactphone = $scope.tmpcommunity.Contactphone;
                    data.community.Contactemail = $scope.tmpcommunity.Contactemail;
                    
                    if (!data.community.Id){
                        //add new
                        DataServices.addCommunity(data.community).success(function(api_data){
                            data.community.Id = api_data.id;
                            data.communities.push(data.community);
                        }).error(function(){
                            alert('Failed to save data');
                        });                      
                    }
                    else{
                        //edit
                        DataServices.updateCommunity(data.community);
                    }
                    $scope.data.gridData = undefined;
                    DataServices.setData($scope.data);
                    $modalInstance.dismiss('cancel');
                }
                $scope.cancel = function () {
                    $modalInstance.dismiss('cancel');
                };
            },
            resolve: {
                data: function () {
                    return $scope.data;
                },
            }
        });
    };
}