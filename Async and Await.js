// await : this program is used to stop execution and run again step by step all command


async function keval() {

  let Rajkotwether = new Promise((resolve, reject) => {
    setTimeout(() => {
      resolve("25 Deg")
    }, 2000)
  })

  let Ahmedabadwether = new Promise((resolve, reject) => {
    setTimeout(() => {
      resolve("50 Deg")
    }, 5000)
  })

  // Rajkotwether.then(alert)
  // Ahmedabadwether.then(alert)

  console.log('Fetching Rajkot weather please wait...')
  let Rajkotw = await Rajkotwether
  console.log('Rajkot weather Fetched: ' + Rajkotw)

  console.log('Fetching Ahmedabad weather please wait...')
  let Ahmedabadw = await Ahmedabadwether
  console.log('Ahmedabad weather Fetched: ' + Ahmedabadw)

  return [Rajkotw, Ahmedabadw]
}

console.log("welcome to weather control Room")
let a = keval()
a.then((value) => {
  console.log(value)
})
