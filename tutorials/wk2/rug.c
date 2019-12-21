#include <stdio.h>
#include <stdlib.h>

int main(void) {
    int i;
    int ii;
    int j;
    int k;
    for (i = 1; i < 12; ++i) {
        if (i % 2 == 0) {
            for (ii = 0; ii <= 1; ++ii) {
                printf(" ");
            }
            for (j = 1; j <= 10; ++j) {
                printf("* ");
            }
        } else {
            for (k = 0; k <= 11; ++k) {
                printf("* ");
            }
        }
        printf("\n");
    }
    return EXIT_SUCCESS;
}
