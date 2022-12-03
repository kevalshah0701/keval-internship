let promise = new Promise(function(resolve, reject) {
  alert("Hello")
  resolve(56)

  // alert("I am alert in promise")
})


console.log("Hello 1")
setTimeout(function() {

  console.log("Hello 2") // print after 2 seconds
}, 2000)

console.log("My name is " + "Hello 3")
console.log(promise)


// Fetch google.com homepage  ==> console.log("google.com homepage done")
// Fetch data from the data api 
// Fetch pictures from the server 
// Print downloading 
// Rest of the script 


