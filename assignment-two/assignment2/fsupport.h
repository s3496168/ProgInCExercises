#include <stdio.h>
#include <stdlib.h>
#include <assert.h>

#ifndef FSUPPORT

#define FSUPPORT
void print_usage(void);
FILE* gropen(char* infile);
FILE* gwopen(char* outfile);
/* the length of a line in the file */
#define MAXWIDTH 1
/* final two characters written by fgets to a char array */
#define EXTRASPACES 2
/* the number of command line arguments */
/*this should be set to 2 due to the arguments presented in main function*/
#define NUMARGS 2

typedef enum {
    FALSE,
    TRUE
} BOOLEAN;

#endif
