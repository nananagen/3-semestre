import ArvoreBinaria from "./ArvoreBinaria.js";
import No from "./No.js";

let arvoreB = new ArvoreBinaria('A');

let noA = arvoreB.raiz;
let noB = new No("B");
let noC = new No("C");
let noD = new No("D");
let noE = new No("E");
let noF = new No("F");

noA.adicionaFilhoEsquerda(noB);
noA.adicionaFilhoDireita(noC);
noB.adicionaFilhoEsquerda(noF);
noC.adicionaFilhoDireita(noD);
noC.adicionaFilhoEsquerda(noE);

arvoreB.buscarPPreOrdem();
