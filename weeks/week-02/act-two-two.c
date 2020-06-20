#include <stdlib.h>
#include <stdio.h>
#define one 1
#define ten 10
#define zero 0

int main(void) {

    int i;
    int j;
    int k;

    for (k = zero; k <= ten; ++k) {

        for (i = ten; i > j; --i) {
            printf(" ");
        }
        for (j = zero; j <= i; ++j) {
            printf("*");
        }
        printf("\n");
    }
    return EXIT_SUCCESS;
}
