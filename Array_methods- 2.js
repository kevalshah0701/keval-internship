// delete =>

/*
let num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
let num_more = [11, 12, 13, 14, 15, 16, 17, 18, 19, 20]
    
/*
console.log(num.length)
delete num[0]
console.log(num.length)
*/


//   concat => join multiple Arrays

/*
let newArray = num.concat (num_more)
console.log(newArray)
*/


// sort => used to sort alphabatically 

/*
let compare = (a, b)=> {
  return a - b 
}
let num = [5, 10, 50, 66, 11, 88]
num.sort (compare)
console.log(num)
*/

// Reverse => 

/*
let num = [5, 10, 50, 66, 11, 88]
num.reverse ()
console.log(num)
*/

// splice  => used to add new item in Array 

/*
let num = [5, 10, 50, 66, 11, 88]
num.splice (2,3,101,102,103)
console.log(num)
*/

// slice => used to  item in array 

let num = [5, 10, 50, 66, 11, 88]

// let newnum = num.slice(3)

let newnum = num.slice(3, 5)

console.log(newnum)