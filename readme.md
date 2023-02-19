App desenvolvido por Flávio Mira, com as seguintes configurações:

Laravel Installer: 4.2.10
PHP: 8.1.6
NPM: 8.19.2
Composer: 2.3.5
MySQL Rodando a partir do XAMP Control Panel v3.2.4

====================================================

Versões dos Frameworks e bibliotecas utilizadas

Laravel: 9.52.0
Vue: 3.2.37
Bootstrap: 1.10.3
Vite: 4.0.0
bootstrap-icons": 1.10.3
vuex: 4.1.0
Axios: 1.1.2

====================================================

Para rodar o app no amiente de desenvolvimento seguir as etapas:
1 - Instalar os pre-requisitos para o desenvolvimento (composer, npm, php... nas versões já listadas acima);
2 - Clonar o repositório do github;
3 - Baixar as dependencias do composer e do npm;
4 - configurar o banco de dados no localhost (Arquivos dentro da pasta na raiz do projeto);
5 - Permitir o acesso ao localhost (Pode ser através do XAMP, WAMP ou rodando o mysql pelo proprio windows)
6 - Para ter acesso aos arquivos de imagens e outros assets é necessário rodar no terminal dentro da pasta do projeto o comando "php artisan storage:link" (Isto é necessário para que seja feito um espelhamento deles na pasta public pelo laravel)
7 - rodar o comando "npm run dev" no terminal
8 - rodar o comando "php artisan serve" para servir a aplicação (por padrão o laravel serve na porta 8000)
9 - após isso já é possivel acessar a aplicação no localhost na porta indicada;

====================================================

Algumas observações:

- O tema da aplicação varia com o tema do navegador que estiver utilizando para visualizar a mesma;
- No primeiro acesso é necessário criar um registro de novo usuario e depois efetuar o login;





