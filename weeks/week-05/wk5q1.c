#include <stdlib.h>
#include <stdio.h>
#include "wkfivehelper.h"
#define MAXLENGTH 1000
#define EXTRASPACES 2
#define DOCLENGTH 1000

int main(int argc, char** argv) {

    FILE* fptr;

   char filename[100], c;
    

    printf("Enter the filename to open \n");
    fgets(filename, MAXLENGTH, stdin);
       /*consume trailing newline*/
    filename[strlen(filename) - 1] = 0;
    printf("This is: %s\n",filename);
    /*Open file*/
   fptr = fopen(filename, "r");
    if (fptr == NULL) {
        printf("Cannot open file \n");
        return EXIT_FAILURE;
    }

    /* Read contents from file */
    c = fgetc(fptr);
    while (c != EOF) {
        printf("%c", c);
        c = fgetc(fptr);
    }

    fclose(fptr);
    return EXIT_SUCCESS;
}
