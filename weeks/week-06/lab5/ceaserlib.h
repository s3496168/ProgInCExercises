#include <string.h>
#include <stdio.h>
#include <ctype.h>
#include <stdlib.h>

#ifndef CEASERLIB
#define CEASERLIB

#define ALPHABETLEN 5
#define LINELEN 80
#define EXTRASPACES 2

/* result enumeration from get_input() or get_int():
    FAILURE is a validation failure, SUCCESS is a validation 
    SUCCESS and EMPTY means the user pressed ctrl-d
 */
enum result
{
    FAILURE, SUCCESS, EMPTY=-1
};

/* definition of the BOOLEAN datatype */
typedef enum truefalse
{
    FALSE,TRUE
} BOOLEAN;

void cypher(char * , int);
void read_rest_of_line(void);
enum result get_input(const char *, char *, unsigned);
enum result get_int(const char *, int *);
#endif
