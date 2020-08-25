<?php
	if (isset($_POST['BTEnvia'])) {
		//Variaveis de POST, Alterar somente se necessÃ¡rio 
		//====================================================
		$name = $_POST['name']; 
		$email = $_POST['email'];
		$ddd = $_POST['ddd'];
		$phone = $_POST['phone'];
		$gender = $_POST['gender'];
		$vacancytravel = $_POST['vacancytravel'];
		$destinationpreference = $_POST['destinationpreference'];
		$usualdestination = $_POST['usualdestination'];
		$duration = $_POST['duration'];
		$yearround = $_POST['checkTodos'];
		$m1 = $_POST['m1'];
		$m2 = $_POST['m2'];
		$m3 = $_POST['m3'];
		$m4 = $_POST['m4'];
		$m5 = $_POST['m5'];
		$m6 = $_POST['m6'];
		$m7 = $_POST['m7'];
		$m8 = $_POST['m8'];
		$m9 = $_POST['m9'];
		$m10 = $_POST['m10'];
		$m11 = $_POST['m11'];
		$m12 = $_POST['m12'];
		$familytravel = $_POST['familytravel'];
		$haskids = $_POST['haskids'];
		$kids = $_POST['kids'];
		$businesstravel = $_POST['businesstravel'];
		$frequencybstravel = $_POST['frequencybstravel'];		
		//====================================================
		
		//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
		//==================================================== 
		$email_remetente = "naoresponda@laghettofree.com.br"; // deve ser uma conta de email do seu dominio 
		//====================================================
		
		//ConfiguraÃ§Ãµes do email, ajustar conforme necessidade
		//==================================================== vantagem@coobrastur.com.br
		//$email_destinatario = "vantagem@coobrastur.com.br"; // pode ser qualquer email que receberÃ¡ as mensagens 
		$email_destinatario = "comercial@coobrastur.com.br"; // pode ser qualquer email que receberÃ¡ as mensagens 
		$email_reply = "$email_remetente"; 
		$email_assunto = "Promoção 2 Diárias Laghetto Free"; // Este serÃ¡ o assunto da mensagem
		//====================================================
		
		//Monta o Corpo da Mensagem
		//====================================================
		$email_conteudo = "Nome = $name \n"; 
		$email_conteudo .= "Email = $email \n";
		$email_conteudo .= "telefone = $ddd -"; 
		$email_conteudo .= "$phone \n"; 
		$email_conteudo .= "Genero = $gender \n"; 
		$email_conteudo .= "Viagem = $vacancytravel \n";
		//====================================================	

		//Documento
		//==================================================== 
		$HTML  = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
		$HTML .= '<html>';
		$HTML .= '<head>';
		$HTML .= '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
		$HTML .= '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
		$HTML .= '<title>';
		$HTML .= 'LAGHETTO FREE BY COOBRASTUR';
		$HTML .= '</title>';
		$HTML .= '</head>';
		$HTML .= '<body  style="margin: auto !important; padding: 0; font-family: sans-serif; width:800px;">';
		$HTML .= '<center>';
		$HTML .= '<table align="center"  border="1" cellpadding="0" cellspacing="0" width="100%" style="border: solid 1px #AAAAAA; ">';
		$HTML .= '<tbody>';
		$HTML .= '<tr bgcolor="#4caf50">';
		$HTML .= '<th  style="color: #435366; text-align: center; padding: 40px 30px 40px 30px;">';
		$HTML .= '<h1 style="font-weight: 200; color: #FFFFFF;">';
		$HTML .= 'PROMOÇÃO 2 DIÁRIAS Laghetto free';
		$HTML .= '</h1>';
		$HTML .= '<hr style="border: solid 1px #435366; border-left: solid 1px transparent; border-right: solid 1px transparent; border-bottom: solid 1px transparent;">';
		$HTML .= '</th>';
		$HTML .= "</tr>";
		$HTML .= '<tr>';
		$HTML .= '<td>';
		$HTML .= '<table  align="center"  border="0" cellpadding="5" cellspacing="0" width="100%" style="border-collapse: collapse;">';
		$HTML .= '<tbody>';
		$HTML .= '<thead>';					
		$HTML .= '</thead>';
		$HTML .= '<tr>';
		$HTML .= '<td style="text-align: left; width: 40px !important; height: 0px; padding: 2px 10px 0 0px;">';
		$HTML .= '<span style="color: #888888; font-size: 25px;">';
		$HTML .= ($gender['SEX'] == 'f' ? 'A Senhora ' : 'O Senhor ' );
		$HTML .= $name;
		$HTML .= ', geralmente viaja para o ';
		$HTML .=($usualdestination == 'b' ? 'Brasil, ' : '') ;
		$HTML .=($usualdestination == 'o' ? 'Exterior, ' : '') ;
		$HTML .=($usualdestination == 'w' ? 'Brasil e Exterior, ' : '') ;
		$HTML .= '(Local) <br>';
		$HTML .=($haskids == 1 ? 'Possui ' : 'Não tem filhos,' );
		$HTML .= $kids;
		$HTML .=($kids >= 1 ? ' filhos  ' : '' );
		$HTML .=($vacancytravel == 1 ? 'Não Costuma ' : 'Costuma ' );
		$HTML .= 'Viajar ';
		$HTML .= ($familytravel == 'true' ? 'Com ' : 'Sem ');
		$HTML .= ' a familia, pelo periodo de 0';  
		$HTML .= $duration;
		$HTML .= 'dias, <br>';
		$HTML .= ($yearround == 13 ? 'Viaja o Ano Todo,' : ' geralmente nos meses de ');
		$HTML .= ($m1 == 1 ? ', Janeiro,' : '') ;
		$HTML .= ($m2 == 2 ? ' Fevereiro,' : '') ;
		$HTML .= ($m3 == 3 ? ' Março,' : '') ;
		$HTML .= ($m4 == 4 ? ' Abril,' : '') ;
		$HTML .= ($m5 == 5 ? ' Maio,' : '') ;
		$HTML .= ($m6 == 6 ? ' Junho,' : '') ;
		$HTML .= ($m7 == 7 ? ' Julho,' : '') ;
		$HTML .= ($m8 == 8 ? ' Agosto,' : '') ;
		$HTML .= ($m9 == 9 ? ' Setembro,' : '') ;
		$HTML .= ($m10 == 10 ? ' Outubro,' : '') ;
		$HTML .= ($m11 == 11 ? ' Novembro,' : '') ;
		$HTML .= ($m12 == 12 ? ' Dezembro, ' : '') ;
		$HTML .= '. <br>';
		$HTML .= ($businesstravel == 1 ? ' Viaja a ' : ' Não Viaja a ' );
		$HTML .= 'trabalho ';
		$HTML .= ($frequencybstravel == 1 ? ' Muito Pouco  ' : ' ' );
		$HTML .= ($frequencybstravel == 2 ? ' Pouco ' : ' ' );
		$HTML .= ($frequencybstravel == 3 ? ' As vezes ' : ' ' );
		$HTML .= ($frequencybstravel == 4 ? ' Frequentemente ' : ' ' );
		$HTML .= ($frequencybstravel == 5 ? ' Muito Frequentemente ' : ' ' );
		$HTML .= 'e tem o sonho de viajar para: ';
		$HTML .=  $destinationpreference;
		$HTML .= '</span>';
		$HTML .= '.</td>';
		$HTML .= "</tr>";
		$HTML .= '<tr>';
		$HTML .= '<td style="color: #CCCCCC;text-align: left; width: 1px !important; height: 40px; padding: 10px;">';
		$HTML .= '<h2>';
		$HTML .= 'Informações Pessoais ';
		$HTML .= '</h2>';
		$HTML .= '<hr>';
		$HTML .= '</td>';
		$HTML .= "</tr>";
		$HTML .= '<tr>';
		$HTML .= '<td style="text-align: left; width: 40px !important; height: 40px; padding: 2px 10px 0 10px;">';
		$HTML .= '<span style="color: #888888;">';
		$HTML .= 'Nome: ';
		$HTML .= '</span>';
		$HTML .= '<span>';
		$HTML .= $name;
		$HTML .= '</span>';
		$HTML .= '</td>';
		$HTML .= "</tr>";
		$HTML .= '<tr>';
		$HTML .= '<td style="text-align: left; width: 40px !important; height: 40px; padding: 2px 10px 0 10px;">';
		$HTML .= '<span style="color: #888888;">';
		$HTML .= 'Email: ';
		$HTML .= '</span>';
		$HTML .= '<span>';
		$HTML .= $email;
		$HTML .= '</span>';
		$HTML .= '</td>';
		$HTML .= "</tr>";
		$HTML .= '<tr>';
		$HTML .= '<td style="text-align: left; width: 40px !important; height: 40px; padding: 2px 10px 0 10px;">';
		$HTML .= '<span style="color: #888888;">';
		$HTML .= 'Telefone: ';
		$HTML .= '</span>';
		$HTML .= '<span>';
		$HTML .= $ddd ;
		$HTML .= '</span>';
		$HTML .= '<span>';
		$HTML .= '<i>-</i>' ;
		$HTML .= '</span>';
		$HTML .= '<span>';
		$HTML .= $phone;
		$HTML .= '</span>';
		$HTML .= '</td>';
		$HTML .= "</tr>";
		$HTML .= '<tr>';
		$HTML .= '<td style="text-align: left; width: 40px !important; height: 40px; padding: 2px 10px 0 10px;">';
		$HTML .= '<span style="color: #888888;">';
		$HTML .= 'Gênero: ';
		$HTML .= '</span>';
		$HTML .= '<span>';
		$HTML .= ($gender['SEX'] == 'f' ? 'Feminino' : 'Masculino' );
		$HTML .= '</span>';
		$HTML .= '</td>';
		$HTML .= "</tr>";
		$HTML .= '<tr>';
		$HTML .= '<td style="color: #CCCCCC; text-align: left; width: 40px !important; height: 40px; padding: 10px;">';
		$HTML .= '<h2>';
		$HTML .= 'Preferências ';
		$HTML .= '</h2>';
		$HTML .= '<hr>';
		$HTML .= '</td>';
		$HTML .= "</tr>";
		$HTML .= '<tr>';
		$HTML .= '<td style="text-align: left; color: #CCCCCC; width: 40px !important; height: 40px; padding: 10px;">';
		$HTML .= '<h4 style="font-weight:200;">';
		$HTML .= 'Viagem a Lazer';
		$HTML .= '</h4>';
		$HTML .= '</td>';
		$HTML .= "</tr>";
		$HTML .= '<tr>';
		$HTML .= '<td style="text-align: left; width: 40px !important; height: 40px; padding: 2px 10px 0 10px;">';
		$HTML .= '<span style="color: #888888;">';
		$HTML .= 'Costuma Viajar? ';
		$HTML .= '</span>';
		$HTML .= ($vacancytravel == 1 ? 'Sim' : 'Não' );
		$HTML .= '.</td>';
		$HTML .= "</tr>";
		$HTML .= '<tr>';
		$HTML .= '<td style="text-align: left; width: 40px !important; height: 40px; padding: 2px 10px 0 10px;">';
		$HTML .= '<span style="color: #888888;">';
		$HTML .= 'Destino dos Sonhos: ';
		$HTML .= '</span>';
		$HTML .= $destinationpreference;
		$HTML .= '.</td>';
		$HTML .= "</tr>";
		$HTML .= '<tr>';
		$HTML .= '<td style="text-align: left; width: 40px !important; height: 40px; padding: 2px 10px 0 10px;">'; 
		$HTML .= '<span style="color: #888888;">';
		$HTML .= 'Para onde costuma viajar? ';
		$HTML .= '</span>';
		$HTML .=($usualdestination == 'b' ? 'Brasil' : '') ;
		$HTML .=($usualdestination == 'o' ? 'Exterior' : '') ;
		$HTML .=($usualdestination == 'w' ? 'Brasil e Exterior' : '') ;
		$HTML .= '.</tr>';
		$HTML .= '<tr>';
		$HTML .= '<td style="text-align: left; width: 40px !important; height: 40px; padding: 2px 10px 0 10px;">'; 
		$HTML .= '<span style="color: #888888;">';
		$HTML .= 'Duração das Viagens:  ';
		$HTML .= '</span>';
		$HTML .= $duration ;
		$HTML .= ' dia(s)';
		$HTML .= '.</tr>';
		$HTML .= '<tr>';
		$HTML .= '<td style="color: #888888; padding: 10px; text-align: left;">';
		$HTML .= 'Periodo em que geralmente viaja: ';
		$HTML .= '<b>';
		$HTML .= ($yearround == 13 ? 'Ano Todo' : ''  );
		$HTML .= '</b>';
		$HTML .= '<br>';
		$HTML .= '<br>';
		$HTML .= '<table  align="center"  border="1" cellpadding="5" cellspacing="0" width="100%" style="border-collapse: collapse;">';
		$HTML .= '<thead>';
		$HTML .= '<tr style="border: solid 1px #888;">';
		$HTML .= '<td style="text-align:center; color: #FFFFFF; background-color: #FF5722;">';
		$HTML .= 'JAN';
		$HTML .= '</td>';
		$HTML .= '<td style="text-align:center; color: #FFFFFF; background-color: #FF5722;">';
		$HTML .= 'FEV';
		$HTML .= '</td>';
		$HTML .= '<td style="text-align:center; color: #FFFFFF; background-color: #B76C6C;">';
		$HTML .= 'MAR';
		$HTML .= '</td>';
		$HTML .= '<td style="text-align:center; color: #FFFFFF; background-color: #B76C6C;">';
		$HTML .= 'ABR';
		$HTML .= '</td>';
		$HTML .= '<td style="text-align:center; color: #FFFFFF; background-color: #B76C6C;">';
		$HTML .= 'MAI';
		$HTML .= '</td>';
		$HTML .= '<td style="text-align:center; color: #FFFFFF; background-color: #2196F3;">';
		$HTML .= 'JUN';
		$HTML .= '</td>';
		$HTML .= '<td style="text-align:center; color: #FFFFFF; background-color: #2196F3;">';
		$HTML .= 'JUL';
		$HTML .= '</td>';
		$HTML .= '<td style="text-align:center; color: #FFFFFF; background-color: #2196F3;">';
		$HTML .= 'AGO';
		$HTML .= '</td>';
		$HTML .= '<td style="text-align:center; color: #FFFFFF; background-color: #8BC34A;">';
		$HTML .= 'SET';
		$HTML .= '</td>';
		$HTML .= '<td style="text-align:center; color: #FFFFFF; background-color: #8BC34A;">';
		$HTML .= 'OUT';
		$HTML .= '</td>';
		$HTML .= '<td style="text-align:center; color: #FFFFFF; background-color: #8BC34A;">';
		$HTML .= 'NOV';
		$HTML .= '</td>';
		$HTML .= '<td style="text-align:center; color: #FFFFFF; background-color: #FF5722;">';
		$HTML .= 'DEZ';
		$HTML .= '</td>';
		$HTML .= "</tr>";
		$HTML .= '</thead>';
		$HTML .= '<tbody>';
		$HTML .= '<tr style="border: solid 1px #888;">';
		$HTML .= '<td style="text-align: center;">';
		$HTML .= ($m1 == 1 ? 'X' : '-') ;
		$HTML .= '</td>';
		$HTML .= '<td style="text-align: center;">';
		$HTML .= ($m2 == 2 ? 'X' : '-') ;
		$HTML .= '</td>';
		$HTML .= '<td style="text-align: center;">';
		$HTML .= ($m3 == 3 ? 'X' : '-') ;
		$HTML .= '</td>';
		$HTML .= '<td style="text-align: center;">';
		$HTML .= ($m4 == 4 ? 'X' : '-') ;
		$HTML .= '</td>';
		$HTML .= '<td style="text-align: center;">';
		$HTML .= ($m5 == 5 ? 'X' : '-') ;
		$HTML .= '</td>';
		$HTML .= '<td style="text-align: center;">';
		$HTML .= ($m6 == 6 ? 'X' : '-') ;
		$HTML .= '</td>';
		$HTML .= '<td style="text-align: center;">';
		$HTML .= ($m7 == 7 ? 'X' : '-') ;
		$HTML .= '</td>';
		$HTML .= '<td style="text-align: center;">';
		$HTML .= ($m8 == 8 ? 'X' : '-') ;
		$HTML .= '</td>';
		$HTML .= '<td style="text-align: center;">';
		$HTML .= ($m9 == 9 ? 'X' : '-') ;
		$HTML .= '</td>';
		$HTML .= '<td style="text-align: center;">';
		$HTML .= ($m10 == 10 ? 'X' : '-') ;
		$HTML .= '</td>';
		$HTML .= '<td style="text-align: center;">';
		$HTML .= ($m11 == 11 ? 'X' : '-') ;
		$HTML .= '</td>';
		$HTML .= '<td style="text-align: center;">';
		$HTML .= ($m12 == 12 ? 'X' : '-') ;
		$HTML .= '</td>';
		$HTML .= "</tr>";
		$HTML .= '</tbody>';
		$HTML .= '</table>';
		$HTML .= '</td>';
		$HTML .= "</tr>";
		$HTML .= '<tr>';
		$HTML .= '<td style="text-align: left; color: #CCCCCC; width: 40px !important; height: 40px; padding: 10px;">';
		$HTML .= '<h4 style="font-weight:200;">';
		$HTML .= 'Viagem em família';
		$HTML .= '</h4>';
		$HTML .= '</td>';
		$HTML .= "</tr>";
		$HTML .= '<tr>';
		$HTML .= '<td style="text-align: left; width: 40px !important; height: 40px; padding: 2px 10px 0 10px;">';
		$HTML .= '<span style="color: #888888;">';
		$HTML .= 'Viaja com a família? ';
		$HTML .= '</span>';
		$HTML .= ($familytravel == 'true' ? 'Sim' : 'Não' );
		$HTML .= '.</td>';
		$HTML .= "</tr>";
		$HTML .= '<tr>';
		$HTML .= '<td style="text-align: left; width: 40px !important; height: 40px; padding: 2px 10px 0 10px;">';
		$HTML .= '<span style="color: #888888;">';
		$HTML .= 'Tem filhos? ';
		$HTML .= '</span>';
		$HTML .= ($haskids == 1 ? $kids : 'Não' );
		$HTML .= '.</td>';
		$HTML .= "</tr>";
		$HTML .= '<tr>';
		$HTML .= '<td style="text-align: left; color: #CCCCCC; width: 40px !important; height: 40px; padding: 10px;">';
		$HTML .= '<hr>';
		$HTML .= '<h4 style="font-weight:200;">';
		$HTML .= 'Viagem a Trabalho';
		$HTML .= '</h4>';
		$HTML .= '</td>';
		$HTML .= "</tr>";
		$HTML .= '<tr>';
		$HTML .= '<td style="text-align: left; width: 40px !important; height: 40px; padding: 2px 10px 0 10px;">';
		$HTML .= '<span style="color: #888888;">';
		$HTML .= 'Costuma viajar a trabalho? ';
		$HTML .= '</span>';
		$HTML .= ($businesstravel == 1 ? 'Sim' : 'Não' );
		$HTML .= '.</td>';
		$HTML .= "</tr>";
		$HTML .= '<tr>';
		$HTML .= '<td style="color: #888888; padding: 10px; text-align: left;">';
		$HTML .= 'Frequência de viagem à trabalho:';
		$HTML .= '<br>';
		$HTML .= '<br>';
		$HTML .= '<table  align="center"  border="1" cellpadding="5" cellspacing="0" width="100%" style="border-collapse: collapse;">';
		$HTML .= '<thead>';
		$HTML .= '<tr style="border: solid 1px #888;">';
		$HTML .= '<td style="text-align:center; color: #FFFFFF; width: 20%; background-color: #FF5722;">';
		$HTML .= 'Muito Pouco';
		$HTML .= '</td>';
		$HTML .= '<td style="text-align:center; color: #FFFFFF; width: 20%; background-color: #FFC107;">';
		$HTML .= 'Pouco';
		$HTML .= '</td>';
		$HTML .= '<td style="text-align:center; color: #FFFFFF; width: 20%; background-color: #CDDC39;">';
		$HTML .= 'As Vezes';
		$HTML .= '</td>';
		$HTML .= '<td style="text-align:center; color: #FFFFFF; width: 20%; background-color: #8BC34A;">';
		$HTML .= 'Frequente';
		$HTML .= '</td>';
		$HTML .= '<td style="text-align:center; color: #FFFFFF; width: 20%; background-color: #4CAF50;">';
		$HTML .= 'Muito Frequente';
		$HTML .= '</td>';
		$HTML .= "</tr>";
		$HTML .= '</thead>';
		$HTML .= '<tbody>';
		$HTML .= '<tr style="border: solid 1px #888;">';
		$HTML .= '<td style="text-align: center;">';
		$HTML .= ($frequencybstravel == 1 ? ' X ' : ' ' );
		$HTML .= '</td>';
		$HTML .= '<td style="text-align: center;">';
		$HTML .= ($frequencybstravel == 2 ? ' X ' : ' ' );
		$HTML .= '</td>';
		$HTML .= '<td style="text-align: center;">';
		$HTML .= ($frequencybstravel == 3 ? ' X ' : ' ' );
		$HTML .= '</td>';
		$HTML .= '<td style="text-align: center;">';
		$HTML .= ($frequencybstravel == 4 ? ' X ' : ' ' );
		$HTML .= '</td>';
		$HTML .= '<td style="text-align: center;">';
		$HTML .= ($frequencybstravel == 5 ? ' X ' : ' ' );
		$HTML .= '</td>';
		$HTML .= "</tr>";
		$HTML .= '</tbody>';
		$HTML .= '</table>';
		$HTML .= '</td>';  
		$HTML .= "</tr>";
		$HTML .= '<tr bgcolor="#4caf50">';
		$HTML .= '<td style="text-align: center; padding: 40px 30px 40px 30px;">';
		$HTML .= '<br>';
		$HTML .= '<br>';
		$HTML .= '<h2 style="color: #FFF; text-align: center;">';
		$HTML .= 'LAGHETTO FREE BY COOBRASTUR';
		$HTML .= '</h2>';
		$HTML .= '</td>';
		$HTML .= "</tr>";       
		$HTML .= '</tbody>';
		$HTML .= '</table>';
		$HTML .= '</center>';
		$HTML .= '</body>';
		$HTML .= '</html>';

		//Seta os Headers (Alterar somente caso necessarioo) 
		//==================================================== 
		$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
		//====================================================
		
		//Enviando o email 
		//==================================================== 
		
		if (mail ($email_destinatario, $email_assunto, nl2br($HTML), $email_headers)){ 
			echo " "; 
		}else{ echo "Erro: Não enviado";}
		
		//====================================================
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["name"])) {
				$nameErr = "Digite seu Nome";
			} 
			else { //  $name = test_input($_POST["name"]);}
				if (empty($_POST["email"])) {
					$emailErr = "Insira um email";
				} 
				else {
					// $email = test_input($_POST["email"]);
					// check if e-mail address is well-formed
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						$emailErr = "Formato de e-mail Incorreto"; 
					}
				}
			}
		}
		$redirect = "http://www.laghettofree.com.br";
		header("location:$redirect");

		
		//====================================================	

		//Dados
		//==================================================== 
		$servername = "mysql05-farm61.uni5.net";
		$username = "username";
		$password = "password";
		$banco = "coobrasturlaghettofree";
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $banco);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$sql = "INSERT INTO form_nomedatabela ( nome, email, ddd, phone, gender, vacancytravel, destinationpreference, usualdestination, duration, yearround, m1, m2, m3, m4, m5, m6, m7, m8, m9, m10, m11, m12, familytravel, haskids, kids, businesstravel, frequencybstravel)
		VALUES ('$name', '$email', '$ddd', '$phone', '$gender', '$vacancytravel', '$destinationpreference', '$usualdestination', '$duration', '$yearround', '$m1', '$m2', '$m3', '$m4', '$m5', '$m6', '$m7', '$m8', '$m9', '$m10', '$m11', '$m12', '$familytravel', '$haskids', '$kids', '$businesstravel', '$frequencybstravel')";
		
		if (mysqli_query($conn, $sql)) {
			echo "";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
		
	}