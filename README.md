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
![alt text](https://github.com/ATCamposs/Design-Patterns-intermediario/blob/master/images/builder.png?raw=true)

*Factory Method*

Definir uma classe para criar objetos, mas deixar as subclasses decidirem que classe instanciar. O factory method permite adiar a instanciação subclasses.
 - Uma classe não deve antecipar a classe de objetos que deve criar.
 - uma classe quer que suas subclasses especifiquem os objetos que a criam.
 - Classes delegam responsabilidades para uma dentre várias subclasses auxiliares, e você quer localizar o conhecimento de qual subclasse auxiliar é delegada.
 ![alt text](https://github.com/ATCamposs/Design-Patterns-intermediario/blob/master/images/factory-method.png?raw=true)

*Prototype*

Especificar os tipos de objetos a serem criados usando uma instância protótipo e criar novos objetos pela cópia desse protótipo.
 - Quando as classes a instânciar forem forem especificadas em tempo de execução por exemplo, por carga dinâmica.
 - Para evitar a construção de uma hierarquia de classes de fábricas paralela a hierarquia de classes de produto.
 - Quando as instâncias de uma classe tiverem uma dentre poucas diferentes combinações de estado. Pode ser mais convêniente instalar um número correspondente de protótipos e cloná-los, ao invés de instânciar a classe manualmente, cada vez com um estado apropriado.
 ![alt text](https://github.com/ATCamposs/Design-Patterns-intermediario/blob/master/images/prototype.png?raw=true)
 
 *Singleton*
 
 Garantir que uma classe tenha somente uma instância e fornecer um ponto de acesso global para a mesma.
  - Se for preciso haver apenas uma instância de uma classe, e essa instância tiver que dar acesso aos clientes de um ponto conhecido.
  - A única instância tiver que ser extensível através de subclasses, possibilitando aos clientes usar uma instância extendida sem alterar seu código.
 ![alt text](https://github.com/ATCamposs/Design-Patterns-intermediario/blob/master/images/singleton.png?raw=true)

