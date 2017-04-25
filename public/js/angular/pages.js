app.controller('SpecialityController', function($scope , $http , toaster) {
   // modal

   // opening modal bootstrap
   $scope.open = function() {
     $scope.showModal = true;
   };

   $scope.ok = function() {
     $scope.showModal = false;
   };

   $scope.cancel = function() {
     $scope.showModal = false;
     $scope.editSpecialityModal = false;
   };

   $scope.saveForm = {};
   $scope.editForm = {};


   // create a blank object to hold our form information
   // $scope will allow this to pass between controller and view
   $scope.specialities = [];

   $scope.saveSpeciality = function(isValid) {

     // check to make sure the form is completely valid
      if (!isValid) {
         //alert('our form is amazing');
      }else {
         $http({
            method  : 'POST',
            url     : '/specialities',
            data    : $.param($scope.formData),  // pass in data as strings
            headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
         })
         .success(function(data) {
            if(data.status == 'success') {
            // if not successful, bind errors to error variables
                // $scope.errorName = data.errors.name;
                $scope.specialities.push(data.json);

                $scope.showModal = false;

               $scope.formData = {};
                $scope.$apply();
            } else {
                // if successful, bind success message to message
                $scope.message = data.message;
            }
         });
      }
  };


   // loading data on page load

   $scope.loadFeeds = function() {
      $http({
         method  : 'GET',
         url     : '/specialities/get', //(not request payload)
      })
      .success(function(data) {
         if(data.status == 'success') {
         // if not successful, bind errors to error variables
             // $scope.errorName = data.errors.name;
             $scope.specialities = data.message;
         } else {
             // if successful, bind success message to message
             $scope.message = data.message;
         }
       });
   };

   // editing form
   $scope.editSpeciality = function(specialityId) {
      $scope.editSpecialityModal = true;
      $scope.formData = $scope.specialities[specialityId];
   };

   //deleting form
   $scope.deleteForm = function(specialityId) {
      $scope.mData = {};
      $scope.mData._method = "DELETE";
      if(confirm('Are you sure ?')){
         $http({
            method  : 'POST',
            url     : '/specialities/'+specialityId,
            data    : $scope.mData
         })
         .success(function(data) {
            if(data.status == 'success') {
               toaster.success({title: "Success", body:data.message});
            // if not successful, bind errors to error variables
                // $scope.errorName = data.errors.name;
                $scope.specialities = data.json;
                $scope.$apply();
            } else {
                // if successful, bind success message to message
                $scope.message = data.message;
            }
         });
      };
   }

   // updating speciality

   $scope.updateSpeciality = function(isValid , $id) {
      // check to make sure the form is completely valid
      if (!isValid) {
          //alert('our form is amazing');
      }else {
          $http({
             method  : 'PUT',
             url     : '/specialities/'+$id,
             data    : $.param($scope.formData),  // pass in data as strings
             headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
          })
          .success(function(data) {
             if(data.status == 'success') {
             // if not successful, bind errors to error variables
                 // $scope.errorName = data.errors.name;
                 toaster.success({title: "Success", body:data.message});
                 $scope.specialities =  data.json;
                 $scope.editSpecialityModal = false;
                 $scope.$apply();
             } else {
                 // if successful, bind success message to message
                 $scope.message = data.message;
             }
          });
      }
  };



});
