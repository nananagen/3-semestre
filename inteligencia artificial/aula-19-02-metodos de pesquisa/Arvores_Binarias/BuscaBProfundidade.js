class BuscaBProfundidade{
    static preOrdem(no){
        if (!no) {
            return;
        }

        console.log(no.valor);

        BuscaBProfundidade.preOrdem(no.filhoEsquerda);

        BuscaBProfundidade.preOrdem(no.filhoDireita);

    }
}


export default BuscaBProfundidade;