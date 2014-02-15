var app = angular.module('walkerDirectives', []);

(function() {
    'use strict';
    var directiveId = 'ngMatch';
    app.directive(directiveId, ['$parse', function($parse) {

            var directive = {
                link: link,
                restrict: 'A',
                require: '?ngModel'
            };
            return directive;

            function link(scope, elem, attrs, ctrl) {
// if ngModel is not defined, we don't need to do anything
                if (!ctrl)
                    return;
                if (!attrs[directiveId])
                    return;

                var firstPassword = $parse(attrs[directiveId]);

                var validator = function(value) {
                    var temp = firstPassword(scope),
                            v = value === temp;
                    ctrl.$setValidity('match', v);
                    return value;
                }

                ctrl.$parsers.unshift(validator);
                ctrl.$formatters.push(validator);
                attrs.$observe(directiveId, function() {
                    validator(ctrl.$viewValue);
                });

            }
        }]);
})();