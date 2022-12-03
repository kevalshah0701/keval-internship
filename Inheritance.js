class Animal {
  constructor(name, color) {
    this.name = name
    this.color = color
  }
  run() {
    console.log(this.name + "is Running")
  }
  bark() {
    console.log(this.name + " is barking")
  }
}

class monkey extends Animal {
  eatbanana() {
    console.log(this.name + " is eating banana")
  }
  hide() {
    console.log(`${this.name} is hiding`)
  }
}

let Ani = new Animal("dog", "black")
let mon = new monkey("monkey", "brown")

Ani.bark()
mon.eatbanana()
mon.hide()
//Ani.hide() // this is throw an error
