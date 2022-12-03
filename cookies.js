console.log(document.cookie)
document.cookie = "name=kevalshah07"
document.cookie = "name2=kevalshah01"
document.cookie = "name=keval"
let key = prompt("enter your key")
let value = prompt("enter your value")
document.cookie = `${encodeURIComponent(key)} = ${encodeURIComponent(value)}`
console.log(document.cookie)