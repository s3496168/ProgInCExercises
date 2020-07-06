#include <ctype.h>
#include <stdlib.h>
#include <stdio.h>
#include <string.h>

#define NUM 80
#define EXTRA 2

char* str_function();

int main() {
    printf("Please enter something: ");
    str_function();
    return EXIT_SUCCESS;
}

char* str_function() {
    char str[NUM + EXTRA];
    int j = 0;
    int k = 0;
    int l = 0;
    int m = 0;
    char ch;
    /*char *output;
    char intake;*/
    /*get user input using fgets*/
    fgets(str, NUM, stdin);

    /*consume trailing newline*/
    str[strlen(str) - 1] = 0;
    /*intake = strtol(str, &output, 10);*/
    /*check to see if final character has been reached*/
    /*
    if (*output != '\0') {
        printf("Error! Data entered is not numeric. \n\n");
        return EXIT_FAILURE;
    } else {
        printf("You gave: %d\n\n", intake);
        return EXIT_SUCCESS;
    }*/

    printf("You entered: %s\n", str);

    while (str[j]) {
        ch = str[j];
        if (isupper(ch)) {
            k = k + 1;
        }
        if (islower(ch)) {
            l = l + 1;
        }
        if (isdigit(ch)) {
            m = m + 1;
        }
        j++;
    }

    printf("\n");
    printf("There are this many capital letters: %d\n", k);
    printf("There are this many lowercase letters: %d\n", l);
    printf("There are this many numbers: %d\n", m);
    return 0;
}
