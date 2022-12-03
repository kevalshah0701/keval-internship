class RailwayForm {
  submit() {
    alert(this.name + ": your Form has been submited")
  }
  cancel() {
    alert(this.name + ": your Form has been cancelled")
  }
  fill(givenname) {
    this.name = givenname
  }
}

// create form for keval:
let kevalForm = new RailwayForm()
// fill the form with details:
kevalForm.fill("keval")

// create form for meet:
let meetForm = new RailwayForm()
// fill the form with details:
meetForm.fill("meet")

kevalForm.submit()
meetForm.submit()
meetForm.cancel()
