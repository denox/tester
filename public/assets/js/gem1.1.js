
//preporucljivo je umotati ovo u fju
(function(){
//jsoni
    var gems = [
        {
        name: 'Azurite',
        description: 'super cool gem',
        canPurchase: true,
        soldOut: false,
        price: 2.95},
     {
        name: 'Magnetite',
        description: 'super magnetic gem',
        canPurchase: true,
        soldOut: false,
        price: 5 }
];

//iz angular.module('') ide u ng-app u html ili dje vec
    var app = angular.module('gemStore',[]);


//kontroler se ubaci u ng-controller i onda se moze pozvati store.product.name
//ili store.product.price
    app.controller('StoreController',function(){
        this.products = gems;
    });

})();