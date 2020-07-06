#include <stdlib.h>
#include <stdio.h>
#include "wk3q1.h"
#include "wk3q2.h"
#include "wk3q4.h"

#define ZERO 0
#define ONE 1
#define TWO 2

int myFunction();
char mychar();
char* str_function();

int main(void) {

    /*q1 variables*/
    int j;
    char numtest[SIX] = "12345";

    /*q2 variables*/
    char c;
    char numsToAdd[TEN] = "1,2,3,4,5";
    const char pc[FOUR] = ",";

    /*q1 output*/
    j = myFunction(numtest, TEN);
    printf("Input from q1 is: %d\n", j);

    /*q2 output*/
    c = mychar(numsToAdd, pc);
    printf("The number from q2 is: %d\n", c);

    /*q4 output*/
    printf("Please enter something for q4: ");
    str_function();

    return EXIT_SUCCESS;
}
