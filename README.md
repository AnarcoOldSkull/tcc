
SISTEMA GERENCIADOR DE PREÇOS E QUALIDADES DE CARNES

Leonardo Porto Penna
Silvio Cesar Viegas
RESUMO
Este projeto trabalhou com a arquitetura cliente-servidor, por esta razão foi escolhida a ferramenta XAMPP, que integra muitos serviços, entre eles, o servidor apache como interpretador HTTP, proporcionando também a linguagem PHP, servindo de tecnologia server side. A persistência das informações serão baseadas no banco de dados relacional MYSQL, possibilitando uma dinamização, deste sistema no client-side, com uso das linguagens javascript e jquery. O projeto foi denominado SAS ( Search Available System ) Carne, por objetivar, aproximar clientes e fornecedores, através das ferramentas de pesquisa, nas quais irão ser informados dados cadastrais sobre açougues, mercados e supermercados, que queiram apresentar seus produtos. Estes poderão ser avaliados pelos clientes cadastrados na plataforma, gerando feedbacks, pois é fundamental aferir a qualidade dos produtos. O sistema será administrado, para que os dados informados por usuários, que pretendem cadastrar os valores dos produtos de sua empresa, sejam realmente responsáveis em representá-la. O desenvolvimento desta plataforma foi inspirado pela visível necessidade de uma ferramenta com o objetivo já mencionado anteriormente, tendo em vista o aumento desordenado nos preços de todos os gêneros alimentícios, em especial a carne bovina, a maior fonte de ferro.

Palavras Chaves: Carnes, Preços, Qualidade, Pesquisa, Desenvolvimento Web


1 INTRODUÇÃO

Em momentos de pandemia que vivemos, busca-se mecanismos de aproximação das empresas aos clientes, várias ferramentas têm transformado o cotidiano das pessoas e facilitando a observação de produtos, qualidades e preços. Provenientes de um estímulo de facilitar e diminuir riscos.
A aproximação de pessoas para carne bovina, pode ter origem de saúde ou até mesmo dos custos, estes custos têm se mostrado desproporcionalmente elevados em relação a anos anteriores.
A anemia por falta de ferro é um dos motivos de saúde que pode levar o consumidor a ter necessidade de consumir carne bovina, pois a deficiência de ferro pode prejudicar a produção de neurotransmissores, especialmente a dopamina.
O aumento nos custos impacta de duas formas os clientes: a primeira forma é a diminuição, tanto na qualidade dos produtos encontrados, em restaurantes e lancherias ou até mesmo a diminuição das porções de carne que eram servidas. A segunda forma é o aumento considerável, diretamente nos custos da venda dos produtos que anteriormente eram consumidos.

2 TEMA

Vivemos em momentos muito conturbados, além de dificuldades provenientes de cuidados drásticos referentes a saúde pública devido a pandemia de Coronavírus, o aumento nos custos generalizados de produtos alimentícios fazem com que se faça necessário muitos aplicativos tanto para entrega de produtos assim como aplicativos que auxiliem na distribuição de informações pertinentes aos clientes.
Por este motivo acredita-se que um aplicativo que facilite tanto os clientes observarem onde encontram os melhores preços de carnes, e possam retornar um feedback sobre a qualidade dessas carnes é um nicho ainda não explorado dentre esta vasta gama de aplicações e ferramentas referentes a mercados e produtos.

2.1 DELIMITAÇÃO DO TEMA

Criar uma aplicação localhost utilizando servidor apache sendo executado pelo xampp, para que seja possível desenvolver em php como tecnologia server side, e utilizando javascript e jquery como tecnologias user side possibilitando obter informações async através de ajax e modelando a página através de Bootstrap 5, utilizando mysqli para armazenamento das informações cadastradas.
Possibilitando dessa maneira criar um sistema para simular cadastros de provedores de carnes sobre seus valores de produtos e simular retorno dos clientes de informações pertinentes a qualidade destes produtos. Para quem sabe em algum momento futuro se torne possível a hospedagem desta aplicação.

