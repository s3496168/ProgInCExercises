#include <stdio.h>
#include <stdlib.h>

char* collection(void);

int main(void) {
    char* specimen;

    specimen = collection();

    printf("the collection is: %s\n", specimen);
    return EXIT_SUCCESS;
}

char* collection(void) {
    static char buffer[80];
    printf("please enter a title: ");
    fgets(buffer, 80, stdin);
    return buffer;
}
