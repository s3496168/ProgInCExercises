FLAGS=-ansi -Wall -pedantic -Wextra -Werror -g
LFLAGS=
OUTPUT=phonebk_strtok

all:$(OUTPUT)

phonebk_strtok: phonebk_strtok.o fsupport.o
	gcc $(LFLAGS) phonebk_strtok.o fsupport.o -o phonebk_strtok

.PHONY:clean
	rm -f *.o $(OUTPUT) *~
