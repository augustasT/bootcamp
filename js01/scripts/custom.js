/*console.log("success");

// UZDUOTIS 1
console.log("TASK 1");
var x = 10;

while (x>0){
	console.log(x)
	x--;
}
console.log("X is " + x);

// UZDUOTIS 2
console.log("TASK 2");
var numSheeps = 4;
var numMonth = 1;
var monthsToPrint = 12;

while(numMonth<=monthsToPrint){
	numSheeps*=4;
	console.log("Number of sheeps for month " + numMonth + " is " + numSheeps);
	
	numMonth++;
}

// UZDUOTIS 3
console.log("TASK 3");
for(var x = 10; x>0; x--){
	console.log(x);
}

//UZDUOTIS 4
console.log("TASK 4");
var numSheeps = 4;
var numMonth = 1;
var monthsToPrint = 12;

for(numMonth;numMonth<=monthsToPrint;numMonth++){
	console.log("Number of sheeps for month " + numMonth + " is " + numSheeps);
	numSheeps*=4;
	
}

//UZDUOTIS 5
console.log("TASK 5 && 8");
var currentGen = 1;
var totalGen = 19;
var totalMW = 0;

while(currentGen<=totalGen){
	if(currentGen<5 && currentGen%2!=0){
		totalMW+=64;		
		console.log("Generator no." + currentGen + " is on. Generating 62MW. Total power: " + totalMW + "MW");
	} else if(currentGen<5 && currentGen%2==0){
		console.log("Generator no." + currentGen + " is off");
	} 
	else if(currentGen>4 && currentGen%2==0){
		totalMW+=124;
		console.log("Generator no." + currentGen + " is off");
	}
	else if(currentGen>4 && currentGen%2!=0){
		totalMW+=124;
		console.log("Generator no." + currentGen + " is on. Generating 124MW. Total power: " + totalMW + "MW");
	}
	currentGen++;
}
//UZDUOTIS 5
console.log("TASK 5");
var currentGen = 1;
var totalGen = 19;
var totalMW = 0;

while(currentGen<=totalGen){
	if(currentGen<5 ){
		totalMW+=64;		
		console.log("Generator no." + currentGen + " is on. Generating 62MW. Total power: " + totalMW + "MW");
	} 
	
	else{
		totalMW+=124;
		console.log("Generator no." + currentGen + " is on. Generating 124MW. Total power: " + totalMW + "MW");
	}
	currentGen++;
}

console.log("TASK 6");
// UZDUOTIS 6
var num = 10;
while (num > 0) {

      console.log(num);

      num-=2;
}

// UZDUOTIS 8
console.log("TASK 8");

function maxOf2(numOne,  numTwo){
	if(numOne>numTwo){
		return numOne;
	}
	else if (numOne<numTwo){
		return numTwo;
	}
	else{
		return "Numbers are equal: " + numOne;
	}
}

console.log(maxOf2(5,5));

// UZDUOTIS 9
temp(26);

function temp(fahrenheit){
 var text = "Lietuvoje šiuo metu laipsnių pagal Celsijų";
 var celsius = parseFloat((fahrenheit - 32)*(5/9)).toFixed(1);;

 console.log(text.substring(0, 20) + celsius + text.substring(19));
}


// UZDUOTIS 10

function taskTen(){
	console.log("--------------------------------------------------------------------");
	var pcs = [
		{ "modelis":"lenovo idėja", "kaina":1234, "spalva":{"raudona":1,"žalia":2} },
		{ "modelis":"hp monstras", "kaina":800, "spalva":{"juoda":2,"geltona":0} },
		{ "modelis":"toshiba sriuba", "kaina":256, "spalva":{"mėlyna":3,"žalia":1} },
		{ "modelis":"dell apskritimas", "kaina":697, "spalva":{"juoda":1,"balta":2} },
		{ "modelis":"acer peizažas", "kaina":620, "spalva":{"juoda":4,"balta":2} },
		{ "modelis":"apple 256", "kaina":2560, "spalva":{"balta":3,"juoda":1} },
		{ "modelis":"asus pokšt", "kaina":1001, "spalva":{"juoda":2,"geltona":3} }
	];

	var keys = [];

	for(var x = 0; x<pcs.length;x++){
		// ISGAUNAMI RAKTAI
		var masyvas=pcs[x]["spalva"];
		keys.push(Object.keys(masyvas));
	}

	for(var x = 0; x<pcs.length;x++){	
		
		for(var y = 0; y < keys[x].length; y++){
			if(pcs[x]["spalva"][keys[x][y]]>1){
				if(pcs[x]["kaina"]*2<=1600){
					console.log("Modelio "+pcs[x]["modelis"]+", kurio spalva " +keys[x][y]+ " yra tiek vnt: " + pcs[x]["spalva"][keys[x][y]]+". 2 vnt kaina: "+pcs[x]["kaina"]*2);
				}
			}
		}
	}
}

console.log("--------------------------------------------------------------------");
var pcs = [
	{ "modelis":"lenovo idėja", "kaina":1234, "spalva":{"raudona":1,"žalia":2} },
	{ "modelis":"hp monstras", "kaina":800, "spalva":{"juoda":2,"geltona":0} },
	{ "modelis":"toshiba sriuba", "kaina":256, "spalva":{"mėlyna":3,"žalia":1} },
	{ "modelis":"dell apskritimas", "kaina":697, "spalva":{"juoda":1,"balta":2} },
	{ "modelis":"acer peizažas", "kaina":620, "spalva":{"juoda":4,"balta":2} },
	{ "modelis":"apple 256", "kaina":2560, "spalva":{"balta":3,"juoda":1} },
	{ "modelis":"asus pokšt", "kaina":1001, "spalva":{"juoda":2,"geltona":3} }
];

var keys = [];

for(var x = 0; x<pcs.length;x++){
	// ISGAUNAMI RAKTAI
	var masyvas=pcs[x]["spalva"];
	keys.push(Object.keys(masyvas));
}

for(var x = 0; x<pcs.length;x++){	
	
	for(var y = 0; y < keys[x].length; y++){
		if((pcs[x]["spalva"][keys[x][y]]>1 && pcs[x]["spalva"]=="juoda") || (pcs[x]["spalva"][keys[x][y]]>1 && pcs[x]["spalva"]=="balta")){
			if(pcs[x]["kaina"]*2<=1600){
				console.log("Modelio "+pcs[x]["modelis"]+", kurio spalva " +keys[x][y]+ " yra tiek vnt: " + pcs[x]["spalva"][keys[x][y]]+". 2 vnt kaina: "+pcs[x]["kaina"]*2);
			}
		}
	}
}

two();

function() two{
	console.log("--------------------------------------------------------------------");
var pcs = [
	{ "modelis":"lenovo idėja", "kaina":1234, "spalva":{"raudona":1,"žalia":2} },
	{ "modelis":"hp monstras", "kaina":800, "spalva":{"juoda":2,"geltona":0} },
	{ "modelis":"toshiba sriuba", "kaina":256, "spalva":{"mėlyna":3,"žalia":1} },
	{ "modelis":"dell apskritimas", "kaina":697, "spalva":{"juoda":1,"balta":2} },
	{ "modelis":"acer peizažas", "kaina":620, "spalva":{"juoda":4,"balta":2} },
	{ "modelis":"apple 256", "kaina":2560, "spalva":{"balta":3,"juoda":1} },
	{ "modelis":"asus pokšt", "kaina":1001, "spalva":{"juoda":2,"geltona":3} }
];

var keys = [];

for(var x = 0; x<pcs.length;x++){
	// ISGAUNAMI RAKTAI
	var masyvas=pcs[x]["spalva"];
	keys.push(Object.keys(masyvas));
}

for(var x = 0; x<pcs.length;x++){	
	
	for(var y = 0; y < keys[x].length; y++){
		if(pcs[x]["spalva"]["juoda"]>1) || (pcs[x]["spalva"]["balta"]){
			if(pcs[x]["kaina"]*2<=1600){
				console.log("Modelio "+pcs[x]["modelis"]+", kurio spalva " +keys[x][y]+ " yra tiek vnt: " + pcs[x]["spalva"][keys[x][y]]+". 2 vnt kaina: "+pcs[x]["kaina"]*2);
			}
		}
	}
}
}






function kiekE(){
	var fraze = prompt("Kokia fraze noretum analiztuoti?");
	if(typeof(fraze) != "string"){
		alert("Tai ne fraze");
		return false;
	}
	else{
		var eSkaicius = 0;
		for(var index=0; index<fraze.length;index++){
			if(fraze.charAt(index) =='e' || fraze.charAt(index) =='E'){
				eSkaicius++;
				
			}
		}
	}
	alert(fraze + "\n" + "Sioje frazeje yra " + eSkaicius + " E raides");
	return true;
	
}


// UZDUOTIS 11
*/



	console.log("--------------------------------------------------------------------");
