/**
 * 
 * Developed by Thang Nguyen, 12/2013
 * 
 */

'use strict';

function SponsorController($scope, $location, $q,$modal,DataServices){
    $scope.data = DataServices.getData();
    var i = 0;

    $scope.refreshData = function(){
        DataServices.listState().success(function(data){
            $scope.data.states = data.states;
        });
        
        DataServices.listSponsor().success(function(data){
            $scope.data.sponsors = data.sponsors;
        });
        
        $scope.data.sponsor = {};
    }
    
    
    $scope.refreshData();
    
    
    $scope.deleteSponsor = function(sponsor){
        if (confirm("Are you sure you want to delete this item")){
            DataServices.deleteSponsor(sponsor);
            
            //update the list
            //remove this item
            var i =  $scope.data.sponsors.indexOf(sponsor);
            $scope.data.sponsors.splice(i,1);
            DataServices.setData($scope.data);
            $scope.data.gridData = undefined;
        }
    }
    
    $scope.addSponsor = function (sponsor) {
        if (sponsor != null)
            $scope.data.sponsor = sponsor;
        else
            $scope.data.sponsor = {};
        
        $modal.open({
            templateUrl: 'addEditSponsor.html',
            backdrop: true,
            windowClass: 'modal',
            controller: function ($scope, $modalInstance, $log, data,DataServices) {
                /*$scope.sponsor = sponsor;
                $scope.sponsors = sponsors;*/
                $scope.data = data;
                //clone the object
                $scope.tmpsponsor = jQuery.extend({}, $scope.data.sponsor);
                
                $scope.submit = function () {
                    //copy the value
                    jQuery.extend($scope.data.sponsor, $scope.tmpsponsor);
                    
                    if (!data.sponsor.Id){
                        //add new
                        DataServices.addSponsor(data.sponsor).success(function(api_data){
                            data.sponsor.Id = api_data.id;
                            data.sponsors.push(data.sponsor);
                        }).error(function(){
                            alert('Failed to save data');
                        });                      
                    }
                    else{
                        //edit
                        DataServices.updateSponsor(data.sponsor);
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