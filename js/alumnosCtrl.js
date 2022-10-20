app.controller('alumnosCtrl', ['$scope','$http', function($scope,$http){
	
	$scope.setActive("mAlumnos");

	$scope.alumnos = {};

	$http.get('php/servicios/alumnos.listado.php').success(function(data){
		
		if (data){$scope.alumnos = data;} else {$scope.alumnos ='Não retornou dados!!'}
			
	});


}]);