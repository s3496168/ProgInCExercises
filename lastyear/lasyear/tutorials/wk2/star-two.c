
#include <stdio.h>
#include <stdlib.h>

int main(void) {
    int i;
    int j;
    int k = 15;
    int l = 14;
    int n;
    for (i = 1; i < k; ++i) {
        for (j = 1; j <= l; ++j) {
            printf(" ");
        }
        --l;
        for (n = 1; n <= i; ++n) {
            printf("*");
        }
        printf("\n");
    }
    return EXIT_SUCCESS;
}