2.2 PROBLEMA

Centralizar informações de forma a deixar acessível a todos que tiverem interesse ou necessidade, seja por motivos nutricionais, financeiros ou até mesmo por saúde tanto quanto qualquer tipo de empreendimento, os valores e as qualidades dos produtos do gênero alimentício, mais especificamente carnes.

2.3 JUSTIFICATIVA

Segundo o site da Companhia Nacional de Abastecimento CONAB, eles são responsáveis pela pesquisa de mais de 100 produtos agropecuários há mais de 30 anos. E tendo observado que conforme pesquisa realizada no site “http://sisdep.conab.gov.br/precosiagroweb/” no dia 15/06/2021 às 18:22, utilizando como filtros Preços Mensais, Período de janeiro de 2019 a maio de 2021, Produto Carne Bovina, Nível de Comercialização Todos, para a Unidade Federativa do Rio Grande do Sul, observou-se que para os tipos de carnes bovinas apresentadas houve um aumento consideravelmente excessivo nos custos das carnes cito o exemplo: “CARNE BOVINA DIANTEIRO COM OSSO (kg)” que para o Atacado teve seu preço variando de R$ 13,34 em janeiro de 2019 para R$ 29,64 em maio de 2021, já “CARNE BOVINA PONTA DE AGULHA (kg)”, também para o atacado, variou de R$ 9,57 para R$ 22,55 no mesmo período.
Desta maneira, o desenvolvimento de um site, no qual apresenta os mais diversos tipos de carne, subdividido por fornecedor, pode ajudar bastante a população independente do nível de interesse deste pretenso consumidor de carnes.

2.4 OBJETIVO GERAL

Desenvolver um site que possibilite às pessoas interessadas terem acesso aos valores atualizados de produtos do gênero carne, possibilitando que estes retornem um breve feedback da qualidade destes produtos.

2.5 OBJETIVOS ESPECÍFICOS

Acredita-se ser necessário para o funcionamento deste sistema que:
Tanto clientes quanto fornecedores mantenham cadastro;
Fornecedores atualizem os preços de seus produtos por tipo;
Listar os produtos e filtrar conforme busca em pesquisa;
Possibilitar que os clientes apliquem feedback sobre os produtos.
3 REFERENCIAL TEÓRICO

3.1 SEGMENTO DE MERCADO

A intenção deste projeto é fazer o intermédio entre fornecedor e consumidor de carnes, pois como podemos observar segundo dados da CONAB, houve um aumento de mais de 100% nos preços das carnes bovinas nos últimos 2 anos, isso acaba transferindo estes custos tanto pra famílias quanto para outros segmentos de mercado como restaurantes e lancherias.

3.2 FERRAMENTAS

