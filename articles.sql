DROP TABLE IF EXISTS articles;


CREATE TABLE articles(
	id smallint unsigned NOT NULL auto_increment,
	publicationDate date NOT NULL,
	title VARCHAR(255) NOT NULL,
	summary text NOT NULL,
	content mediumtext NOT NULL,

	PRIMARY KEY (ID)

);
