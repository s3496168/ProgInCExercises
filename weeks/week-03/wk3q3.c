#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "wk3q1.h"
#include "wk3q2.h"

#define zero 0
#define one 1
#define two 2
#define SIX 6
#define TEN 10
#define FOUR 4
#define LINELEN 80

int myFunction();
char mychar();
void rest_of_the_line();

void read_rest_of_line(void) {
    /* character to read from the buffer */
    int ch;
    /* keep reading the buffer until we run out of
     * leftover input
     */
    while (ch = getchar(), ch != EOF && ch != '\n')
        ;
    /* clear out the error status of the file pointer */
    clearerr(stdin);
}

int main(void) {
    char line[LINELEN + two];
    const char separator[LINELEN + two] = ",";
    char d;
    int j = one;
    do {
        printf("Please enter some comma seperated numbers for question 3: ");
        /*read in the line*/
        fgets(line, LINELEN + two, stdin);
        /*test for buffer overflow-if present deal with it*/
        if (line[strlen(line) - 1] != '\n') {
            printf("Buffer overflow!\n");
            read_rest_of_line();
            continue;
        }
        j++;
    } while (j == one);
    /*remove now non required newline character*/
    line[strlen(line) - 1] = 0;
    /*call in strtok function from q2*/
    d = mychar(line, separator);
    printf("The output for q3 is: %d\n", d);

    return EXIT_SUCCESS;
}