Xampp é uma ferramenta utilizada para criação, tanto de servidores apache, quanto utilização de banco de dados Mysql, sem esquecer possibilitando o desenvolvimento em php,  além disso possibilita a utilização de outras ferramentas e linguagens que não serão utilizadas neste projeto.
Segundo o site “https://www.php.net/manual/pt_BR/index.php” php significa “PHP: hypertext Processor” e é uma linguagem voltada ao desenvolvimento de documentos web, sendo possível gerar páginas dinâmicas através desta linguagem. Conforme o manual, sua sintaxe é semelhante a C, Java e Perl.
Importante notar que o php ao contrário do javascript não funciona na máquina do usuário, onde está sendo executado a página HTML, mas sim no servidor, desta maneira é denominado uma tecnologia server side. Portanto o código requisitado não pode ser acessado pelo usuário ou até mesmo diretamente pelo navegador.
Sobre o javaScript é importante ressaltar, que além de uma linguagem bastante dinâmica, por interagir diretamente com o usuário, por ser uma tecnologia user side (funciona localmente), esta tecnologia possui a grande vantagem de conseguir interagir com as tags do HTML, como com a estilização das página provenientes do CSS.
Devido seu grande potencial, o próprio javaScript deu origem a várias outras bibliotecas que são utilizadas atualmente por desenvolvedores WEB, dentre elas, jquery e ajax que também serão utilizadas no desenvolvimento deste projeto.
A biblioteca jquery foi desenvolvida com o intuito de simplificar a sintaxe da linguagem JavaScript, pois apesar de ser uma linguagem bastante utilizada a sintaxe do JavaScript não é de muito fácil aprendizado.
O AJAX é uma tecnologia bastante utilizada nos desenvolvimentos WEB pois, ele possibilita a atualização dos dados contidos na página atual sem necessitar atualizar completamente a página que está sendo exibida. Apesar do nome AJAX, significa asynchronous JavaScript and XML, atualmente a tecnologia se utiliza muito do método JSON, ao invés do XML contigo no nome, pelo fato do JSON ser menos verboso.
Sobre o MYSQL é um SGBD (Sistema Gerenciador de Banco de Dados) e também é importante falar que possui versões pagas, porém pode ser obtido na versão GPL que é uma licença que permite executar livremente o programa, as versões não gratuitas são de propriedade da Oracle. Além disso, MYSQL é um banco de dados estruturado e que possibilita o multithread ( capacidade de uma CPU executar múltiplos processos de threads, de forma que compartilhem recursos ). Possuindo outra característica muito importante que é o multiusuário, que representa a capacidade de mais de um usuário utilizar o sistema simultaneamente.
Neste ponto torna-se importante evidenciar, que com a utilização do php juntamente como o SGBD MYSQL, iremos utilizar a API do php que se refere a acesso a esse banco de dados chamada MYSQLi. Existiriam outras opções de API para possíveis utilizações nesse projeto, tais como (PHP data object PDO), porém optou-se pela utilização da MYSQLi. 
Iremos também utilizar o htaccess (hypertext access) que é um arquivo de configuração para servidores, que originalmente foi criado para fazer o controle de perfis usuários, porém foi expandido, fazendo muitas outras coisas hoje em dia. Neste projeto ele será utilizado de forma a aplicar URL amigável, pois desta forma as URL ficam muito mais fáceis de lidar pelos usuários, o método de comandos provenientes do htaccess para utilizar estas URL, são chamados de rewriting URL. 

3.3 DIAGRAMA DE CASO DE USO

Figura 1.0 - UC 01 - Logar






Fonte: O Autor, (2021).











Figura 1.1 - UC 02 - Cadastro











Fonte: O Autor, (2021).

Figura 1.2 - UC 03 - Expandir Cadastro








Fonte: O Autor, (2021).

Figura 1.3 - UC 04 - Aprovar











Fonte: O Autor, (2021).



Figura 1.4 - UC 05 - Cadastrar Produtos










Fonte: O Autor, (2021).

Figura 1.5 - UC 06 - Listar Produto






Fonte: O Autor, (2021).

Figura 1.6 - UC 07 - Avaliar Produtos





Fonte: O Autor, (2021).







3.3 DIAGRAMA DE CLASSES
Figura 2 - Diagrama de Classes




















Fonte: O Autor, (2021).

4 METODOLOGIA
Observando que neste projeto estaremos utilizando a metodologia científica de abordagem qualitativa, que consiste na observação de fenômenos, constituindo o núcleo dos procedimentos científicos independentes de sua natureza. 
A natureza aplicada busca resolver problemas apresentados tanto entre atores sociais e ou organizações e serviços. E sendo um dos focos no projeto aplicado no curso de análise e desenvolvimento de sistemas.
Como um projeto experimental, busca variáveis de métodos de controle para atingir os objetivos em relação ao objeto de pesquisa.




