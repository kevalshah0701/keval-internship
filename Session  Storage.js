// sessionStorage.getItem("name")
// sessionStorage.clear()
// sessionStorage.removeItem("name")
// sessionStorage.setItem("name", "keval")
// sessionStorage.removeItem("name")


window.onstorage = (e) => {
  alert("changed")
  console.log(e)
}