SELECT * FROM code.paginas;
use code;

truncate table paginas;

insert into paginas (titulo, conteudo) values
	('home', 'Conteudo da página inicial'),
	('empresa','Conteudo da página empresa'),
	('produtos','Conteudo da página de produtos'),
	('servicos','Conteudo da página de serviços'),
	('contato','Conteudo da página de contato');

Select * from paginas where titulo like '%ini%';