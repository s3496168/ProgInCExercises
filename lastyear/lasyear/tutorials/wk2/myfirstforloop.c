#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main(void) {
    int i;
    for (i = 0; i < 14; ++i) {
        int j = 2;
        long k = pow(i, j);
        printf("%s %d %s %ld\n", "2 to the power of ", i, "=", k);
    }
    return EXIT_SUCCESS;
}