Quadro 1 - Metodologia Científica
1 - Definição
1.1 - Objetos de pesquisa.
1.2 - Caracterização dos objetos.
1.3 - Linguagens.
1.4 - Persistência.
2 - Conhecimento
2.1 - Tipos de carne
2.2 - Tipos de clientes
3 - Desenvolvimento
3.1 - Arquitetura
3.2 - Codificação
3.3 - Navegabilidade
3.4 - Tipo de Teste
5 - Resultado
5.1 - Análise


Definição: Nesta etapa acontece a identificação do objeto de desenvolvimento do trabalho mostrando. 
1.1 Objeto de pesquisa: Como observado anteriormente, a busca nos tipos de carne bovina e mercado, considerando valores específicos e qualidade de produto, tomando estes como fruto de interesse dos clientes, que ainda se faz necessário no cenário nacional;
1.2 Caracterização dos objetos: A especificação após pesquisa se faz necessária, após identificar os objetos, pontuá-los de forma a separá-los em grupos, sendo assim possível aplicar em ferramentas.
1.3  Linguagens: Identificação das linguagens e métodos conhecidos que serão necessários para utilização posteriormente no desenvolvimento é bastante importante, desta maneira, php como tecnologia server side é uma ferramenta muito importante no desenvolvimento e javascript e jquery são bastante úteis no lado user side, e
1.4 Persistência: Por possuir biblioteca especificamente desenvolvida para a linguagem server side e ter facilidade na implantação foi escolhido como SGBD o MYSQL.
Conhecimento: De acordo com o objeto de pesquisa, faz-se necessário entender melhor as concepções e amplitudes, tanto de carnes bovinas quanto de clientes.
	2.1 Tipos de carne:  A identificação do objeto deste projeto é naturalmente um dos pontos de conhecimento de necessidade de compreensão, por isso pontuar os diferentes tipos de cortes e diferentes tipos de peças obtidas através dos cortes são o foco nesta sessão.
2.2 Tipos de clientes: A compreensão de que as pessoas consomem carne não basta, se faz necessário identificar, o porquê as pessoas precisam usufruir deste bem de consumo.
3. Desenvolvimento: Será identificado os métodos e modelos a serem adotados durante a parte de desenvolvimento do sistema dentro dos padrões escolhidos.
3.1 Arquitetura: Para este projeto será adotado a arquitetura Cliente-Servidor, mesmo sendo utilizado em apenas uma máquina no projeto, normalmente é uma arquitetura com serviço distribuído.
3.2 Codificação: A utilização de linguagens e métodos conhecidos para programação web serão de importante valia no desenrolar do desenvolvimento deste projeto.
3.3 Navegabilidade: A interface padrão para este projeto que será adotada é o padrão Home Link, muito utilizado em sistemas web de modo que fique acessível a página inicial durante a navegação.
3.4 Tipo de Teste: Observando os tipos de testes disponíveis, optou-se pela utilização dos testes de componentes.
4. Resultados: Possibilita verificar o quanto do objetivo de pesquisa foi alcançado, e projetar perspectivas futuras.
4.1 Análise: Busca observar se as necessidades requeridas no projeto foram atingidos e também se possui todos os métodos previstos, podendo assim viabilizar futuras expansões para que se aplique mais objetos dentro do projeto e também quem sabe projetar viabilizações entre cliente e fornecedor. 

5 DESENVOLVIMENTO

Como foi explicado até agora, o projeto utiliza linguagem php como padrão server side, para uma arquitetura cliente-servidor, e linguagens javascript e jquery com o intuito de dinamizar o processamento dos dados a serem executados e apresentados para o usuário.



5.1 ARQUITETURA
Como foi elucidado anteriormente a arquitetura a ser utilizada neste sistema é a cliente servidor, por este motivo faz-se necessário exemplificar as ferramentas que estão sendo utilizadas para o desenvolvimento deste sistema.
Utilizaremos a ferramenta XAMPP ( Apache, MariaDB, PHP, Perl ) para facilitar a implementação deste servidor, sendo o apache responsável pelo protocolo HTTP e rodando o PHP como um módulo nativo.

Figura 3 - XAMPP















Fonte: O Autor, (2021).

