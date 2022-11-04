//Criação da Matriz
console.log("Matriz raiz: ")
var matriz = [
  [1,3,3,4],
  [5,6,7,8],
  [9,10,11,12],
  [13,14,15,16]
]
console.log(matriz)

console.log("------------------------------------------")
//Calculo da soma dos valores da primeira Coluna da Matriz
var SomaColuna1 = 0;

for(var i = 0; i < 4; i++){
  SomaColuna1 = matriz[i][0] + SomaColuna1
}

console.log("Soma dos valores da primeira coluna: ", SomaColuna1)

console.log("------------------------------------------")
//Calculo do Produto dos valores da primeira Linha da Matriz
var Produto = 1

for(var e = 0; e < 4; e++){
  Produto = matriz[0][e] * Produto
}

console.log("Produto dos valores da primeira linha: ", Produto)

console.log("------------------------------------------")
//Calculo da soma de todos os valores da Matriz
var SomaTodos = 0;

for(var l = 0; l < 4; l++){
  for(var u = 0; u < 4; u++){
    var SomaTodos = matriz[l][u] + SomaTodos;
  }
}

console.log("Soma de todos os valores da matriz: ", SomaTodos)

console.log("------------------------------------------")
//Calculo do Produto dos valores na diagonal principal da Matriz
var ProdutoDiagonal = 1

for(var q = 0; q < 4; q++){
    ProdutoDiagonal = matriz[q][q] * ProdutoDiagonal
}

console.log("Produto dos valores da da diagonal principal: ", ProdutoDiagonal)
