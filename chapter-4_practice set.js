// program -1:

let str = "kev\""
console.log (str.length)

// program -2:

const sentence = 'The quick brown fox jumps over the lazy dog.';

const word = 'fox';
console.log(sentence.includes(word))
console.log(`The word "${word}" ${sentence.includes(word) ? 'is' : 'is not'} in the sentence`);

// program -3 :

let str2 = "please give Rs 1000 "
let amount = Number.parseInt(str2.slice (15))

console.log(amount)
console.log(typeof amount)

// program -5 :

let friend = "shruti"
friend [3] = "R" //friend is not change ,because string is inmutabe 
console.log(friend)