Uma das vantagens de utilizar o XAMPP é que além de fácil instalação e utilização, podemos ajustar facilmente suas configurações. Alterando DocumentRoot, indicamos onde está a raiz do projeto.





Figura 4 - Configurar XAMPP



























Fonte: O Autor, (2021).

Importante ressaltar, que o XAMPP trabalha com o phpMyAdmin, podendo assim gerenciar seu banco de dados sem a necessidade de utilizar ferramentas pagas entre outros.

Figura 5 - PhpMyAdmin










Fonte: O Autor, (2021).

5.2 NAVEGABILIDADE
A barra de navegação busca um visual enxuto para tentar simplificar o compreendimento do usuário e apresenta a tag título, mostrando de maneira sutil ao usuário o que estará apresentando na sessão a ser selecionada.

Figura 6 - Barra de Navegação



Fonte: O Autor, (2021).

Inicialmente como um projeto de graduação o sistema apresentará uma tela para tentar de forma amigável mostrar a sua ambientação e possibilitando explicar como deverá proceder o desenrolar do sistema, seguindo o passo a passo do desenvolvimento deste sistema.






Figura 7 - Apresentação











Fonte: O Autor, (2021).

Tornando-se a partir deste ponto necessário logar no sistema para acessar as demais funcionalidades propostas, pois as demais funcionalidades dependem do tipo de usuário que irá interagir.

Figura 8 - Tela de Logon











Fonte: O Autor, (2021).

Caso o usuário não tenha cadastro ainda é possível tentar cadastrar facilmente na mesma tela de acesso, mas caso este tente utilizar algum usuário já existente no sistema, será apresentado a seguinte mensagem.

Figura 9 - Usuário já cadastrado






Fonte: O Autor. (2021).

Porém sendo possível o cadastramento do novo usuário o sistema também irá apresentar uma mensagem, mas desta vez informando positivamente que o cadastro está sendo realizado.

Figura 10 - Cadastrado com sucesso






Fonte: O Autor. (2021).

Estando conectado com usuário normal, e precisando expandir seu cadastro para poder ser um fornecedor. O usuário irá necessitar preencher o complemento e o  acesso ao formulário que torna possível tal prosseguimento cadastral, que está disponível na seção configuração.




Figura 11 - Configuração

Fonte: O Autor (2021).

Este botão irá abrir uma nova tela amigável com um texto breve, para compreensão do que se trata e disponibilizar a partir deste ponto, executar a requisição do formulário.
Figura 12 - Requisitar formulário













Fonte: O Autor (2021).

Ao clicar no botão “Pedir complemento”, o formulário, com os dados necessários para requisitar as funções de fornecedor, será exibido.







Figura 13 - Formulário fornecedor













Fonte: O Autor (2021).

O preenchimento deste formulário só será possível uma vez, e após seu preenchimento os campos ficaram disabled (desabilitados para edição) e o botão de pedir complemento também não estará mais “clicável”. Conforme podemos observar na imagem abaixo.

Figura 14 - Formulário enviado













Fonte: O Autor (2021).
Enquanto este usuário não for aprovado pelo administrador do sistema, ele seguirá com as funcionalidades e restrições de um usuário comum, desta maneira ele poderá inclusive enviar feedback sobre os produtos.
Para que os feedbacks sejam possíveis é necessário acessar a lista de produtos primeiramente.

Figura 15 - Lista de produtos













Fonte: O Autor (2021)

Como podemos observar na imagem anterior, temos além dos dados cadastrais da empresa que está apresentando seus produtos aos clientes, temos o botão individualizado para que se torne possível observar os feedbacks já realizados sobre os produtos.








Figura 16 - Feedbacks recebidos pelo produto









Fonte: O Autor (2021).

Esses feedbacks podem ser adicionados ao preenchimento de um rápido formulário que é disponibilizado a qualquer cliente, quando clica no segundo botão que podemos observar na imagem. O primeiro botão irá retornar a lista de produtos que o cliente se encontrava anteriormente.

