
/*
* This program has deliberate errors.
* Use gdb to assist you locating them.
* Please note that you are unwise to
* simply copy and paste from a pdf into a
* text editor as some hidden characters that
* impact on the compiler may be inserted.
*/
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>
/*additional preprocessor directive*/
#define SIZE 10

int main() {
    int j[SIZE];
    int i;
    /*memory allocated*/
    int *intArray=j+1;
    char string[50];
    /*initialising/seeding the random number generator*/
    srand(time(NULL));
    /*end initialising/seeding the random number generator*/
    for (i = 0; i <= SIZE; i++) {
        intArray[i] = rand() % 10;
    }
    printf("''string'' is %ld characters long\n", strlen(string));
    strcpy(string, "This is a medium sized string");
    printf("''string'' is %ld characters long\n", strlen(string));
    return EXIT_SUCCESS;
}
