// program-1 : For loop

let marks = {
  keval: 95,
  shubham: 35,
  harry: 50,
  janvi: 60,
  milan: 4
}

for(let i=0;i<Object.keys(marks).length;i++){
  
  //console.log("The marks of " + Object.keys(marks)[i] + " are " + marks[Object.keys(marks)[i]])

}

// program-2 : For in loop


for(let key in marks){
  //console.log("The marks of " + key + " are " + marks[key])
  
}

// program-3 :

let cn = 43
let i
while ( i !=cn){
i = prompt ("enter a number:")
  console.log("try again!")
}
console.log("you have entered a correct number ")

// program-4 :

const mean = (a, b, c, d) =>{
  return ( a + b + c +d ) /4
}

console.log(mean(4,5,6,7))