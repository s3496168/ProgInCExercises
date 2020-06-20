#include <stdlib.h>
#include <stdio.h>
#define one 1
#define ten 10
#define zero 0

int main(void) {

    int i;
    int j;
    int k;
    int m = one;

    for (k = one; k <= ten; ++k) {

        for (i = ten; i >= k; --i) {
            printf(" ");
        }
        for (j = one; j <= m; ++j) {
            printf("*");
        }
        m += 2;
        printf("\n");
    }
    return EXIT_SUCCESS;
}
