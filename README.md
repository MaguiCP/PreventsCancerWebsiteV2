# Prevents Cancer Website V2

## Português

### Descrição

Este projeto é um website dedicado à prevenção do cancro de próstata. O website oferece informações sobre a importância de exames regulares e um estilo de vida saudável para prevenir ou detectar o cancro de próstata nos seus estágios iniciais. Além disso, também oferece recursos sobre prevenção, diagnóstico e opções de tratamento disponíveis para o cancro de próstata.

### Funcionalidades

- **Barra de Navegação Superior**: Links para várias páginas incluindo Contactos, Tratamentos, Perfil Utente, Perfil Médico, Ficha de Anamnese e Log-in.
- **Carrossel de Imagens**: Mostra imagens e informações sobre a organização.
- **Secção Sobre Nós**: Fornece informações detalhadas sobre a organização, a sua missão e os serviços oferecidos.
- **Formulário de Anamnese**: Permite que os pacientes preencham informações sobre o seu histórico de saúde, com perguntas adicionais exibidas com base nas respostas.
- **Armazenamento de Dados**: Dados preenchidos no formulário são armazenados numa base de dados para posterior análise e gestão.

### Melhorias

- **Integração com Base de Dados**: Adicionada uma base de dados para armazenar informações dos pacientes e as suas respostas ao formulário de anamnese. As principais alterações incluem:
  - **Criação de Tabelas**: Foram criadas tabelas na base de dados para armazenar informações sobre pacientes, incluindo dados pessoais e respostas ao questionário de saúde.
  - **Atualização do Formulário de Anamnese**: O formulário de anamnese foi atualizado para enviar dados para o banco de dados, incluindo perguntas adicionais que são exibidas condicionalmente com base nas respostas do utilizador.
  - **Validação e Armazenamento**: Implementada a validação dos dados enviados e o armazenamento na base de dados utilizando PHP e MySQL. Agora, o formulário verifica se os campos obrigatórios estão preenchidos e armazena os dados corretamente.
  - **Melhorias no Código PHP**: Atualizações no código PHP para processar e armazenar as respostas do formulário na base de dados, incluindo ajustes nas variáveis e na conexão com a base de dados.
  - **Mensagens de Feedback**: Adicionadas mensagens de feedback para informar o utilizador se os dados foram inseridos com sucesso ou se houve um erro.

## English

### Description

This project is a website dedicated to prostate cancer prevention. The website provides information about the importance of regular exams and a healthy lifestyle to prevent or detect prostate cancer in its early stages. It also offers resources on prevention, diagnosis, and available treatment options for prostate cancer.

### Features

- **Top Navigation Bar**: Links to various pages including Contacts, Treatments, Patient Profile, Doctor Profile, Anamnesis Form, and Log-in.
- **Image Carousel**: Displays images and information about the organization.
- **About Us Section**: Provides detailed information about the organization, its mission, and the services offered.
- **Anamnesis Form**: Allows patients to fill in information about their health history, with additional questions displayed based on their responses.
- **Data Storage**: Data entered in the form is stored in a database for later analysis and management.

### Improvements

- **Database Integration**: Added a database to store patient information and their responses to the anamnesis form. Key changes include:
  - **Database Tables**: Created tables in the database to store patient information, including personal data and health questionnaire responses.
  - **Anamnesis Form Update**: Updated the anamnesis form to submit data to the database, including additional questions that are conditionally displayed based on user responses.
  - **Validation and Storage**: Implemented validation of submitted data and storage in the database using PHP and MySQL. The form now checks for required fields and stores data correctly.
  - **PHP Code Improvements**: Updates to the PHP code to process and store form responses in the database, including adjustments to variables and database connection.
  - **Feedback Messages**: Added feedback messages to inform the user if the data was successfully inserted or if there was an error.
