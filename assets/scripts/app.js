var app = angular.module('habaneros',[
	'ngMaterial',
	'slick',
  'pickadate'
]);

app.controller('WidthDemoCtrl', function($mdDialog) {
  
});
app.controller('mainCTL', function($scope){
  
  this.myDate = new Date();
	
   // function to submit the form after all validation has occurred     
    $scope.submitForm = function() {
       
      // check to make sure the form is completely valid
      if ($scope.userForm.$valid) {
        
      }

      $scope.submitted = true;
    };

});