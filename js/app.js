'use strict';

/* App Module */
angular.module('HashBangURLs', []).config(['$locationProvider', function($location) {
        $location.hashPrefix('!');
    }]);

angular.module('walker', ['walkerDirectives', 'walkerServices', 'HashBangURLs', 'ui.bootstrap', 'ngGrid'], function($httpProvider) {
    // Use x-www-form-urlencoded Content-Type
    $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=utf-8';

    // Override $http service's default transformRequest
    $httpProvider.defaults.transformRequest = [function(data)
        {
            /**
             * The workhorse; converts an object to x-www-form-urlencoded serialization.
             * @param {Object} obj
             * @return {String}
             */
            var param = function(obj)
            {
                var query = '';
                var name, value, fullSubName, subName, subValue, innerObj, i;

                for (name in obj)
                {
                    value = obj[name];

                    if (value instanceof Array)
                    {
                        for (i = 0; i < value.length; ++i)
                        {
                            subValue = value[i];
                            fullSubName = name + '[' + i + ']';
                            innerObj = {};
                            innerObj[fullSubName] = subValue;
                            query += param(innerObj) + '&';
                        }
                    }
                    else if (value instanceof Object)
                    {
                        for (subName in value)
                        {
                            subValue = value[subName];
                            fullSubName = name + '[' + subName + ']';
                            innerObj = {};
                            innerObj[fullSubName] = subValue;
                            query += param(innerObj) + '&';
                        }
                    }
                    else if (value !== undefined && value !== null)
                    {
                        query += encodeURIComponent(name) + '=' + encodeURIComponent(value) + '&';
                    }
                }

                return query.length ? query.substr(0, query.length - 1) : query;
            };

            return angular.isObject(data) && String(data) !== '[object File]' ? param(data) : data;
        }];
})
.config(['$routeProvider','$httpProvider', function($routeProvider,$httpProvider) {
        var logsOutUserOn401 = ['$q', '$location', function($q, $location) {
                var success = function(response) {
                    return response;
                };

                var error = function(response) {
                    if (response.status === 401) {
                        //redirect them back to login page
                        $location.path('/login');

                        return $q.reject(response);
                    }
                    else {
                        return $q.reject(response);
                    }
                };

                return function(promise) {
                    return promise.then(success, error);
                };
            }];

        $httpProvider.responseInterceptors.push(logsOutUserOn401);

        $routeProvider.
                when('/login', {templateUrl: 'partials/login.html', controller: UserController}).
                when('/index', {templateUrl: 'partials/index.html', controller: PageController}).
                when('/communities', {templateUrl: 'partials/communities.html', controller: CommunityController}).
                when('/organizations', {templateUrl: 'partials/organizations.html', controller: OrganizationController}).
                when('/sponsors', {templateUrl: 'partials/sponsors.html', controller: SponsorController}).
                otherwise({redirectTo: '/index'});
    }
]);
