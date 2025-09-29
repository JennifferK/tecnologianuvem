# Usa a imagem oficial do PHP com servidor embutido
FROM php:8.2-cli

# Define o diretório de trabalho dentro do container
WORKDIR /app

# Copia todos os arquivos do projeto para o container
COPY . /app

# Expõe a porta 10000, que o Render usa por padrão
EXPOSE 10000

# Comando que inicia o servidor PHP embutido na porta 10000
CMD ["php", "-S", "0.0.0.0:10000"]
