#include <stdio.h>
#include <stdlib.h>

#define zero 0
#define one 1
#define two 2
#define SIX 6
#define TEN 10

/*can't have two mains, can we?
int myFunction();

int main(void) {
    int j;
    char numtest[SIX] = "12345";
    j = myFunction(numtest, TEN);
    printf("Input from main is: %d\n", j);

    return EXIT_SUCCESS;
}end q1 main*/

int myFunction(char numtest[SIX], char *last, int base) {
    int input;
    /*strtol note
    num is the char array being pointed to
    last is the reference to an object of type char*. The value of this
    object is set by the function to the next character in num after the
    numerical value
    the base is last. 10 is the base here
    end strtol note */

    input = strtol(numtest, &last, TEN);

    /*if statement to detect internal errors*/
    if (*last != '\0') {
        printf(
            "Internal error: someone is fiddling with the string."
            "The internal input is not a number\n\n");
        return EXIT_FAILURE;
    } else {

        /*printf statement for testing the function*/
        /*now hee as legacy
        printf("The number from within the function is: %d\n", input);*/
        return input;
    }
}
