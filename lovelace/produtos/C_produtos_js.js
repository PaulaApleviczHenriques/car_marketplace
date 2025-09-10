document.addEventListener('DOMContentLoaded', function () {
  // O código vem aqui
});
document.addEventListener('DOMContentLoaded', function () {
  var stream = document.querySelector('.gallery__stream');
  var items = document.querySelectorAll('.gallery__item');
  var prev = document.querySelector('.gallery__prev');
  var next = document.querySelector('.gallery__next');
});
document.addEventListener('DOMContentLoaded', function () {
  var stream = document.querySelector('.gallery__stream');
  var items = document.querySelectorAll('.gallery__item');
  var prev = document.querySelector('.gallery__prev');
  var next = document.querySelector('.gallery__next');

  prev.addEventListener('click', function () {
    stream.insertBefore(items[items.length - 1], items[0]);
    items = document.querySelectorAll('.gallery__item');
  });

  next.addEventListener('click', function () {
    stream.appendChild(items[0]);
    items = document.querySelectorAll('.gallery__item');
  });
});

//audi
function audi() {
  alert("Adicionado ao carrinho!")
  fetch("audi_get.php", {
    method: "GET"
  }).then(async function (resposta) {
    var dados = await resposta.json();
    console.log(dados);
  })
  fetch("audi_post.php", {
    method: "POST"
  })
}
//bmw
function bmw() {
  alert("Adicionado ao carrinho!")
  fetch("bmw_get.php", {
    method: "GET"
  }).then(async function (resposta) {
    var dados = await resposta.json();
    console.log(dados);
  })
  fetch("bmw_post.php", {
    method: "POST"
  })
}
//jaguar
function jaguar() {
  alert("Adicionado ao carrinho!")
  fetch("jaguar_get.php", {
    method: "GET"
  }).then(async function (resposta) {
    var dados = await resposta.json();
    console.log(dados);
  })
  fetch("jaguar_post.php", {
    method: "POST"
  })
}
//mercedes
function mercedes() {
  alert("Adicionado ao carrinho!")
  fetch("mercedes_get.php", {
    method: "GET"
  }).then(async function (resposta) {
    var dados = await resposta.json();
    console.log(dados);
  })
  fetch("mercedes_post.php", {
    method: "POST"
  })
}
//mini
function mini() {
  alert("Adicionado ao carrinho!")
  fetch("mini_get.php", {
    method: "GET"
  }).then(async function (resposta) {
    var dados = await resposta.json();
    console.log(dados);
  })
  fetch("mini_post.php", {
    method: "POST"
  })
}

//porsche
function porsche() {
  alert("Adicionado ao carrinho!")
  fetch("porsche_get.php", {
    method: "GET"
  }).then(async function (resposta) {
    var dados = await resposta.json();
    console.log(dados);
  })
  fetch("porsche_post.php", {
    method: "POST"
  })
}
//volvo
function volvo() {
  alert("Adicionado ao carrinho!")
  fetch("volvo_get.php", {
    method: "GET"
  }).then(async function (resposta) {
    var dados = await resposta.json();
    console.log(dados);
  })
  fetch("volvo_post.php", {
    method: "POST"
  })
}

