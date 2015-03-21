/**
 * Created by jesus on 10/21/14.
 */
var food=[];
var priceF=[];

function changeBackground(color){
    document.body.style.background = "#" + color;
}

function addOne(id,name,price){
    var v;
    v = document.getElementById(id).value;
    if (v < 100){
        document.getElementById(id).value = parseInt(v) + 1;
        food.push(name);
        priceF.push(price);
    }
}

function subOne(id,name,price){
    var v;
    v = document.getElementById(id).value;
    if (v > 0){
        document.getElementById(id).value = parseInt(v) - 1;
        food.pop(name);
        priceF.pop(price);
    }
 }
function getFood(){
	return food;
	}
	
function getPrice(){
		return priceF;
	}
function getTotal(){
	var suma=0;
	for(var i = 0; i < priceF.length; i++){
		 suma += parseFloat(priceF[i]);
	}
	return suma;
}

