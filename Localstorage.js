// Set/Get/Remove/clear/lenght/index item method:

let key = prompt("enter a key you want to set ")
let value = prompt("enter a value you want to set ")

// you can view your local storage like : go to your browser and inspect you can see the local storage in application menu and see result in your console :-


localStorage.setItem (key, value)        // used to set item in your local storage. 

console.log(`The value at ${key} is ${localStorage.getItem (key)}`)     // used to Get item in your console from local storage. 

if (key == "red" ||  key == "blue") {
  localStorage.removeItem (key)      // used to Remove item in your local storage.  
}

if (key == 0) {
  localStorage.clear ()            // used to clear your local storage.
}

localStorage.length               // used to view length of your local storage. 

localStorage.key(0)              // used to view item index in your local storage.