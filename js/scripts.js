function gerarPdf (){
    var doc = new jsPDF();
    var conteudo = document.getElementById('conteudo').innerText;
    doc.fromHTML(conteudo, 10, 10);
    

    doc.save('arquivo.pdf')
}