Figura 17 - Inserir feedbacks











Fonte: O Autor (2021).

Podemos observar que para o cliente não se enganar em relação a que produto está fazendo o feedback, apresentamos textualmente as três principais características de identificação do produto que está sendo analisado, empresa que está em observação, o tipo de corte do produto oferecido pelo fornecedor, e a peça pertencente a este corte para o produto em questão. Após preenchimento da descrição e de quantificar em estrelas o produto, basta enviar os dados e o sistema irá naturalmente atualizar a listagem dos feedbacks realizados sobre os itens acima listados.

Figura 18 - Confirmação de Feedback Realizado









Fonte: O Autor (2021)

Para o perfil administrador, teremos uma breve modificação na barra de navegação, pois será apresentado ao invés da configuração, onde o cliente pede para complementar o perfil, a sessão para validação destes pedidos.

Figura 19 - Validação




Fonte: O Autor (2021)

Ao acessar a validação, serão listados não somente os pedidos pendentes, mas também os que já foram respondidos. Lembrando que é interessante ter essa parte de validação para que o administrador do sistema possa validar os dados inseridos nos pedidos dos clientes, para que não tenhamos falsos fornecedores ou até mesmo sem informações mínimas para sua comprovada existência como empresa.  

Figura 20 - Apresentação validação










Fonte: O Autor (2021)

Como podemos observar na (Figura 20)  para cada requisição feita, teremos dois botões: um para aprovação, outro para reprovação e após ação executada pelo administrador, ambas respostas poderão ser exibidas conforme resposta aplicada.
Obtendo aprovação, após verificação do administrador, passa a ser possível finalmente ao fornecedor apresentar seus preços, para os tipos de carnes estabelecidos. Determinar esses preços irá necessitar seguir uma sequência de informações semelhantes aos cuidados que precisamos ter ao informar o feedback. 

Figura 21 - Seleção do tipo de corte











Fonte: O Autor (2021).
Observação do tipo de corte, ao qual o produto que estamos ofertando pertence.
Selecionar a peça de carne que pretendemos atualizar o preço.
Visualizar o preço atualmente cadastrado e ver se o mesmo diverge do novo preço proposto.

Figura 22 -  Observação e atualização de valores












Fonte: O Autor (2021).

Após utilização da ferramenta, como sempre recomendado por segurança, orienta-se executar logoff, podendo ser realizada no botão mais à direita exibido na barra de navegação.

6 RESULTADOS
Através dos testes realizados durante o desenvolvimento do projeto, verificou-se que a ferramenta ficou bastante dinâmica e de fácil manuseio. Percebeu-se durante o as tentativas de conexão que se atingiria mais facilmente algumas restrições mediante o uso de sessões, do que utilizando cookies.
As tabelas possuem fácil visualização, pois foram agrupados alguns dados necessários, como por exemplo os referentes ao endereço, para facilitar a visualização, isso diminuiu o número de colunas necessárias razoavelmente.
Cada divisão do projeto possui um cabeçalho, um corpo e um pé, onde a manipulação destes dados deixou o sistema mais fácil de supor e  acompanhar, a partir daí o que seria atualizado, através da manipulação do sistema. 
Acredita-se ter alcançado o objetivo primário do desenvolvimento do sistema proposto que é possuir um controle de acesso para clientes e fornecedores, disponibilizando funções individualmente separadas, como cadastro de produtos e geração de feedbacks.

