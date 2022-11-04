function chamar_api(){
    varFIPE = document.getElementById("FIPE");
	fetch('https://brasilapi.com.br/api/fipe/preco/v1/' + varFIPE.value)
	  .then(response => response.json())
	  .then(data => exibir_imagem(data));
}

function exibir_imagem(data){
	document.getElementById("valor").value = data[0].valor;
    document.getElementById("marca").value = data[0].marca;
    document.getElementById("modelo").value = data[0].modelo;
    document.getElementById("anoModelo").value = data[0].anoModelo;
    document.getElementById("combustivel").value = data[0].combustivel;
    document.getElementById("mesReferencia").value = data[0].mesReferencia;
    document.getElementById("tipoVeiculo").value = data[0].tipoVeiculo;
    document.getElementById("siglaCombustivel").value = data[0].siglaCombustivel;
    document.getElementById("dataConsulta").value = data[0].dataConsulta;
}
