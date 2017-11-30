function duplicateCounter(){
	var text = document.getElementById("text").value;
	console.log(text.length);
	document.getElementById("dup").innerHTML = 
		"Number of Duplicates: " + 
		(text.toLowerCase().split('').sort().join('').match(/([^])\1+/g)).length;
		
}

/*var name = "andrius markevicius";

console.log(pirmaDidzioji(name));


function pirmaDidzioji(fullName){
	var stringArray = fullName.split(' ');
	
	for(var i = 0; i< stringArray.length; i++){
		stringArray[i] = convertChar(stringArray[i]);		
	}
	
	return (stringArray.join(' '));
}

function convertChar(zodis){
	
	var output = [];	
	output[0] = zodis.charAt(0).toUpperCase();
	output[1] = zodis.substring(1);
	
	return (output.join(''));
}*/

var automobiliai = {
	"ALFA":9000,
	"BMW": 12000,
	"FIAT": 10000,
	"MASERATI": 20000,
	"MINI": 11000,
}
for (marke in automobiliai){
	console.log(marke +" kaina: "+ automobiliai[marke]);
}
/*


Turime masyvą, kuriame yra trumpos tekstinės eilutės (pateikta apačioje). Mūsų užduotis:
1. Sukurti funkciją, kuri rastų ilgiausią žodį tekstinėje eilutėje
2. Panaudojant šią funkciją išvesti kiekvienos eilutės ilgiausią žodį (rezultatas turi būti viena tekstinė eilutė)
3. Išvedant žodžius panaudoti tarpą tarp žodžių
4. Išvedimas turi būti dinamiškas (pasikeitus masyve esančių eilučių skaičiui - vis tiek gautume kiekvienos eilutės ilgiausią žodį)
5. Rezultatą išvesti konsolėje

// Masyvas

*/

var posts = ["Sveikinu radus darbą", "Ar tikrai pabaigus kursą viskas bus gerai", "Javascript nėra Java", "Rasti video medžiagą visada šaunu"];
findLongestWords(posts);

// SURANDA VISUS ILGIAUSIUS ZODZIUS
function findLongestWords(textArray){
	longestWordsArray = [];
	for(textElement in textArray){
		longestWordsArray.push(findLongestWord(textArray[textElement]));
	}		
	console.log(longestWordsArray.join(' '));
}

// SURANDA VIENA ILGIAUSIA ZODI
function findLongestWord(text){
	var wordArray = text.split(" ");
	var longestWord = "";
	for(word in wordArray){
		if(wordArray[word].length > longestWord.length)
			longestWord = wordArray[word];
	}
	return longestWord;
}








