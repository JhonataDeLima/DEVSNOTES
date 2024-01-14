DEVSNOTES: (Sistema de anotações simples)
Aulas de criação de APIs (PHP Estruturado)

O uqe o projeto precisa fazer ?
- Listar as anotações
- Pegar informações de UMA anotação
- Inserir uma anotação nova
- Atualizar uma anotação
- Deletar uma anotação

Qual a estrutura de dados ?
- local para armazenar as anontações
-- id
-- title
-- body

Quais os endpoints ?
-(GET) /api/notes - /api/getall.php
-(GET) /api/notes/123 - /api/get.php?123
-(POST) /api/note (title, body) - /api/insert.php (title, body)
-(PUT) /api/note/123 (tltle, body) /api/update.php (id, title, body)
-(DELETE) /api/note/123 - /api/delete.php (id)