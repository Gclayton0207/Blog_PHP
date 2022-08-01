<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


#### **Acesso ao projeto**
- Baixe o reposiotorio do projeto usando o comando ``git clone https://github.com/Gclayton0207/Blog_PHP.git``
- Altere o arquivo ``.env.example`` para ``.env``
- Insira suas credenciais do MySql ![image](https://user-images.githubusercontent.com/75399046/182144769-3595e81b-961f-48f1-8d2e-074f992a7516.png)

- Utilize o comando `` composer`` no terminal para instalar os requerimentos do projeto
- Utilize o comando `` php artisan migrate`` no terminal para migrar as tabelas para o banco de dados
- Utilize o comando ``php artisan key:generate`` no terminal para gerar uma chave para usar o app
- Utilize o comando ``php artisan serve`` no terminal para executar o projeto de forma local, geralmente inicia no caminho http://127.0.0.1:8000

#### **Dentro do projeto**
![image](https://user-images.githubusercontent.com/75399046/182146566-dd42b8cf-eb82-4b32-b8f3-8913694162b3.png)

- Projeto simula um blog que mostra os posts feitos por usuarios
- Tudo foi feito de forma aleatoria utilizando a factory e faker
- na aba ``Posts`` consegue ver todos os posts
- Na aba ``login`` consegue logar com um user dentre os 100 que existem, recomendo o ``ghill@example.com`` e todas as senhas sao ``123`` que estao encripitadas com o bcrypt
- Ao logar na parte superior direita passa a exibir o nome do usuario e ao entrar num post é possivel comentar
- O dono do comentario pode apagar seus comentarios
