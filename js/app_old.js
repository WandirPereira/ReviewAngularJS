(function(){

        var app = angular.module('ejemplosApp',[]);
        
        app.controller('mainCtrl', ['$scope','$http', function($scope,$http){  
                
                $scope.profesores = {};


                $http.get('json/profesores.json').success(function(xyx){
                        $scope.profesores = xyx.profesores;
                });
        }]);
        
})();
        