'use strict'

console.log('hello world!')

document.addEventListener('DOMContentLoaded', function () {
  const myButton = document.getElementById('myButton')

  if (myButton) {
    myButton.addEventListener('click', function () {
      alert('Button clicked!')
    })
  }
})
