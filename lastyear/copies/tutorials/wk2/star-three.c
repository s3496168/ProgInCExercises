

#include <stdio.h>
#include <stdlib.h>

int main(void) {
    int i;
    int j;
    int k = 15;
    int l = 14;
    int n;
    int m;
    for (i = 1; i < k; ++i) {
        for (j = 1; j <= l; ++j) {
            printf(" ");
        }
        --l;
        for (n = 1; n <= i; ++n) {
            printf("*");
        }
        for (m = 2; m <= i; ++m) {
            printf("*");
        }
        printf("\n");
    }
    return EXIT_SUCCESS;
}
