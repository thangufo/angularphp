/**
 * 
 * Developed by Thang Nguyen, 12/2013
 * 
 */

'use strict';

function OrganizationController($scope, $location, $q,$modal,DataServices){
    $scope.data = DataServices.getData();
    var i = 0;

    $scope.refreshData = function(){
        DataServices.listState().success(function(data){
            $scope.data.states = data.states;
        });
        
        DataServices.listOrganization().success(function(data){
            $scope.data.organizations = data.organizations;
        });
        
        DataServices.listCommunity().success(function(data){
            $scope.data.communities = data.communities;
        });
        
        DataServices.listSponsor().success(function(data){
            $scope.data.sponsors = data.sponsors;
        });
        
        DataServices.listTimeZone().success(function(data){
            $scope.data.timezones = data.timezones;
        });
        
        $scope.data.organization = {};
    }
    
    
    $scope.refreshData();
    
    
    $scope.deleteOrganization = function(organization){
        if (confirm("Are you sure you want to delete this item")){
            DataServices.deleteOrganization(organization);
            
            //update the list
            //remove this item
            var i =  $scope.data.organizations.indexOf(organization);
            $scope.data.organizations.splice(i,1);
            DataServices.setData($scope.data);
            $scope.data.gridData = undefined;
        }
    }
    
    $scope.addOrganization = function (organization) {
        if (organization !== null)
            $scope.data.organization = organization;
        else
            $scope.data.organization = {};
        
        $modal.open({
            templateUrl: 'addEditOrganization.html',
            backdrop: true,
            windowClass: 'modal',
            controller: function ($scope, $modalInstance, $log, data,DataServices) {
                /*$scope.organization = organization;
                $scope.organizations = organizations;*/
                $scope.data = data;
                //clone the object
                $scope.tmporganization = jQuery.extend({}, $scope.data.organization);
                if ($scope.tmporganization.User !== undefined)
                    $scope.tmporganization.User.Password = '';//don't show the password
                
                $scope.submit = function () {
                    //copy the value
                    jQuery.extend($scope.data.organization, $scope.tmporganization);
                    
                    if (!data.organization.Id){
                        //add new
                        DataServices.addOrganization(data.organization).success(function(api_data){
                            data.organization.Id = api_data.id;
                            data.organizations.push(data.organization);
                        }).error(function(){
                            alert('Failed to save data');
                        });                      
                    }
                    else{
                        //edit
                        DataServices.updateOrganization(data.organization);
                    }
                     DataServices.listOrganization().success(function(data){
                        $scope.data.organizations = data.organizations;
                        DataServices.setData($scope.data);
                    });
                    
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