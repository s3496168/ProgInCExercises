/*******************************************************
header file for testing
*******************************************************/

#include <string.h>
#include <stdlib.h>
#include <stdio.h>
#include <assert.h>

#ifndef TESTING
#define TESTING
/*
FILE* gropen(char* infile);
FILE* gwopen(char* outfile);
*/
#define STRINGLEN 100
#define SIZE 200

union readWrite {
    char firstLine[STRINGLEN + 1];
    char secondLine[STRINGLEN + 1];
};
#endif
