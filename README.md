# 42 Cursus


## Index:

1. [libft](https://github.com/brunovmc/42cursus#1-libft)

2. [get_next_line](https://github.com/brunovmc/42cursus#2-get_next_line)

3. [ft_printf](https://github.com/brunovmc/42cursus#3-ft_printf)

4. [ft_server](https://github.com/brunovmc/42cursus#4-ft_server)

5. [cub3d](https://github.com/brunovmc/42cursus#5-cub3d)

******

## 1. [libft](https://github.com/brunovmc/42cursus/tree/master/libft)

Projeto inicial.
Uma biblioteca em C que recria uma serie de funcoes basicas.
 
******

## 2. [get_next_line](https://github.com/brunovmc/42cursus/tree/master/get_next_line)

```c
int	get_next_line(int fd, char **line);
```

Leia um arquivo de texto `fd` e guarde o valor de cada linha em `**line`

se chamada em loop `**line` deve conter o valor da proxima linha

a função deve retornar:

- (1) 	- se achar uma quebra de linha (\n)
- (0) 	- se chegar no fim do arquivo (\0)
- (-1)	- se houver um erro 

******
 
## 3. [ft_printf](https://github.com/brunovmc/42cursus/tree/master/ft_printf)

```c
int	ft_printf(char *str, ...);
```
Recriando o printf.

### conversões e flags

```
cspdiuxX%
```

Flags

```
-0.*
```
e campo mínimo de largura com todas as conversões.


******

## 4. [ft_server](https://github.com/brunovmc/42cursus/tree/master/ft_server)

Construir um container utilizando debian buster no docker. 

O container deve ter:

Um servidor com nginx

Banco de dados mariaDB

PhpMyAdmin

Wordpress

******

## 5. [cub3d](https://github.com//brunovmc/42cursus/tree/master/cub3d)

Projeto de Raycasting

******


