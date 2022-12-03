let a = {
  name2: "keval",
  Language: "Javascript",
  run: () => {
    alert("self Run")
  }
}

console.log(a)

let p = {
  run: () => {
    alert("Run")
  }
}

p.__proto__ = {
  name: "Jackey"
}

a.__proto__ = p
a.run()
console.log(a.name)