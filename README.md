# Opa! 🚀

[blog](https://www.youtube.com/@joao-xgh/about)

Este repositório foi criado com o propósito de documentar tópicos que geralmente recebem pouca atenção na nossa área de atuação, tais como:

- **O uso de 'localhost' em vez de 127.0.0.1**: Como essa escolha pode afetar sua aplicação e causar diversos problemas.

- **O Funcionamento Interno dos Bancos de Dados**: Vamos explorar o que acontece por debaixo dos panos.

- **O Protocolo HTTP**: Uma análise detalhada de como ele opera.

- **Introdução ao Regex para Noobs**: Aprenda os conceitos básicos das expressões regulares.

Modelagem do blog, simples e compacta:

```mermaid
classDiagram

class Author {
    uuid
    string: name
    string: password 
}

class Article {
    uuid
    string:  title
    text: document
    string: source
    bytea: banner
    timestamp: post_data
    bool: is_active
}

 Author "1" *-- "N" Article

```
