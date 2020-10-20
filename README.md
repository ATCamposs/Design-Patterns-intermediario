# Design Patterns intermediario

*Abstract Factory*

Criação de conjuntos de objetos relacionados ou dependentes, sem especificar sua classe concreta. O cliente da fabrica de abstração não precisa se preocupar em como esses objetos são criados, só precisa saber obte-los.
No caso da abstract factory é interessane usar interfaces para criação das classes(se não for possivel, ai sim usar classes abstratas)
 - Um sistema deve ser independente de como seus produtos são criados, compostos ou representados.
 - Um sistema deve ser configurado como um produto de uma familia de multiplos produtos.
 - Uma familia de objetos-produto foi projetada para ser usada em conjunto e você necessita garantir essa restrição.
 - Você quer fornecer uma biblioteca de classes de produtos e quer revelear somente suas interfaces, não suas implementações.
![alt text](https://github.com/ATCamposs/Design-Patterns-intermediario/blob/master/images/abstract-factory.png?raw=true)

*Builder*

Problema: Separar a construção de um objeto complexo da sua representação de modo que o mesmo processo de construção possa criar diferentes representações.
 - O algoritmo para criação de um objeto complexo deve ser independente das partes que compões o objeto e de como elas são montadas.
  - O processo de construção deve permitir diferentes representações para o objeto que é construido.
