function runAll() {
    //put code to run in here
}
$(function() {
  //runAll();
});
app.config(function ($httpProvider) {
  $httpProvider.defaults.headers.common = {};
  $httpProvider.defaults.headers.post = {};
  $httpProvider.defaults.headers.put = {};
  $httpProvider.defaults.headers.patch = {};
});
function data($scope, $http) {
    fetch();
    function fetch() {
        $http.get("http://www.dwarfpool.com/eth/api?wallet=5ada3743144f1235d8cef97daad6c123f20e7330&email=karldiab@live.com")
        .success(function(response) {
            $scope.response = response;
        });
    }
}