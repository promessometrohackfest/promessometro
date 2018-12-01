# promessometro
Promessometro - Sistema de monitoramento das promessas ao longo do tempo
===========================================


Descrição:
===================================

O Promessometro é um sistema de Gerenciamento de Conteúdo.

Ele foi desenvolvido para facilitar a população e os órgão de controle externo a monitorar as promessas ao longo do tempo e poder acompanhar se a mesma está com orçamento aprovado ou não, se foi planejada ou não, possibilitando inclusive o envio de denúncias de promessas não cumpridas.

Acreditamos fortemente que esse controle levará a uma efetividade maior do gasto público porque, sem dúvida alguma, PROMETER E NÃO CUMPRIR É PIOR DO QUE MENTIR


Benefícios:
===================================

1. Acompanhar as promessar dos politicos que estiverem concorendo a reeleição



Licença e suporte:
===================================

Este sistema é um software livre baseado em outros softwares livres; você pode redistribuí-lo e/ou modificá-lo dentro dos termos da Licença Pública Geral GNU como publicada pela Fundação do Software Livre (FSF); na versão 3 da Licença.

Este sistema é distribuído na esperança de que possa ser  útil, mas SEM NENHUMA GARANTIA; sem uma garantia implícita de ADEQUAÇÃO a qualquer MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a Licença Pública Geral GNU para maiores detalhes.

Em caso de dúvidas, erros ou sugestões, por favor, envie e-mail para chegadpromessa@gmail.com


Requisitos:
===================================

1. Apache 2.4.27
2. PHP 5.6.31
3. MySQL Server 5.7.19


Banco de Dados:
===================================

1. Crie a base de dados <strong>promessometro</strong> e importe o arquivo: <strong>promessometro/conf_bd/script_db_promessometro.sql</strong>
2. O usuario padrão é: admin | senha padrão é: admin 


Configuração da aplicação:
===================================

1. Copie a pasta promessometro para a pasta web(exemplo /www) do seu servidor

2. Altere os dados do seguinte arquivo:

	a. /Conn/conexao.php
	
		
3. Na pasta /Conn/conexao.php altere o nome banco de acordo com o banco criado no nosso casso é promessometro:
		
		Constantes de parâmetros para configuração da conexão
 */
define('SGBD', 'mysql');
define('HOST', 'localhost');
define('DBNAME', 'db_promessometro');
define('CHARSET', 'utf8');
define('USER', 'root');
define('PASSWORD', '');
define('SERVER', 'linux');



4. Altere os dados do seguinte arquivo:

	a. /Conn/conection.php
    
    b. Na pasta /Conn/conexao.php altere o nome banco de acordo com o banco criado no nosso casso é promessômetro:
    
		<?php
	abstract class Conn{
		private static $Host = 'localhost';
		private static $User = 'root';
		private static $Pass ='';
		private static $Base ='db_promessometro';
		
		private static $Conection = NULL;
		
		protected static function Conexao(){
			if(self::$Conection == NULL){
				self::$Conection = mysqli_connect(self::$Host, self::$User, self::$Pass, self::$Base);
			}
			return self::$Conection;
		}
		
	}
?>
	

Acesso ao sistema local:
===================================
Link funcional do promessômetro [https://promessometro.com]

Acesse [http://localhost/promessometro] para visualizar o portal

Acesse [http://localhost/promessometro/adimn.php] para acessar o administrador dos cadastros

* Usuario: admin  
* Senha: admin  

