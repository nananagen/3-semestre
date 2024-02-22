import No from './No';
class Arvore{
    raiz = null;

    constructor(valor){
        this.raiz = new No(valor);
    }
}

export default Arvore;