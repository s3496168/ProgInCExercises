#include <stdio.h>
#include <stdlib.h>

int main(void) {
    int i;
    int j;
    for (i = 1; i < 15; ++i) {
        for (j = 1; j < i; ++j) {

            printf("* ");
        }
        printf("\n");
    }
    return EXIT_SUCCESS;
}
