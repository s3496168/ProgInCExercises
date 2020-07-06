#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "wk3q1.h"

#define zero 0
#define one 1
#define two 2
#define SIX 6
#define TEN 10
#define FOUR 4

int myFunction();
char mychar();

/*int main(void) {
    char c;
    char numsToAdd[TEN] = "1,2,3,4,5";
    const char pc[FOUR] = ",";
    c = mychar(numsToAdd, pc);
    printf("The number from q2 is: %d\n", c);
    return EXIT_SUCCESS;
}*/
char mychar(char addition[TEN], const char comma[FOUR]) {
    char* token;
    long nForStrtol;
    int q = zero;
    int final;
    int getToken = zero;
    token = strtok(addition, comma);
    while (token != NULL) {
        nForStrtol = myFunction(token, TEN);
        q = q + nForStrtol;

        if (q > getToken) {
            getToken = q;
        }

        token = strtok(NULL, comma);
    }
    final = getToken;
    return final;
}
