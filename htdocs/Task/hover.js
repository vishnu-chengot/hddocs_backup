limit = document.querySelectorAll("li")

// limit = document.getElementsByClassName("myclass")


for (let i = 0; i < limit.length; i++) {
  limit[i].addEventListener('mouseover', coloringHandler);
  limit[i].addEventListener('mouseout', decoloringHandler);
}

function coloringHandler() {
  this.classList.add("Rclass")
}

function decoloringHandler() {
  this.classList.remove("Rclass")
}