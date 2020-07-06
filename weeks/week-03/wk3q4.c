#include <ctype.h>
#include <stdlib.h>
#include <stdio.h>
#include <string.h>

#define NUM 80
#define EXTRA 2
#define ZERO 0
#define ONE 1

char* str_function();
/*can't have three mains, can we?
int main() {
    printf("Please enter something for q4: ");
    str_function();
    return EXIT_SUCCESS;
}end q4 test main */

char* str_function() {
    char str[NUM + EXTRA];
    int j = ZERO;
    int k = ZERO;
    int l = ZERO;
    int m = ZERO;
    int o = ZERO;
    char ch;

    /*get user input using fgets*/
    fgets(str, NUM, stdin);

    /*consume trailing newline*/
    str[strlen(str) - 1] = 0;

    /*Note we were NOT give permission to use the read_rest_of_line function*/

    printf("You entered: %s\n", str);

    while (str[j]) {
        ch = str[j];
        if (isupper(ch)) {
            k = k + ONE;
        } else if (islower(ch)) {
            l = l + ONE;
        } else if (isdigit(ch)) {
            m = m + ONE;
        } else {
            o = o + ONE;
        }
        j++;
    }

    printf("\n");
    printf("There are this many capital letters: %d\n", k);
    printf("There are this many lowercase letters: %d\n", l);
    printf("There are this many numbers: %d\n", m);
    printf("There are this many spaces: %d\n\n", o);
    return EXIT_SUCCESS;
}
