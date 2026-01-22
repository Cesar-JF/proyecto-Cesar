# Esto es un ecabezado h1
## Esto es un encabezado h2
### Esto es un encabezado h3
#### Esto es un encabezado h4
##### Esto es un encabezado h5
###### Esto es un encabezado h6

### Texto con formato
Texto en **negrita** 
Texto en *cursiva* 
Texto en ***negrita y cursiva*** 
Texto ~~tachado~~

### Resaltar un comando
En esta frase estamos resaltado el comando `ls -la`.

### Bloques de código
```
sudo systemctl start apache2
```
```bash
#!/bin/bash
echo "Hola mundo"
```
```python
celsius = float(input('Introduce una temperatura en grados Celsius: '))
farenheit = (1.8 * celsius) + 32
print(f'La temperatura en grados Farenheit es: {farenheit}')
```
```yaml
version: '3'

services: 
  apache:
    build: ./apache
    ports: 
      - 80:80
    volumes:
      - ./src:/var/www/html
```

### Enlaces
- [GitHub](https://github.com)

### Imagen con enlace externo
[![Logo GitHub](https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png)](https://github.com)

### Lista desordenada
* Item 1
* Item 2
* Item 3
* Item 4

### Lista desordenada anidada
* Item 1
  * Item 1.1
  * Item 1.2
* Item 2
  * Item 2.1
* Item 3
* Item 4

### Listas ordenadas
1. Item 1
2. Item 2
3. Item 3
4. Item 4

### Listas ordenadas aninadas
1. Item 1 
  1.1 Item 1.1 
  1.2 Item 1.2 
2. Item 2 
  2.1 Item 2.1 
3. Item 3 
4. Item 4 

### Tablas
| Encabezado 1 | Encabezado 2 | Encabezado 3
| --- | --- | --- | ---
| Fila 1.1 | Fila 1.2 | Fila 1.3
| Fila 2.1 | Fila 2.2 | Fila 2.3
| Fila 3.1 | Fila 3.2 | Fila 3.3

### Forzar un salto de línea 
<!- Para forzar un salto de línea es necesario incluir dos espacios en blanco y un salto de línea. -->
Por ejemplo, en esta frase  
hemos forzado un salto de línea.

### Citar texto
Este texto no es una cita.
> Este texto daría como resultado una cita.

### Comentarios
<!- Este texto es un comentario y no será renderizado -->

