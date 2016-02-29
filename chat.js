var myApp = angular.module('myTodoApp', ['backand']);

myApp.config(function (BackandProvider) {
    BackandProvider.setAppName('backandtodoapp');
    BackandProvider.setSignUpToken('76a0ed19-c9d4-405a-9e20-493d637b131c');
    BackandProvider.setAnonymousToken('6adbc622-36b5-496c-b288-19ea28816f10');
})

myApp.controller('DemoCtrl', ['$scope', '$http', 'Backand', DemoCtrl]);

function DemoCtrl($scope, $http, Backand) {

    var baseUrl = '/1/objects/';
    var objectName = 'todo';
  
    $scope.todos = null;
  
    $scope.readList = function () {
      return $http({
        method: 'GET',
        url: Backand.getApiUrl() + baseUrl + objectName
      }).then(function(response) {
        $scope.todos = response.data.data;
      });
    };

    $scope.readOne = function (id) {
      return $http({
        method: 'GET',
        url: Backand.getApiUrl() + baseUrl + objectName + '/' + id
      }).then(function(response) {
        return response.data;
      });
    };

    $scope.create = function (newTodo) {
      return $http({
        method: 'POST',
        url : Backand.getApiUrl() + baseUrl + objectName,
        data: newTodo,
        params: {
          returnObject: true
        }
      }).then(function(response) {
        $scope.readList();
        return response.data;
      });
    };

    $scope.update = function (todo) {
      return $http({
        method: 'PUT',
        url : Backand.getApiUrl() + baseUrl + objectName + '/' + todo.id,
        data: todo
      }).then(function(response) {
        $scope.readList();
        return response.data;
      });
    };

    $scope.delete = function (todo) {
      return $http({
        method: 'DELETE',
        url : Backand.getApiUrl() + baseUrl + objectName + '/' + todo.id
      }).then(function(response) {
        $scope.readList();
        return response.data;
      });
    };

}