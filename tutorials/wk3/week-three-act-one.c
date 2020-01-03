#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define num 80

int str_function();
/*
int main(void) {
    printf("Please enter a number: ");
    str_function();
    return EXIT_SUCCESS;
}*/
int str_function(char str[num], char *output, int ten) {
    /*
    char str[num];
    char* output;*/
    int intake;

    /*Get user input*/
    /*   printf("Please enter a number: ");*/
    /*fgets(str, num, stdin);*/

    /*consume trailing newline*/
    str[strlen(str) - 1] = 0;
    intake = strtol(str, &output, ten);
    /*check to see if final character has been reached*/
    if (*output != '\0') {
        printf("Error! Data entered is not numeric. \n\n");
        return EXIT_FAILURE;
    } else {

        /*printf("You gave: %ld\n\n", intake);*/
        return intake;
    }
}