7 CONSIDERAÇÕES FINAIS
O SAS (Search Available System) Carne busca a centralização das informações dos produtos de carne, possibilitando aproximar clientes e fornecedores, onde torna interesse dos clientes saber o preço dos produtos disponíveis, assim como a qualidade destes produtos, de modo a poder usufruir de um ramo alimentício que atualmente está em constante alta nos custos, influenciando diretamente as rendas tanto familiares quanto de pequenas e grandes empresas.
Para os produtores, torna-se uma ferramenta bastante útil, pois mantendo uma boa qualidade dos produtos os clientes poderão deixar isso visível a todos, além de possibilitar que todos os clientes sempre fiquem atentos aos seus preços quanto alguma promoção que venha acontecer.
Existem possíveis expansões dentro do sistema, porém não foram previstos para este projeto, tais como:
Disponibilizar a clientes, possibilidade de solicitar separação e reserva de produto para posteriormente ir buscar com o fornecedor.
Inicialmente desejava-se um amplo mercado relacionado a carnes, mas restringiu-se a carnes bovinas, desta maneira seria interessante apresentar demais tipos de carnes.
Expansão em regras de segurança de usuário, e possibilidade de complementação de cadastro para clientes, possibilitaria novas implementações dentro do sistema.
Fornecedor poder colar ofertas especiais com descontos para usuários da ferramenta.





8 REFERÊNCIAS

http://acouguegaucho.blogspot.com/2013/05/o-mapa-do-boi-raquete-tambemconhecido.html acessado em 30/06/2021

https://www.apachefriends.org/pt_br/index.html acessado em  22/06/2021 14:30

https://bdm.ufmt.br/bitstream/1/415/1/TCCP_2016_Claudio%20Ferraz.pdf acessado em 29/06/2021 10:20

https://blogdacarne.com/dicas-para-comprar-carne-nos-eua/ acessado em 19/06/2021 21:46

https://canaltech.com.br/internet/O-que-e-e-como-funciona-a-linguagem-JavaScript/  acessado em  23/06/2021 20:07

https://developer.mozilla.org/pt-BR/docs/Web/Guide/AJAX acessado em  23/06/2021 23:08

https://dev.mysql.com/doc/refman/8.0/en/ acessado em 24/06/2021 09:51

https://edisciplinas.usp.br/pluginfile.php/1895937/mod_resource/content/1/04_OB-JACCOUD_MAYER.pdf acessado em 30/06/2021 10:13

https://jquery.com acessado em  23/06/2021 20:10

https://www.json.org/json-en.html  acessado em 23/06/2021 23:13

https://posdigital.pucpr.br/blog/tipos-de-arquitetura-de-software acessado em 28/06/2021 14:15

https://pt.wikipedia.org/wiki/GNU_General_Public_License acessado em 24/06/2021 10:10

https://web.archive.org/web/20090419001647/http://httpd.apache.org/docs/2.3/howto/htaccess.html 25/06/2021 21:48

https://web.archive.org/web/20100821074918/http://cache-www.intel.com/cd/00/00/01/77/17705_htt_user_guide.pdf acessado em  25/06/2021 21:51

https://web.bndes.gov.br/bib/jspui/bitstream/1408/3401/2/BS%2006%20Cadeia%20da%20carne%20bovina_P.pdf acessado em 28/06/2021 19:59


https://www.ateomomento.com.br/caso-de-uso-include-extend-e-generalizacao/ acessado em 25/06/2021 16:54

https://www.cin.ufpe.br/~gta/rup-vc/core.base_rup/guidances/concepts/web_architecture_patterns_49E51CA1.html acessado em 28/06/2021 14:29

https://www.cpt.com.br/cursos-processamentodecarne-comomontar/artigos/cortes-de-carne-bovina-classificacoes-e-caracteristicas  acessado em 19/06/2021 21:21

https://www.inf.pucrs.br/~cnunes/lapro/aulas/AulaLinux.pdf acessado em 24/06/2021 21:52

https://www.php.net/manual/pt_BR/index.php acessado em  22/06/2021 14:43

http://www.uel.br/grupo-pesquisa/gpac/pages/arquivos/consumo%20de%20carne%20revisado%20II%20livro%20ronaldo.pdf acessado em 10/07/2021 as 09:36

I.Gallotti, Giocondo Marino Antonio. Arquitetura de software. São Paulo : Person Education do Brasil, 2016. 135
