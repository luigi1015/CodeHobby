function Luigi1015ProjectsController($scope, $http) {

	$http({method: 'GET', url: 'https://api.github.com/users/luigi1015/repos'}).
		success(function(data, status, headers, config) {
			$scope.projects = data;
		}).
		error(function(data, status, headers, config) {
			alert( "Problem getting the program data, status code " + status );
		}
	);
}

function CodeHobbyProjectsController($scope, $http) {

	$http({method: 'GET', url: 'https://api.github.com/orgs/codehobbynet/repos'}).
		success(function(data, status, headers, config) {
			$scope.projects = data;
		}).
		error(function(data, status, headers, config) {
			alert( "Problem getting the program data, status code " + status );
		}
	);
}
