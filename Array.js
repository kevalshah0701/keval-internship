let marks_class_12 = [95, 55, 83, 14, null, false, "not present" ]


console.log(marks_class_12)
console.log(marks_class_12[0])
console.log(marks_class_12[1])
console.log(marks_class_12[2])
console.log(marks_class_12[3])
console.log(marks_class_12[4])
console.log(marks_class_12[5])
console.log(marks_class_12[6])
console.log(marks_class_12[7])  // will be undefined because index 7 is doesn't exist

console.log(" The length of marks_class_12 is ",  marks_class_12.length)

marks_class_12[7] = 70 // adding a new value to th array 
marks_class_12[0] = 97 // changing the value of array 

console.log(marks_class_12)