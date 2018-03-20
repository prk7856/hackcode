var mainApp = angular.module("mainApp", ['infinite-scroll']);

mainApp.controller('searchRecipe', function($scope,$http) {
	
	var getlistURL = $scope.baseURL+"home/getListRecipe";
	
    $http.post(getlistURL).
	success(function(data, status) {
		$scope.listrecipe = data;
		console.log(data);
	});
	
	
	$scope.searchByIng = function() {
		
		var getURL = $scope.baseURL+"home/getListByIng";
    	
        $http.post(getURL, {"ingText" : $scope.search_by_ing}).
		success(function(data, status) {
			$scope.listrecipe = data;
		})
		.error(function(data, status) {
			console.log(data);
		});
	};
	
	$scope.sort_by_veg = function(vegnonveg) {
		
		var getURL = $scope.baseURL+"home/getListByVegNonVeg";
    	
        $http.post(getURL, {"vegnonveg" : vegnonveg}).
		success(function(data, status) {
			$scope.listrecipe = data;
		})
		.error(function(data, status) {
			console.log(data);
		});
	};
	
	$scope.sort_by_mealtype = function(mealtype) {
		
		var getURL = $scope.baseURL+"home/getListByMealType";
    	
        $http.post(getURL, {"mealtype" : mealtype}).
		success(function(data, status) {
			$scope.listrecipe = data;
		})
		.error(function(data, status) {
			console.log(data);
		});
	};
		
	$scope.searchByHb = function() {
		
		var getURL = $scope.baseURL+"home/getListByHb";
    	
        $http.post(getURL, {"search_by_hb" : $scope.search_by_hb}).
		success(function(data, status) {
			$scope.listrecipe = data;
		})
		.error(function(data, status) {
			console.log(data);
		});
	};
		
});	

mainApp.controller('recipeUpdate', function($scope,$http) {
	
	// PROCEDURE/DIRECTION UPDATE
    $scope.getProcedure = function(rid) {
    	
    	var getURL = $scope.baseURL+"user/getProcedure";
    	
        $http.post(getURL, {"rid" : rid}).
		success(function(data, status) {
			$scope.proList = data;
		})
		.error(function(data, status) {
			$scope.proList = data || "Request failed";
		});
	};
	
	$scope.addStep = function (rid) {
		
		var getURL = $scope.baseURL+"user/addStep";
		
		$http.post(getURL, {"rid" : rid,"steps" : $scope.steps}).
		success(function(data, status) {
			$scope.proList = data;
			$scope.steps = '';
		})
		.error(function(data, status) {
			$scope.proList = data || "Request failed";
		});
	};
	
	// INGREDIENTS UPDATE
	$scope.getIngredients = function(rid) {
    	
    	var getURLIng = $scope.baseURL+"user/getIngredients";
    	
        $http.post(getURLIng, {"rid" : rid}).
		success(function(data, status) {
			$scope.ingList = data;
		})
		.error(function(data, status) {
			$scope.ingList = data || "Request failed";
		});
	};
	
	$scope.addingItem = function (rid) {
		
		var getURL = $scope.baseURL+"user/addingItem";
		
		$http.post(getURL, {"rid" : rid,"ingitem" : $scope.ingitem}).
		success(function(data, status) {
			$scope.ingList = data;
			$scope.ingitem = '';
		})
		.error(function(data, status) {
			$scope.ingList = data || "Request failed";
		});
	};
	
	// Nutritional Value
	$scope.getNutritionalValue = function(rid) {
    	
    	var getURLIng = $scope.baseURL+"user/getNutritionalValue";
    	
        $http.post(getURLIng, {"rid" : rid}).
		success(function(data, status) {
			$scope.nutList = data;
		})
		.error(function(data, status) {
			$scope.nutList = data || "Request failed";
		});
	};
	
	$scope.addnutItem = function (rid) {
		
		var getURL = $scope.baseURL+"user/addnutItem";
		
		$http.post(getURL, {"rid" : rid,"nutitem" : $scope.nutitem}).
		success(function(data, status) {
			$scope.nutList = data;
			$scope.nutitem = '';
		})
		.error(function(data, status) {
			$scope.nutList = data || "Request failed";
		});
	};
});
