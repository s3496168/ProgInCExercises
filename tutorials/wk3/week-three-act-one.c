#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define num 80

int main(void) {
    char str[num];
    char* output;
    int intake;

    /*Get user input*/
    printf("Please enter a number: ");
    fgets(str, num, stdin);

    /*consume trailing newline*/
    str[strlen(str) - 1] = 0;
    intake = strtol(str, &output, 10);
    /*check to see if final character has ben reached*/
    if (*output != '\0') {
        printf("Error! Data entered is not numeric. \n\n");
        return EXIT_FAILURE;
    }

    printf("You gave: %d\n\n", intake);
    return EXIT_SUCCESS;
}
