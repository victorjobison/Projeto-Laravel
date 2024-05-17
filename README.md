# APPOINTMENTS

### Setup do projeto
Criar e entrar na pasta do projeto
```sh
mkdir appointments
cd appointments
```

Clonar o repositório
```sh
git clone https://github.com/victorjobison/Projeto-Laravel.git .
```

Criar e configurar o .env
```sh
cp .env.example .env
```

Rodar a instalação do sail
```sh
docker run --rm -v $(pwd):/opt -w /opt laravelsail/php83-composer:latest composer install  --ignore-platform-req=ext-gd
```

Configurar o alias do sail no ~/.bashrc
```sh
vim ~/.bashrc
```

```sh
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
```

```sh
source ~/.bashrc
```

Subir o sail
```sh
sail up -d
```

Instalar as dependências NPM
```sh
sail npm install
```

Gerar a key do projeto
```sh
sail artisan key:generate
```

Rodar o migrate
```sh
sail artisan migrate
```

Configurar o vite
```sh
code vite.config.js

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  server: {
    hmr: {
      host: 'seu_ip_aqui',
    },
  },
  plugins: [
      laravel({
          input: [
              'resources/css/app.css',
              'resources/js/app.js',
          ],
          refresh: true,
      }),
  ],
});
````

Rode o run dev
```sh
sail npm run dev
```

Acesse o projeto
[http://localhost](http://localhost)
