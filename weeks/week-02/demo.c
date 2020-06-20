#include <stdio.h>
#include <stdlib.h>

#define count 0
#define q 12
#define r 1
#define two 2

int main(void) {
    int this = count;
    int j = r;
    for (this = count; this <= q; ++this) {
        j *= two;
        printf("%d\n", j);
    }
    return EXIT_SUCCESS;
}
