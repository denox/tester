<!doctype html>
<html lang="en" ng-app="gemStore">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    {{ HTML::style('/assets/css/bootstrap.min.css') }}

    {{ HTML::style('/assets/css/hello.css') }}
    {{--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>--}}
    {{--<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>--}}
    {{ HTML::script('/assets/js/jquery-1.11.2.js') }}
    {{ HTML::script('/assets/js/bootstrap.min.js') }}
    {{ HTML::script('/assets/js/angular.js') }}
    {{ HTML::script('/assets/js/gem1.1.js') }}
</head>
<body >
{{--OVO JE DIO KOJI JE POVUCEN SA 50EXAMPLES!--}}
{{-- ovo je dio sa modulom App, definisan je malo nize --}}
	{{--<div class="container" ng-app="App">--}}
	    {{--<div ng-controller="Controller">--}}
	        {{--{{"hello"}}--}}
            {{--<ul>--}}
                {{--<li ng-repeat="(key, value) in dataset"></li>--}}
                {{--<li ng-repeat="name in names">@{{name.name}}</li>--}}
            {{--</ul>--}}
	    {{--</div>--}}
	{{--</div>--}}
{{--<script>--}}
{{-- u okviru modula App je definisan kontroler Controller koji --}}
    {{--var app=angular.module('App',[]);--}}
    {{--app.controller('Controller',function($scope){--}}
        {{--$scope.names = [--}}
            {{--{name:'vesna'},--}}
            {{--{name:'ves'},--}}
            {{--{name:'daniejla'}--}}
        {{--];--}}
    {{--});--}}
{{--</script>--}}


{{--novi tester primjer--}}
    {{--Name:<input ng-model="name" type="text"/>--}}
    {{--Name:<input ng-model="name" type="text"/>--}}
    {{--Name:<input ng-model="namee" type="text"/>--}}
    {{--Hello @{{namee}}--}}



{{--NOVI PRIMJER, DODATI ng-app="nameApp" U HTML TAG--}}
{{--<script>--}}
{{--var nameApp=angular.module('nameApp',[]);--}}
{{--nameApp.controller('NameCtrl',function ($scope){--}}
{{--$scope.firstName='john';--}}
{{--$scope.MiddleName='joe';--}}
{{--$scope.LastName='smith';--}}
{{--});--}}
    {{--</script>--}}
  {{--</head>--}}
   {{--<body ng-controller="NameCtrl">--}}
 {{--first Name    <input type="text" ng-model="firstName" placeholder="name" />--}}
     {{--<br />--}}

 {{--Middle Name:    <input type="text" ng-model="MiddleName" placeholder="name" />--}}
     {{--<br />--}}

 {{--Last Name:    <input type="text" ng-model="LastName" placeholder="name" />--}}
     {{--<br />--}}
     {{--<h1>Hello @{{firstName}} @{{MiddleName}} @{{LastName}}</h1>--}}

{{--<div ng-controller="StoreController as store" ng-hide="store.product.soldOut">--}}
   {{--<p> Gem Name: @{{ store.product.name }} </p>--}}
   {{--<p> Gem Price: $@{{ store.product.price }} </p>--}}
{{--<button ng-show="store.product.canPurchase">CHART</button>--}}
{{--</div>--}}
<div ng-controller="StoreController as store"  >
        <div ng-repeat="product in store.products" ng-hide="product.soldOut">
           <p> Gem Name: @{{ product.name }} </p>
           <p> Gem Price: @{{ product.price | currency }} </p>
        <button ng-show="product.canPurchase">CHART</button>
        </div>
</div>

{{--komentar za branch testB--}}
{{--merging konflikti--}}
</body>
</html>
