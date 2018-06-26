create database bd_Ufsbola
default character set utf8
default collate utf8_general_ci;

#drop database bd_Ufsbola;

use bd_Ufsbola;

create table tb_usuarios(
	id_usuarios int NOT NULL AUTO_INCREMENT, 
	nome_usuarios varchar(30) NOT NULL,
    email_usuarios varchar(30) NOT NULL,
    apelido_usuarios varchar(15) NOT NULL,
    senha_usuarios varchar(30) NOT NULL,
    cpf_usuarios varchar(15) NOT NULL,
    PRIMARY KEY (id_usuarios)
)default charset = utf8, ENGINE = innodb;

#describe usuarios;

create table tb_ligas(
	id_ligas int NOT NULL AUTO_INCREMENT,
    nome_ligas varchar(30) NOT NULL,
    visibilidade_ligas bool NOT NULL,
    maxparticipantes_ligas int default '100',
    descricao_ligas varchar(300) default 'Liga mais legal de todas',
    pontosplacarexato_ligas int default '30',
    #CASO ACERTE O VENCEDOR E O NUMERO DE UM DOS TIMES
    pontosvencedor_ligas int default '20',
    #CASO ACERTE APENAS O VENCEDOR OU EMPATE E NAO ACERTAR PLACAR EXATO
    pontosplacarnaoexato_ligas int default '15',
    #CASO ACERTE O NUMERO DE GOLS DE UM DOS TIMES
    pontosgol_ligas int default '5',
    PRIMARY KEY (id_ligas)
)default charset = utf8, ENGINE = innodb;

#describe ligas;

create table tb_equipes(
	id_equipes int NOT NULL AUTO_INCREMENT,
    nome_equipes varchar(30) NOT NULL,
    grupos_equipes enum('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H') NOT NULL,
    PRIMARY KEY (id_equipes)
)default charset = utf8, ENGINE = innodb;

#describe equipes;

create table tb_jogos(
	id_jogos int NOT NULL AUTO_INCREMENT,
    golsmandante_jogos int,
    golsvisitante_jogos int,
    PRIMARY KEY (id_jogos)
)default charset = utf8, ENGINE = innodb;

#describe jogos;

create table tb_participantes(
	id_participantes int NOT NULL AUTO_INCREMENT,
    id_usuarios int NOT NULL,
    CONSTRAINT fk_usuarioparticipantes FOREIGN KEY (id_usuarios) 
    REFERENCES tb_usuarios (id_usuarios),
	pontos int NOT NULL,
    PRIMARY KEY (id_participantes)
)default charset = utf8, ENGINE = innodb;

#describe participantes;

create table tb_palmites(
	id_palpites int NOT NULL AUTO_INCREMENT,
    id_usuarios int NOT NULL,
    CONSTRAINT id_usuariopalpite FOREIGN KEY (id_usuarios) 
    REFERENCES tb_usuarios (id_usuarios),
    id_ligas int NOT NULL,
    CONSTRAINT id_ligapalpite FOREIGN KEY (id_ligas) 
    REFERENCES tb_ligas (id_ligas),
    id_jogos int NOT NULL,
    CONSTRAINT id_jogospalpite FOREIGN KEY (id_jogos) 
    REFERENCES tb_jogos (id_jogos),
    golsmandante_jogos int default 0,
    golsvisitante_jogos int default 0,
    PRIMARY KEY (id_palpites)
)default charset = utf8, ENGINE = innodb;


#CADASTRANDO EQUIPES DA COPA
insert into tb_equipes
(nome_equipes, grupos_equipes)
values
('Russia', 'A'),
('Uruguai', 'A'),
('Egito', 'A'),
('Arábia Saudita', 'A'),
('Espanha', 'B'),
('Portugal', 'B'),
('Irã', 'B'),
('Marrocos', 'B'),
('França', 'C'),
('Dinamarca', 'C'),
('Austrália', 'C'),
('Peru', 'C'),
('Croácia', 'D'),
('Nigéria', 'D'),
('Islândia', 'D'),
('Argentina', 'D'),
('Brasil', 'E'),
('Suiça', 'E'),
('Sérvia', 'E'),
('Costa Rica', 'E'),
('México', 'F'),
('Alemanha', 'F'),
('Suécia', 'F'),
('Coréia do SUl', 'F'),
('Bélgica', 'G'),
('Inglaterra', 'G'),
('Panamá', 'G'),
('Tunísia', 'G'),
('Japão', 'H'),
('Senegal', 'H'),
('Polônia', 'H'),
('Colômbia', 'H');

#select * from tb_ligas;