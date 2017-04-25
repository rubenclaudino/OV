app.controller("PatientController", function($scope, $http){
      $scope.myData = {};
      $scope.myData.show = function(item, event) {
         var responsePromise = $http.get("/calendar/appointmentdetails/"+item);
         responsePromise.success(function(data, status, headers, config) {
            $scope.myData.patient = data;
         });
         responsePromise.error(function(data, status, headers, config) {
            alert("AJAX failed!");
         });
      }
});
