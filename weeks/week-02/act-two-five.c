#include <stdlib.h>
#include <stdio.h>

#define zero 0
#define one 1
#define ten 10
#define eleven 11
#define twelve 12

int main(void) {
    int i, j, k, l;

    for (i = zero; i < twelve; ++i) {
        if (i % 2 == zero) {
            for (j = zero; j <= one; ++j) {
                printf(" ");
            }
            for (k = one; k <= ten; ++k) {
                printf("* ");
            }
        } else {
            for (l = zero; l <= eleven; l++) {
                printf("* ");
            }
        }
        printf("\n");
    }

    return EXIT_SUCCESS;
}