var pcs = [
	{ "modelis":"lenovo idėja", "kaina":1234, "spalva":{"raudona":1,"žalia":2} },
	{ "modelis":"hp monstras", "kaina":800, "spalva":{"juoda":2,"geltona":0} },
	{ "modelis":"toshiba sriuba", "kaina":256, "spalva":{"mėlyna":3,"žalia":1} },
	{ "modelis":"dell apskritimas", "kaina":697, "spalva":{"juoda":1,"balta":2} },
	{ "modelis":"acer peizažas", "kaina":620, "spalva":{"juoda":4,"balta":2} },
	{ "modelis":"apple 256", "kaina":2560, "spalva":{"balta":3,"juoda":1} },
	{ "modelis":"asus pokšt", "kaina":1001, "spalva":{"juoda":2,"geltona":3} }
];

	for(var i = 0; i < pcs.length; i++){
		
		
		if(((pcs[i]["spalva"]["balta"])>1 && (pcs[i]["spalva"]["juoda"])>1) && pcs[i]["kaina"]*2<=1600 ){
			if((pcs[i]["spalva"]["balta"]>1 && pcs[i]["spalva"]["juoda"]>1)){
				console.log("Modelis: "+ pcs[i]["modelis"]+ "\nKaina: "+pcs[i]["kaina"]+"\nSpalvos: balta ir juoda");
			}
		}
		else if(((pcs[i]["spalva"]["balta"])>1 || (pcs[i]["spalva"]["juoda"])>1) && pcs[i]["kaina"]*2<=1600 ) {
			if((pcs[i]["spalva"]["balta"]>1 && (!pcs[i]["spalva"]["juoda"] || !pcs[i]["spalva"]["juoda"]<2 ))){
				console.log("Modelis: "+ pcs[i]["modelis"]+ "\nKaina: "+pcs[i]["kaina"]+"\nSpalvos: balta");
			}
			if((pcs[i]["spalva"]["juoda"]>1 && (!pcs[i]["spalva"]["balta"]) || pcs[i]["spalva"]["balta"]<2)){
				console.log("Modelis: "+ pcs[i]["modelis"]+ "\nKaina: "+pcs[i]["kaina"]+"\nSpalvos: juoda");
			}
		}		
	}
	










