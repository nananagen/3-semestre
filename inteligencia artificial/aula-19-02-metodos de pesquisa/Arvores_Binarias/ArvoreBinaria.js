import No from './No';
import BuscaBProfundidade from "./BuscaBProfundidade";

class ArvoreBinaria{
    raiz = null;

    constructor(valor){
        this.raiz = new No(valor);
    }

    buscarPPreOrdem(){
        console.log("Busca em pré-ordem");
        BuscaBProfundidade.preOrdem(this.raiz);
    }
}

export default ArvoreBinaria;