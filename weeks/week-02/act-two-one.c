#include <stdlib.h>
#include <stdio.h>
#define one 1
#define ten 10

int main(void) {

    int i;
    int j;

    for (i = one; i <= ten; ++i) {
        for (j = one; j < i; ++j) {
            printf("*");
        }
        printf("\n");
    }
    return EXIT_SUCCESS;
}
