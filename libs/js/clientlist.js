var app = angular.module('myApp', []);
 app.controller('clientCtrl', function($scope, $http) {
		$http.get("getClientList.php").success(function(data){
			$scope.clients= data;
			console.log(data);
		}, function(err) {
	        console.error('ERR', err);
		});
			});
				